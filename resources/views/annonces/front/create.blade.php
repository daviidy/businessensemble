@extends('layouts.menu')
@section('title', 'Créer une annonce')

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
background: #6441A5; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #6441A5, #2a0845); /* Chrome 10-25, Safari 5.1-6 */
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
background: #ee0979;
font-weight: bold;
color: white;
border: 0 none;
border-radius: 25px;
cursor: pointer;
padding: 10px 5px;
margin: 10px 5px;
}

#msform .action-button:hover, #msform .action-button:focus {
box-shadow: 0 0 0 2px white, 0 0 0 3px #ee0979;
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
background: #ee0979;
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
    padding: 0!important;
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
</style>

<!-- MultiStep Form -->
<div class="container">
    

    <div class="row">
        <div class="col-md-12 col-md-offset-3">
            <form id="msform">
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

<!--Modal de l'ajout d'un membre de l'équipe-->
<!-- The Modal -->
          <div class="modal fade" id="myModal">
            <form id="msform1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                       
                        <h4 class="modal-title text-center">Ajouter un membres de l'équipe</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="card" style="">
                            <div class="row" style="padding: 25px">
                                <div class="col-md-6 col-sm-12">
                                    <img class="card-img-top rounded-circle" src="/assets/imgs/vatar.png" alt="Card image"  style="width:35%">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <input type="file" name="" placeholder="" />
                                </div>
                            </div>
                            
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" id="" placeholder="Nom" name="">
                                </div>
                                <div class="form-group">
                                    <input type="url" id="" placeholder="Réseax social" name="pswd">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="" placeholder="Titre ou poste dans la société" name="pswd">
                                </div>
                                
                                <textarea name="lname" placeholder="Bio"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    
                  </div>
                </div>
            </form>
          </div>

<!--/ Modal de l'ajout d'un membre de l'équipe-->
<!-- /The Modal -->


<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>

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

$(".submit").click(function(){
	return false;
})

</script>

<script src="/plugin/build/js/intlTelInput.js"></script>
          <script>
            var input = document.querySelector("#phone");
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
          
        </script>

@endsection
