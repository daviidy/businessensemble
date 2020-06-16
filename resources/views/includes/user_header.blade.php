<style media="screen">
.profile-bg-picture {
background: linear-gradient(rgba(34, 34, 34, 0.7), rgba(34, 34, 34, 0.7)), url(/storage/images/users/covers/{{Auth::user()->cover_image}}) no-repeat center center fixed;
background-position: center center;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
background-attachment: scroll;
color: #fff;
height: 55vh;
display: flex;
align-items: center;
justify-content: center;
}
</style>

<header class="profile-bg-picture"></header>


<section class="user-section">
    <div class="container">
        <div class="profile-user-box">
            <div class="row">
                <div class="col-sm-6">
                    <span class="pull-left m-r-15"><img src="/storage/images/users/{{Auth::user()->image}}" alt="{{ucfirst(Auth::user()->name)}}" class="thumb-lg img-circle"></span>
                    <div class="media-body">
                        <h4 class="m-t-5 m-b-5 ellipsis">{{Auth::user()->name}}</h4>
                        <p class="font-13"> {{Auth::user()->job ? Auth::user()->job : 'Aucun métier renseigné'}}</p>
                        <p class="text-muted m-b-0"><small>{{Auth::user()->job ? Auth::user()->living_city : 'Aucun lieu de résidence renseigné'}}</small></p>
                    </div><!-- /media-body -->
                </div><!-- /col-sm-6 -->
                <div class="col-sm-6">
                    <div class="text-right float-right">
                        @if(\Route::current()->getName() == 'users.edit')
                        <a href="/home">
                            <button type="button" class="btn btn-success waves-effect waves-light">
                                <i class="fa fa-user m-r-5"></i>

                                Aperçu du profil

                            </button>
                        </a>
                        @else
                        <a href="{{route('users.edit', Auth::user())}}">
                            <button type="button" class="btn btn-success waves-effect waves-light">
                                <i class="fa fa-user m-r-5"></i>

                                Modifier le profil

                            </button>
                        </a>
                        @endif


                    </div><!-- /text-right -->
                </div><!-- /col-sm-6 -->
            </div><!-- /row -->
        </div>
        <!--/ profile-user-box -->
    </div><!-- /container -->
</section>
