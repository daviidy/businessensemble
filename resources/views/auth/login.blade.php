@extends('layouts.auth')
@section('title', 'Connexion')
@section('content')




    <!-- ==============================================
	 Header Section
	 =============================================== -->
    <section style="height: 100vh;" class="login">
        <div class="container">
            <div class="banner-content">

                <a href="/">
                    <img src="/assets/imgs/logo-be.jpg" width="100">
                </a>
                <form method="POST" action="{{ route('login') }}" class="form-signin">
                    <h3 class="form-signin-heading">Connectez-vous</h3>
                    @csrf
                    <div class="form-group">
                        <input name="email" type="text" class="form-control" placeholder="Email">
                    </div>
                    @error('email')
                    <div class="alert alert-danger">
                        <strong>{{$message}}</strong>
                    </div>
                    @enderror
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                    </div>
                    @error('password')
                    <div class="alert alert-danger">
                        <strong>{{$message}}</strong>
                    </div>
                    @enderror
                    <button class="kafe-btn kafe-btn-mint btn-block" type="submit" name="subm">Se connecter</button>
                    <br/>
                    <a class="btn btn-dark " href="/register" role="button">Pas de compte ?</a>
                    <a class="btn btn-dark " href="#" role="button">Mot de passe oublié</a>
                </form>

            </div>
            <!--/. banner-content -->
        </div>
        <!-- /.container -->
    </section>




@endsection
