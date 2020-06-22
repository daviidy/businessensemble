@extends('layouts.admin')
@section('title', 'Informations de '.$user->name)
@section('page_title', 'Informations de '.$user->Name)
@section('link_title', 'Informations de '.$user->name)

@section('content')

<style media="screen">
/*! CSS Used from: https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css */
*,::after,::before{box-sizing:border-box;}
p{margin-top:0;margin-bottom:1rem;}
strong{font-weight:bolder;}
a{color:#007bff;text-decoration:none;background-color:transparent;}
a:hover{color:#0056b3;text-decoration:underline;}
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
a:not(.btn){text-decoration:underline;}
p{orphans:3;widows:3;}
}
/*! CSS Used from: Embedded ; media=screen */
@media screen{
@media all{
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
}
*,::after,::before{box-sizing:border-box;}
a{color:#1B6DC1;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
a:hover{color:#0056b3;text-decoration:underline;}
a{-ms-touch-action:manipulation;touch-action:manipulation;}
}
@media all{
a{text-decoration:none!important;}
a:focus{outline:0;outline-offset:0;}
}
a{color:#33d3c0;}
a:hover{color:#00bf9c;}
}
/*! CSS Used from: Embedded ; media=screen */
@media screen{
@media all{
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
}
*,::after,::before{box-sizing:border-box;}
a{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
a:hover{color:#0056b3;text-decoration:underline;}
a{-ms-touch-action:manipulation;touch-action:manipulation;}
}
@media all{
a{text-decoration:none!important;}
a:focus{outline:0;outline-offset:0;}
}
a{color:#33d3c0;}
a:hover{color:#00bf9c;}
}
/*! CSS Used from: Embedded ; media=screen */
@media screen{
@media screen and (min-width: 768px){
.ss-content-wrapper{margin:5rem;}
}
}
/*! CSS Used from: Embedded ; media=screen */
@media screen{
@media print{
*,*::before,*::after,p::first-letter,div::first-letter,p::first-line,div::first-line{text-shadow:none!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
p{orphans:3;widows:3;}
}
*,*::before,*::after{-webkit-box-sizing:inherit;box-sizing:inherit;}
p{margin-top:0;margin-bottom:1rem;}
div,p{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
p{font-family:'Varela Round', sans-serif;line-height:24px;margin:0;font-size:14px;letter-spacing:1px;}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}
}
/*! CSS Used from: Embedded ; media=screen */
@media screen{
a{background-color:transparent;}
*,:after,:before{box-sizing:inherit;}
a{text-decoration:none;}
.field-value{color:#333;font-family:'Montserrat', sans-serif;font-size:1rem;letter-spacing:.11px;line-height:1.5em;padding-bottom:1.25em;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;}
@media (min-width:992px){
.field-value{padding-bottom:1.875em;}
}
.ss-page-title{font-family:'Montserrat', sans-serif;color:#2c313b;font-size:1.875rem;font-weight:700;letter-spacing:.21px;line-height:1.167em;padding-bottom:1em;text-align:center;}
.ss-profile-info{border-radius:8px;background-color:#fff;box-shadow:0 10px 20px 0 rgba(0,0,0,.1);padding:1.875em 1.25em;margin-bottom:3.13em;}
@media (min-width:480px){
.ss-profile-info{padding:1.875em;}
}
@media (min-width:992px){
.ss-profile-info{padding:2.5em 4.375em;}
}
.ss-profile-details{border-bottom:1px solid #dfdfdf;padding-bottom:1.875em;}
.ss-flex{display:flex;flex-wrap:wrap;}
.ss-flex-item-info{width:100%;}
@media (min-width:480px){
.ss-flex-item-info{width:50%;}
.ss-flex-item-info.email{order:2;padding:0 0 0 .9375em;align-self:center;}
}
@media (min-width:768px){
.ss-flex-item-info.email{padding:0 0 0 2.1875em;}
}
@media (min-width:992px){
.ss-flex-item-info.email{order:1;padding:0 .9375em 0 0;}
}
.ss-flex-item{width:100%;}
@media (min-width:480px){
.ss-flex-item{text-align:left;width:50%;}
.ss-flex-item:nth-of-type(2n){padding-left:.9375em;}
.ss-flex-item:nth-of-type(2n-1){padding-right:.9375em;}
}
@media (min-width:768px){
.ss-flex-item:nth-of-type(2n){padding-left:2.1875em;}
.ss-flex-item:nth-of-type(2n-1){padding-right:2.1875em;}
}
@media (min-width:992px) and (max-width:1200px){
.ss-flex-item:nth-of-type(2n){padding-left:.9375em;}
.ss-flex-item:nth-of-type(2n-1){padding-right:.9375em;}
}
.ss-field-label{font-family:'Montserrat', sans-serif;color:#62686e;font-size:.875rem;letter-spacing:.1px;line-height:1.286em;padding:.714em .3125em .714em 0;}
.ss-field-label-large{font-family:'Montserrat', sans-serif;color:#2c313b;font-size:1.5rem;font-weight:700;padding-bottom:.5em;}
.ss-empty-value{color:#95989d;}
.ss-edit-profile-button{font-family:'Montserrat', sans-serif;display:inline-block;background-color:#af0309;border-radius:91px;color:#fff;width:100%;font-size:1rem;font-weight:600;letter-spacing:.4px;line-height:1em;text-align:center;padding:.9375em 0;margin-top:1.875em;margin-right:15px;cursor:pointer;}
.ss-edit-profile-button:focus{outline:0;}
.ss-edit-profile-button:hover{background-color:#ffffff;border:2px solid #af0309; color: #af0309}
@media (min-width:768px){
.ss-edit-profile-button{padding-left:20px;padding-right:20px;max-width:16em;}
}
}
/*! CSS Used from: Embedded ; media=screen */
@media screen{
@media all{
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
}
*,::after,::before{box-sizing:border-box;}
a{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
a:hover{color:#0056b3;text-decoration:underline;}
a{-ms-touch-action:manipulation;touch-action:manipulation;}
}
@media all{
a{text-decoration:none!important;}
a:focus{outline:0;outline-offset:0;}
}
a{color:#33d3c0;}
a:hover{color:#00bf9c;}
}

</style>

<div class="pcoded-inner-content">

    <div class="ss-content-wrapper">
        <div class="ss-page-title">Aperçu des informations de {{$user->name}}</div>
        <div class="profile-page">
            <div class="ss-profile-info">
                <div class="ss-profile-details">
                    <div class="ss-flex">
                        <div class="ss-flex-item-info email">
                            <div class="ss-field-label-large">
                                {{ucfirst($user->name)}} ({{$user->type}}) </div>
                            <div class="field-value">
                                {{$user->email}} </div>
                        </div>

                    </div>
                    <div class="ss-flex">

                        <div class="ss-flex-item">
                            <div class="ss-field-label">Nom:</div>
                            <div class="field-value ss-empty-value">
                               <p>
    	                            @if($user->first_name)
    	                            {{$user->first_name}}
    	                            @else
    	                            Aucun prénom renseigné
    	                            @endif
                                </p>
                            </div>
                        </div>
                        <div class="ss-flex-item">
                            <div class="ss-field-label">Prenoms</div>
                            <div class="field-value ss-empty-value">
                            	<p>
                            		@if($user->last_name)
    	                            {{$user->last_name}}
    	                            @else
    	                            Aucun nom renseigné
    	                            @endif
                            	</p>
                            </div>
                        </div>

                    </div>
                    <div class="ss-flex">

                        <div class="ss-flex-item">
                            <div class="ss-field-label">Ville :</div>
                            <div class="field-value ss-empty-value">
                               <p>
                                   @if($user->city)
    	                            {{$user->city}}
    	                            @else
    	                            Aucune ville renseignée
    	                            @endif
                               </p>
                            </div>
                        </div>
                        <div class="ss-flex-item">
                            <div class="ss-field-label">Pays </div>
                            <div class="field-value ss-empty-value">
                            	<p>
                            		@if($user->country)
    	                            {{$user->country}}
    	                            @else
    	                            Aucun pays renseigné
    	                            @endif
                            	</p>
                            </div>
                        </div>

                    </div>

                    <div class="ss-flex">


                        <div class="ss-flex-item">
                            <div class="ss-field-label">Contact : </div>
                            <div class="field-value ss-empty-value">
                            	<p>
                            		@if($user->phone)
    	                            {{$user->phone}}
    	                            @else
    	                            Aucun numéro de téléphone
    	                            @endif
                            	</p>
                            </div>
                        </div>

                    </div>

                    <div class="ss-flex">

                        <div class="ss-flex-item">
                            <div class="ss-field-label">Biographie :</div>
                            <div class="field-value ss-empty-value">
                               <p>
                                   @if($user->bio)
    	                            {!!$user->bio!!}
    	                            @else
    	                            Aucune biographie
    	                            @endif
                               </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="boutton">
                	<a class="ss-edit-profile-button" href="{{route('users.edit', $user)}}" rel="noopener">Supprimer l'utilisateur</a>

                </div>
            </div>
        </div>
    </div>

</div>


@endsection
