<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Redirect;
use Session;
use URL;
use PayPal\Exception\PayPalConnectionException;
use Auth;
use App\Purchase;
use App\Pricing;
use Carbon\Carbon;

class PaymentController extends Controller
{
    private $_api_context;

    public function __construct()
    {

        /** PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
            'AV4_6sSLRUxQkIMFhSqV_nkVN2PICsgKr5Xzptw0X7NrVmLsdBPPPDURfDJUrdu4ln9iGE2oI-eqTYRG',
            'ELChJIRSTYuhPGnliwPkiOsa0rskZ-56Pvql38925XnHFaqQ6X67eaJanoZLKZV27_w9ojShIDk_wJ0s')
        );
        $this->_api_context->setConfig(array(
            'mode' => env('PAYPAL_MODE','sandbox'),
            'http.ConnectionTimeOut' => 30,
            'log.LogEnabled' => true,
            'log.FileName' => storage_path() . '/logs/paypal.log',
            'log.LogLevel' => 'ERROR'
        ));

    }

    public function payWithpaypal(Request $request)
      {

          \Session::put('pricing', $request->pricing_id);

          $payer = new Payer();
          $payer->setPaymentMethod('paypal');

          $item_1 = new Item();

          $item_1->setName($request->get('item')) /** item name **/
              ->setCurrency('USD')
              ->setQuantity(1)
              ->setPrice($request->get('amount')); /** unit price **/

          $item_list = new ItemList();
          $item_list->setItems(array($item_1));

          $amount = new Amount();
          $amount->setCurrency('USD')
              ->setTotal($request->get('amount'));

          $transaction = new Transaction();
          $transaction->setAmount($amount)
              ->setItemList($item_list)
              ->setDescription('La description de votre transaction');

          $redirect_urls = new RedirectUrls();
          $redirect_urls->setReturnUrl(URL::route('status')) /** Specify return URL **/
              ->setCancelUrl(URL::route('status'));

          $payment = new Payment();
          $payment->setIntent('Sale')
              ->setPayer($payer)
              ->setRedirectUrls($redirect_urls)
              ->setTransactions(array($transaction));
          /** dd($payment->create($this->_api_context));exit; **/
          try {

              $payment->create($this->_api_context);

          } catch (\PayPal\Exception\PPConnectionException $ex) {

              if (\Config::get('app.debug')) {

                  \Session::put('error', 'Connection timeout');
                  return Redirect::route('paywithpaypal');

              } else {

                  \Session::put('error', 'Some error occur, sorry for inconvenient');
                  return Redirect::route('paywithpaypal');

              }

          }

          foreach ($payment->getLinks() as $link) {

              if ($link->getRel() == 'approval_url') {

                  $redirect_url = $link->getHref();
                  break;

              }

          }

          /** add payment ID to session **/
          Session::put('paypal_payment_id', $payment->getId());

          if (isset($redirect_url)) {

              /** redirect to paypal **/
              return Redirect::away($redirect_url);

          }

          \Session::put('error', 'Une erreur est survenue');
          return Redirect::route('paywithpaypal');

      }



      public function getPaymentStatus(Request $request)
      {
          /** Get the payment ID before session clear **/
          $payment_id = Session::get('paypal_payment_id');

          /** clear the session payment ID **/
          Session::forget('paypal_payment_id');
          if (empty($request->input('PayerID')) || empty($request->input('token'))) {

              \Session::put('error', 'Payment failed');
              return Redirect::route('bienvenue');

          }

          $payment = Payment::get($payment_id, $this->_api_context);
          $execution = new PaymentExecution();
          $execution->setPayerId($request->input('PayerID'));

          /**Execute the payment **/
          $result = $payment->execute($execution, $this->_api_context);

          if ($result->getState() == 'approved') {

              \Session::put('success', 'Paiement effectué avec succès ! Consultez votre boîte mail');
              $pricing = Pricing::find(\Session::get('pricing'));
              $purchase = Purchase::create([
                  'date' => Carbon::now(),
                  'price' => $pricing->price,
                  'status' => '1',
                  'pricing_id' => $pricing->id,
                  'trans_id' => date("YmdHis"),
                  'user_id' => Auth::user()->id,

              ]);
              return redirect('home');



          }

          \Session::put('error', 'Paiement échoué');
          return redirect('home');

      }



}
