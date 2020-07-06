@extends('layouts.menu')
@section('title', 'Formules d\'abonnement')

@section('content')

<style media="screen">
section.pricing {
background: #ececec !important;
background: linear-gradient(to right, #FC0255, #08192D);
}

.pricing .card {
border: none;
border-radius: 1rem;
transition: all 0.2s;
box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.pricing hr {
margin: 1.5rem 0;
}

.pricing .card-title {
margin: 0.5rem 0;
font-size: 0.9rem;
letter-spacing: .1rem;
font-weight: bold;
}

.pricing .card-price {
font-size: 3rem;
margin: 0;
}

.pricing .card-price .period {
font-size: 0.8rem;
}

.pricing ul li {
margin-bottom: 1rem;
}

.pricing .text-muted {
opacity: 0.7;
}

.pricing .btn {
font-size: 80%;
border-radius: 5rem;
letter-spacing: .1rem;
font-weight: bold;
padding: 1rem;
opacity: 0.7;
transition: all 0.2s;
background-color: #fc0254 !important;
    border-color: #fc0254 !important;
}

.contentbox_row {
    width: 80%;
    margin: 2rem 0;
}
.marg{
  margin-bottom: 15px !important;
}

@media screen and (max-width: 600px){
    .marg{
      width: 100% !important;
    }
}
@media screen and (max-width: 900px) and (min-width: 601px){
  .marg{
      width: 50% !important;
    }
}

</style>

<section class="pricing py-5">
  <div class="container">
      @auth
    <div class="row contentbox_row">
          <div class="col-sm-12 contentbox center">



              <div class="col-lg-4">
                <div class="card mb-5 mb-lg-0">
                  <div class="card-body">
                    <h5 class="card-title text-muted text-uppercase text-center">{{Auth::user()->purchases->where('status', '1')->last()->pricing->name}}</h5>
                    <h6 class="card-price text-center">${{Auth::user()->purchases->where('status', '1')->last()->pricing->price}}<span class="period">/mois</span></h6>
                    <hr>
                    <ul class="fa-ul">
                      @foreach(Auth::user()->purchases->where('status', '1')->last()->pricing->characteristics as $characteristic)
                      <li><span class="fa-li"><i class="fa fa-check"></i></span><strong>{{$characteristic->description}}</strong></li>
                      @endforeach
                    </ul>

                  </div>
                </div>
              </div>
          </div>

      </div>
      @endauth
    <div class="row">

      <!-- Plus Tier -->
      @auth
      @foreach($pricings as $pricing)
      @if(!Auth::user()->purchases->where('pricing_id', $pricing->id)->first())
      <div class="col-lg-4 marg">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">{{$pricing->name}}</h5>
            <h6 class="card-price text-center">${{$pricing->price}}<span class="period">/mois</span></h6>
            <hr>
            <ul class="fa-ul">
              @foreach($pricing->characteristics as $characteristic)
              <li><span class="fa-li"><i class="fa fa-check"></i></span><strong>{{$characteristic->description}}</strong></li>
              @endforeach
            </ul>
            <form class="w3-container w3-display-middle w3-card-4 " method="POST" id="payment-form"  action="{!! URL::to('paypal') !!}">
              {{ csrf_field() }}
            <input hidden value="{{$pricing->price}}" class="" name="amount" type="text">
            <input hidden value="Abonnement {{$pricing->name}}" class="" name="item" type="text">
            <input hidden value="Abonnement {{$pricing->id}}" class="" name="pricing_id" type="text">
            <button href="#" class="btn btn-block btn-primary text-uppercase">Adhérer maintenant</button>
            </form>
          </div>
        </div>
      </div>
      @endif
      @endforeach
      @endauth

      @guest
      @foreach($pricings as $pricing)
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">{{$pricing->name}}</h5>
            <h6 class="card-price text-center">${{$pricing->price}}<span class="period">/mois</span></h6>
            <hr>
            <ul class="fa-ul">
              @foreach($pricing->characteristics as $characteristic)
              <li><span class="fa-li"><i class="fa fa-check"></i></span><strong>{{$characteristic->description}}</strong></li>
              @endforeach
            </ul>
            <form class="w3-container w3-display-middle w3-card-4 " method="POST" id="payment-form"  action="{!! URL::to('paypal') !!}">
              {{ csrf_field() }}
            <input hidden value="{{$pricing->price}}" class="" name="amount" type="text">
            <input hidden value="Abonnement {{$pricing->name}}" class="" name="item" type="text">
            <input hidden value="Abonnement {{$pricing->id}}" class="" name="pricing_id" type="text">
            <button href="#" class="btn btn-block btn-primary text-uppercase">Adhérer maintenant</button>
            </form>
          </div>
        </div>
      </div>
      @endforeach
      @endguest
    </div>
  </div>
</section>

@endsection
