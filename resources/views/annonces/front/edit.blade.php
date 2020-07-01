@extends('layouts.menu')
@section('title', $annonce->title)

@section('content')

<style media="screen">
/*custom font*/
@import url(https://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/

.country-select.inside input, .country-select.inside input[type=text] {
    padding-right: 6px!important;
    padding-left: 52px!important;
    margin-left: 0;
}

html {
height: 100%;
background: #1B6DC1; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #1B6DC1, #1B6DC1); /* Chrome 10-25, Safari 5.1-6 */
}

body {
height: 100%!important;
font-family: montserrat, arial, verdana;
background: transparent;
}

/*form styles*/
#msform, #msform1 {
text-align: center;
position: relative;
margin-top: 30px;
}

#msform fieldset {
background: white;
border: 0 none;
border-radius: 0px;
box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
padding: 20px 30px;
box-sizing: border-box;
width: 80%;
margin: 30px auto;

/*stacking fieldsets above each other*/
position: relative;
}

/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
display: none;
}

/*inputs*/
#msform input, #msform textarea, #msform1 input, #msform1 textarea {
padding: 15px;
border: 1px solid #ccc;
border-radius: 0px;
margin-bottom: 10px;
width: 100%;
box-sizing: border-box;
font-family: montserrat;
color: #2C3E50;
font-size: 13px;
}

#msform textarea, #msform1 textarea {
resize: vertical;
min-height: 50px
}
#msform select, #msform1 select {
padding: 15px;
border: 1px solid #ccc;
border-radius: 0px;
margin-bottom: 10px;
width: 100%;
box-sizing: border-box;
font-family: montserrat;
color: #2C3E50;
font-size: 13px;
}

#msform input:focus, #msform textarea:focus, #msform1 input:focus, #msform1 textarea:focus {
-moz-box-shadow: none !important;
-webkit-box-shadow: none !important;
box-shadow: none !important;
border: 1px solid #ee0979;
outline-width: 0;
transition: All 0.5s ease-in;
-webkit-transition: All 0.5s ease-in;
-moz-transition: All 0.5s ease-in;
-o-transition: All 0.5s ease-in;
}

/*buttons*/
#msform .action-button, #msform1 .action-button {
width: 100px;
background: #00a78d;
font-weight: bold;
color: white;
border: 0 none;
border-radius: 25px;
cursor: pointer;
padding: 10px 5px;
margin: 10px 5px;
}

#msform .action-button:hover, #msform .action-button:focus {
box-shadow: 0 0 0 2px white, 0 0 0 3px #00a78d;
}

#msform .action-button-previous {
width: 100px;
background: #C5C5F1;
font-weight: bold;
color: white;
border: 0 none;
border-radius: 25px;
cursor: pointer;
padding: 10px 5px;
margin: 10px 5px;
}

#msform .action-button-previous:hover, #msform .action-button-previous:focus {
box-shadow: 0 0 0 2px white, 0 0 0 3px #C5C5F1;
}

/*headings*/
.fs-title {
font-size: 18px;
text-transform: uppercase;
color: #2C3E50;
margin-bottom: 10px;
letter-spacing: 2px;
font-weight: bold;
}

.fs-subtitle {
font-weight: normal;
font-size: 13px;
color: #666;
margin-bottom: 20px;
}

/*progressbar*/
#progressbar {
margin-bottom: 30px;
overflow: hidden;
/*CSS counters to number the steps*/
counter-reset: step;
}

#progressbar li {
list-style-type: none;
color: white;
text-transform: uppercase;
font-size: 9px;
width: 25%;
float: left;
position: relative;
letter-spacing: 1px;
padding: 0px !important;
}

#progressbar li:before {
content: counter(step);
counter-increment: step;
width: 24px;
height: 24px;
line-height: 26px;
display: block;
font-size: 12px;
color: #333;
background: white;
border-radius: 25px;
margin: 0 auto 10px auto;
}

/*progressbar connectors*/
#progressbar li:after {
content: '';
width: 100%;
height: 2px;
background: white;
position: absolute;
left: -50%;
top: 9px;
z-index: -1; /*put it behind the numbers*/
}

#progressbar li:first-child:after {
/*connector not needed before the first step*/
content: none;
}

/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before, #progressbar li.active:after {
background: #00a78d;
color: white;
}


/* Not relevant to this form */
.dme_link {
margin-top: 30px;
text-align: center;
}
.dme_link a {
background: #FFF;
font-weight: bold;
color: #ee0979;
border: 0 none;
border-radius: 25px;
cursor: pointer;
padding: 5px 25px;
font-size: 12px;
}

.dme_link a:hover, .dme_link a:focus {
background: #C5C5F1;
text-decoration: none;
}
ul li{
    padding: 0;
}
</style>

<style>
.chip {
  display: inline-block;
  padding: 0 25px;
  height: 50px;
  font-size: 18px;
  line-height: 50px;
  border-radius: 25px;
  background-color: #f1f1f1;
  margin-bottom: 15px;
}

.chip img {
  float: left;
  margin: 0 10px 0 -25px;
  height: 50px;
  width: 50px;
  border-radius: 50%;
}

.closebtn {
  padding-left: 10px;
  color: #888;
  font-weight: bold;
  float: right;
  font-size: 20px;
  cursor: pointer;
}

.closebtn:hover {
  color: #000;
}

footer {
    padding-bottom: 30px;
    display: none;
}
.video_t{
    display: none;
}
.line, .vimeo, .update{
  border: 1px solid #9e9e9e !important;
}

.footer-wrap{
  display: none;
}

.wpneo-shadow {
    -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
    background: #fff;
    border-radius: 4px;
}

.wpneo-head {
    margin-bottom: 30px;
    background: #fff;
    padding: 0 20px;
}

.clearfix::after {
    display: block;
    clear: both;
    content: "";
}

.wpneo-links .wpneo-links-list {
    display: inline-block;
}

.wpneo-links-list {
    display: block;
    position: relative;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.wp-crowd-parent {
    position: relative;
}

.wp-crowd-new-campaign {
    margin-top: 17px;
}
.wp-crowd-new-campaign {
    float: right;
    margin-top: 15px;
}

.wpneo-links div a:hover, .wpneo-links div.active a {
    color: #33d3c0;
}
.wpneo-links div a:hover, .wpneo-links div.active a {
    color: #1B6DC1;
}
.wpneo-links .wpneo-links-list a {
    font-weight: 300;
}
.wpneo-links .wpneo-links-list a {
    display: block;
    color: #686C8B;
    font-size: 14px;
    line-height: 58px;
    padding: 0;
    margin-right: 25px;
    text-decoration: none;
    font-weight: 400;
    box-shadow: none;
}
.wpneo-links a {
    box-shadow: none;
    line-height: 20px;
}

.wp-crowd-btn-primary {
    background-color: #1B6DC1;
    color: #fff;
}
.wp-crowd-btn {
    border-radius: 50px;
}
.wp-crowd-btn-primary {
    background-color: #1B6DC1;
    color: #fff;
}
.wp-crowd-btn {
    padding: 10px 20px;
    text-decoration: none;
    box-shadow: none;
    border: none;
    font-size: 14px;
    font-weight: 300;
    border-radius: 3px;
    text-transform: capitalize;
    transition: 400ms;
}

.modal-title {

    margin: 0 auto;
}
.modal-header .close {

    margin: -1rem -1rem -1rem 0;
}
.modal-header{
  margin: 15px;
}

@media only screen and (max-width: 600px) {

  #msform fieldset {
    padding: 20px ;
    width: 100%;
  }

  .wpneo-head{
    width: 100%!important;
  }
}
</style>

<!-- MultiStep Form -->
<div class="container">

  @if(session('status'))
  @include('includes.status')
  @endif
    <div style="width: 82%; margin: auto; top: 10px; position: relative;" class="wpneo-head wpneo-shadow">
        <div class="wpneo-links clearfix">
            <div class="wpneo-links-list active"><a href="https://demo.themeum.com/wordpress/backnow/dashboard/?page_type=dashboard">Mes annonces</a></div>
            <div class="wpneo-links-list wp-crowd-parent">
                @if($annonce->published == 0)
                <a href="/publishProject">Publier l'annonce<!--span class="wpcrowd-arrow-down"></span--></a>
                @else
                <a href="/unpublishProject">Mettre l'annonce en mode brouillon<!--span class="wpcrowd-arrow-down"></span--></a>
                @endif
                <!--div class="wp-crowd-submenu wpneo-shadow">
                    <div class="wpneo-links-lists "><a href="https://demo.themeum.com/wordpress/backnow/dashboard/?page_type=profile">Profile</a></div>
                    <div class="wpneo-links-lists "><a href="https://demo.themeum.com/wordpress/backnow/dashboard/?page_type=contact">Contact</a></div>
                    <div class="wpneo-links-lists "><a href="https://demo.themeum.com/wordpress/backnow/dashboard/?page_type=password">Password</a></div>
                    <div class="wpneo-links-lists "><a href="https://demo.themeum.com/wordpress/backnow/dashboard/?page_type=rewards">Rewards</a></div>
                    <div class="wpneo-links-lists"><a href="https://demo.themeum.com/wordpress/backnow/wp-login.php?action=logout&amp;redirect_to=https%3A%2F%2Fdemo.themeum.com%2Fwordpress%2Fbacknow&amp;_wpnonce=18302b08e3">Logout</a></div>
                </div-->
            </div>
            <!--div class="wpneo-links-list wp-crowd-parent"><a href="#">Déconnexion<span class="wpcrowd-arrow-down"></span></a>
                <--div class="wp-crowd-submenu wpneo-shadow">
                    <div class="wpneo-links-lists "><a href="https://demo.themeum.com/wordpress/backnow/dashboard/?page_type=campaign">My Campaigns</a></div>
                    <div class="wpneo-links-lists "><a href="https://demo.themeum.com/wordpress/backnow/dashboard/?page_type=backed_campaigns">My Invested Campaigns</a></div>
                    <div class="wpneo-links-lists "><a href="https://demo.themeum.com/wordpress/backnow/dashboard/?page_type=pledges_received">Pledges Received</a></div>
                    <div class="wpneo-links-lists "><a href="https://demo.themeum.com/wordpress/backnow/dashboard/?page_type=bookmark">Bookmarks</a></div>
                </div>
            </div-->
            <div class="wp-crowd-new-campaign"><a class="wp-crowd-btn wp-crowd-btn-primary"  href="{{url('annonces', $annonce)}}">Voir l'annonce</a></div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-md-offset-3">
            <form enctype="multipart/form-data" method="post" action="{{url('annonces', $annonce)}}" id="msform">
              @csrf
              {{method_field('patch')}}
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active">La société</li>
                    <li>La présentation et l'offre</li>
                    <li>L'équipe</li>
                    <li>Médias et documents</li>
                </ul>
                <!-- fieldsets -->
                @include('includes.annonces.societe')
                @include('includes.annonces.presentation')
                @include('includes.annonces.equipe')
                @include('includes.annonces.document')




            </form>
            <!-- link to designify.me code snippets -->
            <!-- /.link to designify.me code snippets -->
        </div>
    </div>
</div>
<!-- /.MultiStep Form -->


@foreach($annonce->teams as $team)

<div class="modal fade" id="modalmyTeam{{$team->id}}">

      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">

              <h4 class="modal-title text-center">Modifier un membre de votre équipe</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
              <div class="card" style="">
                  <form class="myTeam" enctype="multipart/form-data" id="myTeam{{$team->id}}">
                  <div class="row" style="padding: 25px">
                      <div class="col-md-6 col-sm-12">
                          <img class="card-img-top rounded-circle" src="/storage/images/users/image.jpg" alt="Card image"  style="width:35%">
                      </div>
                      <div class="col-md-6 col-sm-12">
                          <input id="team_imagemyTeam{{$team->id}}" type="file" name="image" placeholder="" />
                      </div>
                  </div>

                  <div class="card-body">
                      <div class="form-group">
                          <input value="{{$team->name}}" id="team_name" type="text" id="" placeholder="Nom" name="name">
                      </div>
                      <div class="form-group">
                          <input value="{{$team->url}}" id="team_url" type="url" id="" placeholder="Linkedin" name="url">
                      </div>
                      <div class="form-group">
                          <input value="{{$team->position}}" id="team_position" type="text" id="" placeholder="Titre ou poste dans la société" name="position">
                      </div>

                      <textarea id="team_bio" name="bio" placeholder="Bio">
                          {{$team->bio}}
                      </textarea>

                      <input id="team_id" type="text" hidden name="" value="{{$team->id}}">

                  </div>
                  <button type="submit" class="btn btn-primary">Modifier</button>
                  </form>
              </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>

</div>

@endforeach

<!--Modal de l'ajout d'un membre de l'équipe-->
<!-- The Modal -->
          <div class="modal fade" id="addTeamModal">

                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">

                        <h4 class="modal-title text-center">Ajouter un membre de l'équipe</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="card" style="">
                            <form enctype="multipart/form-data" id="addTeam">
                            <div class="row" style="padding: 25px">
                                <div class="col-md-6 col-sm-12">
                                    <img class="card-img-top rounded-circle" src="/storage/images/users/image.jpg" alt="Card image"  style="width:35%">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <input id="team_image" type="file" name="image" placeholder="" />
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <input id="team_name" type="text" id="" placeholder="Nom" name="name">
                                </div>
                                <div class="form-group">
                                    <input id="team_url" type="url" id="" placeholder="Linkedin" name="url">
                                </div>
                                <div class="form-group">
                                    <input id="team_position" type="text" id="" placeholder="Titre ou poste dans la société" name="position">
                                </div>

                                <textarea id="team_bio" name="bio" placeholder="Bio"></textarea>

                                <input id="team_annonce_id" hidden type="text" name="annonce_id" value="{{$annonce->id}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                            </form>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>

          </div>

<!--/ Modal de l'ajout d'un membre de l'équipe-->
<!-- /The Modal -->


<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>

<script src="/plugin/build/js/intlTelInput.js"></script>
<script>
var input = document.querySelector("#phone_2");
window.intlTelInput(input, {

  autoPlaceholder: "polite",

   hiddenInput: "phone",

   nationalMode: true,

   preferredCountries: ["ci", "fr"],
   separateDialCode: true,
  utilsScript: "/plugin/build/js/utils.js",
});
</script>


<script src="/plugin/build/js/countrySelect.min.js"></script>
<script>
$("#country").countrySelect();
$("#country_2").countrySelect();

</script>



  <script type="text/javascript">
      $(document).ready(function(){

          $('.line').click(function() {
              $('#int').toggle('slow');
              $('#tele, #vimeo').hide();
          });

          $('.vimeo').click(function() {
              $('#vimeo').toggle('slow');
              $('#tele, #int').hide();
          });

          $('.update').click(function() {
              $('#tele').toggle('slow');
              $('#int, #vimeo').hide();
          });

  });
  </script>

<script type="text/javascript">


//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;

	current_fs = $(this).parent();
	next_fs = $(this).parent().next();

	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

	//show the next fieldset
	next_fs.show();
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		},
		duration: 800,
		complete: function(){
			current_fs.hide();
			animating = false;
		},
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;

	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();

	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

	//show the previous fieldset
	previous_fs.show();
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		},
		duration: 800,
		complete: function(){
			current_fs.hide();
			animating = false;
		},
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

/*
$(".submit").click(function(){
	return false;
})
*/

</script>





<!--add team-->
<script type="text/javascript">

var form = $('#addTeam');
var form_data = new FormData();
form.submit(function(e) {

e.preventDefault();

form_data.append("image", document.getElementById('team_image').files[0]);
form_data.append("name", $(this).find('#team_name').val());
form_data.append("url", $(this).find('#team_url').val());
form_data.append("position", $(this).find('#team_position').val());
form_data.append("annonce_id", $(this).find('#team_annonce_id').val());
form_data.append("bio", $(this).find('#team_bio').val());

$.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });

$.ajax({
    type: 'post',
    url: '/addTeam',
    data: form_data,
    dataType: 'json',
    contentType: false,
    cache: false,
    processData: false,
    success: function(data) {
        console.log(data.name);
        //reinitialisation du formulaire
    $('#addTeam ')[0].reset();

    //close the popup
    $('#addTeamModal').modal('toggle');

    $('#team_list').append("<div id=teammyTeam'"+data.id+"' class='chip'>\
      <img src='/storage/images/users/"+data.image+"' alt='"+data.name+"' width='96' height='96'>\
      "+data.name+"\
      <span class='closebtn deleteTeam'><i class='far fa-trash-alt' style='font-size: 15px;' aria-hidden='true'></i></span>\
      <span class='closebtn'><i data-toggle='modal' data-target='#modalmyTeam"+data.id+"' class='fas fa-pencil-alt' style='font-size: 15px;' aria-hidden='true'></i></span>\
    </div>");

    $('body').append("<div class='modal fade' id='modalmyTeam"+data.id+"'>\
          <div class='modal-dialog modal-dialog-centered'>\
            <div class='modal-content'>\
              <div class='modal-header'>\
                  <h4 class='modal-title text-center'>Modifier un membre de votre équipe</h4>\
                  <button type='button' class='close' data-dismiss='modal'>&times;</button>\
              </div>\
              <div class='modal-body'>\
                  <div class='card' style=''>\
                      <div class='myTeam' enctype='multipart/form-data' id='myTeam"+data.id+"'>\
                      <div class='row' style='padding: 25px'>\
                          <div class='col-md-6 col-sm-12'>\
                              <img class='card-img-top rounded-circle' src='/storage/images/users/"+data.image+"' alt='Card image'  style='width:35%'>\
                          </div>\
                          <div class='col-md-6 col-sm-12'>\
                              <input id='team_imagemyTeam"+data.id+"' type='file' name='image' placeholder='' />\
                          </div>\
                      </div>\
                      <div class='card-body'>\
                          <div class='form-group'>\
                              <input value='"+data.name+"' id='team_name' type='text' id='' placeholder='Nom' name='name'>\
                          </div>\
                          <div class='form-group'>\
                              <input value='"+data.url+"' id='team_url' type='url' id='' placeholder='Linkedin' name='url'>\
                          </div>\
                          <div class='form-group'>\
                              <input value='"+data.position+"' id='team_position' type='text' id='' placeholder='Titre ou poste dans la société' name='position'>\
                          </div>\
                          <textarea id='team_bio' name='bio' placeholder='Bio'>\
                              "+data.bio+"\
                          </textarea>\
                          <input id='team_id' type='text' hidden name='' value='"+data.id+"'>\
                      </div>\
                      <button type='button' class='btn btn-primary edit'>Modifier</button>\
                      </div>\
                  </div>\
              </div>\
              <div class='modal-footer'>\
                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>\
              </div>\
            </div>\
          </div>\
    </div>");

  $.amaran({'message':"Membre de l\'équipe ajouté avec succès!"});

    },
    error: function (xhr, msg) {
      console.log(msg + '\n' + xhr.responseText);
  }
});
});

</script>

<script type="text/javascript">

var form_data = new FormData();


    $(document).on('click', '.edit', function(e) {

        form_data.append("image", document.getElementById('team_image'+$(this).parent().attr('id')).files[0]);
        form_data.append("name", $(this).parent().find('#team_name').val());
        form_data.append("team_id", $(this).parent().find('#team_id').val());
        form_data.append("url", $(this).parent().find('#team_url').val());
        form_data.append("position", $(this).parent().find('#team_position').val());
        form_data.append("bio", $(this).parent().find('#team_bio').val());

    //close the popup
    $('#modal'+$(this).parent().attr('id')).modal('toggle');


        $.ajaxSetup({
                   headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   }
               });

        $.ajax({
            type: 'post',
            url: '/editTeam',
            data: form_data,
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {

                $.amaran({'message':"Membre de l\'équipe modifié avec succès!"});

                location.reload();

            },
            error: function (xhr, msg) {
              console.log(msg + '\n' + xhr.responseText);
          }
        });

});
</script>



        <!--edit team-->
        <script type="text/javascript">

        var form_data = new FormData();

            $('.myTeam').on('submit', function(e) {


            e.preventDefault();

            form_data.append("image", document.getElementById('team_image'+$(this).attr('id')).files[0]);
            form_data.append("name", $(this).find('#team_name').val());
            form_data.append("team_id", $(this).find('#team_id').val());
            form_data.append("url", $(this).find('#team_url').val());
            form_data.append("position", $(this).find('#team_position').val());
            form_data.append("bio", $(this).find('#team_bio').val());

        //close the popup
        $('#modal'+$(this).attr('id')).modal('toggle');

            $.ajaxSetup({
                       headers: {
                           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                       }
                   });

            $.ajax({
                type: 'post',
                url: '/editTeam',
                data: form_data,
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {


                $('#teammyTeam'+data.id).html("<img src='/storage/images/users/"+data.image+"' alt='"+data.name+"' width='96' height='96'>\
                "+data.name+"\
                <span class='closebtn deleteTeam'><i class='far fa-trash-alt' style='font-size: 15px;' aria-hidden='true'></i></span>\
                <span class='closebtn'><i data-toggle='modal' data-target='#myTeam"+data.id+"' class='fas fa-pencil-alt' style='font-size: 15px;' aria-hidden='true'></i></span>");



              $.amaran({'message':"Membre de l\'équipe modifié avec succès!"});

                },
                error: function (xhr, msg) {
                  console.log(msg + '\n' + xhr.responseText);
              }
            });
        });

        </script>



        <!--delete team-->
        <script type="text/javascript">

        var form_data = new FormData();

            $('.deleteTeam').click(function(e) {


            e.preventDefault();

            form_data.append("team_id", $(this).attr('id'));

            $('#teammyTeam'+$(this).attr('id')).remove();

            $.ajaxSetup({
                       headers: {
                           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                       }
                   });

            $.ajax({
                type: 'post',
                url: '/deleteTeam',
                data: form_data,
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {

              $.amaran({'message':"Membre de l\'équipe supprimé avec succès!"});

                },
                error: function (xhr, msg) {
                  console.log(msg + '\n' + xhr.responseText);
              }
            });
        });

        </script>

@endsection
