@extends('layouts.auth')
@section('title', 'Inscription')
@section('content')




    <!-- ==============================================
	 Header Section
	 =============================================== -->
    <section class="login">
        <div class="container">
            <div class="banner-content">
                <a href="/">
                    <img src="/assets/imgs/logo-be.jpg" width="100">
                </a>

                <form method="POST" action="{{ route('register') }}" class="form-signin">
                    <h3 class="form-signin-heading">Inscrivez-vous</h3>
                    @csrf
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" placeholder="Nom d'utilisateur">
                    </div>

                    @error('name')
                    <div class="alert alert-danger">
                        <strong>{{$message}}</strong>
                    </div>
                    @enderror
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
                    @error('type')
                    <div class="alert alert-danger">
                        <strong>{{$message}}</strong>
                    </div>
                    @enderror
                    <div class="form-group">
                        <input name="password_confirmation" type="password" class="form-control" placeholder="Confirmez le mot de passe">
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="type">
                            <option value="entrepreneur">Entrepreneur</option>
                            <option value="investor">Investissur</option>
                        </select>
                    </div>

                    <button class="kafe-btn kafe-btn-mint btn-block" type="submit" name="subm">S'inscrire</button>
                    <br/>
                    <a class="btn btn-dark " href="/login" role="button">Déjà un compte ? Connectez-vous</a>
                    <a class="btn btn-dark " href="#" role="button">Mot de passe oublié</a>
                </form>

            </div>
            <!--/. banner-content -->
        </div>
        <!-- /.container -->
    </section>




@endsection
