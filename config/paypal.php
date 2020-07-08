<?php
return [
    'client_id' => env('PAYPAL_CLIENT_ID','AV4_6sSLRUxQkIMFhSqV_nkVN2PICsgKr5Xzptw0X7NrVmLsdBPPPDURfDJUrdu4ln9iGE2oI-eqTYRG'),
    'secret' => env('PAYPAL_SECRET','ELChJIRSTYuhPGnliwPkiOsa0rskZ-56Pvql38925XnHFaqQ6X67eaJanoZLKZV27_w9ojShIDk_wJ0s'),
    'settings' => array(
        'mode' => env('PAYPAL_MODE','sandbox'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];
