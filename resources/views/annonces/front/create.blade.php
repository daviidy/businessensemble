@extends('layouts.menu')
@section('title', 'Créer une annonce')

@section('content')

<style media="screen">
/*custom font*/
@import url(https://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {
margin: 0;
padding: 0;
}

html {
height: 100%;
background: #6441A5; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #6441A5, #2a0845); /* Chrome 10-25, Safari 5.1-6 */
}

body {
font-family: montserrat, arial, verdana;
background: transparent;
}

/*form styles*/
#msform {
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
margin: 0 10%;

/*stacking fieldsets above each other*/
position: relative;
}

/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
display: none;
}

/*inputs*/
#msform input, #msform textarea {
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

#msform textarea {
resize: vertical;
min-height: 50px
}
#msform select {
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

#msform input:focus, #msform textarea:focus {
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
#msform .action-button {
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
</style>

<!-- MultiStep Form -->
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">General Information</li>
                <li>TRIP Information</li>
                <li>Physical and Financial Status</li>
                <li>Submit</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">General Information</h2>
                <h3 class="fs-subtitle">Tell us something more about the project</h3>
                <label for="fname">Project Title</label>
                <input type="text" name="fname" placeholder="Project Title" />
                <label for="fname">Description</label>
                <textarea name="lname" placeholder="Description"></textarea>
                <label for="fname">Basis for Implementation</label>
                <input type="text" name="fname" placeholder="Basis for implementation" />
                <label for="fname">Program or Project</label>
                <select class="form-input">
                    <option>Program</option>
                    <option>Project</option>
                </select>

                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">2017</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body"><input type="text" placeholder="NG-Local"></input></div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">2018</a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body"><input type="text"></input></div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">2019</a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body"><input type="text"></input></div>
                        </div>
                    </div>
                </div>
                <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>

            <fieldset>
                <h2 class="fs-title">TRIP Information</h2>
                <h3 class="fs-subtitle">Your presence on the social network</h3>
                <input type="text" name="twitter" placeholder="Twitter" />
                <input type="text" name="facebook" placeholder="Facebook" />
                <input type="text" name="gplus" placeholder="Google Plus" />
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>

            <fieldset>
                <h2 class="fs-title">Physical and Financial Status</h2>
                <h3 class="fs-subtitle">Your presence on the social network</h3>
                <input type="text" name="twitter" placeholder="Twitter" />
                <input type="text" name="facebook" placeholder="Facebook" />
                <input type="text" name="gplus" placeholder="Google Plus" />
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>

            <fieldset>
                <h2 class="fs-title">Submit project</h2>
                <h3 class="fs-subtitle">Fill in your credentials to authorize submission</h3>
                <input type="text" name="email" placeholder="Username" />
                <input type="password" name="pass" placeholder="Password" />
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                <input type="submit" name="submit" class="submit action-button" value="Submit" />
            </fieldset>
        </form>
        <!-- link to designify.me code snippets -->
        <!-- /.link to designify.me code snippets -->
    </div>
</div>
<!-- /.MultiStep Form -->



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

@endsection
