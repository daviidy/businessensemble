@extends('layouts.admin')
@section('title', 'Liste des  annonces')
@section('page_title', 'Liste des annonces')
@section('link_title', 'Liste des annonces')

@section('content')



<div class="pcoded-inner-content">

    <div class="main-body">
        <div class="page-wrapper">

            <div class="page-body">

                <div class="card">
                    <div class="card-header">
                        <h5>Liste des annonces</h5>
                        <span>use class <code>table</code> inside table element</span>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                <li><i class="feather icon-maximize full-card"></i></li>
                                <li><i class="feather icon-minus minimize-card"></i></li>
                                <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                <li><i class="feather icon-trash close-card"></i></li>
                                <li><i class="feather icon-chevron-left open-card-option"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Pays</th>
                                        <th>Téléphone</th>
                                        <th>Montant à investir</th>
                                        <th>Montant par investisseur</th>
                                        <th>Utilisateur</th>
                                        <th>Action</th>
                                        <th></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($annonces as $annonce)
                                    <tr>
                                        <th scope="row">{{$loop->index + 1}}</th>
                                        <td>
                                            <a target="__blank" href="{{url('annonces', $annonce)}}">
                                                {{$annonce->title}}
                                            </a>
                                        </td>
                                        <td>{{$annonce->country}}</td>
                                        <td>{{$annonce->phone}}</td>
                                        <td>{{$annonce->raising_amount}}</td>
                                        <td>{{$annonce->min_investor_amount}}</td>
                                        <td>{{$annonce->user->name}}</td>


                                       <td>
                                            <div class="row">
                                                <div class="col-6">
                                                    @if($annonce->recommend == 0)
                                                    <a class="float-right" href="/admin/annonces/{{$annonce->id}}/recommend">
                                                        <i class="far fa-star"></i>
                                                    </a>
                                                    @else
                                                    <a class="float-right" href="/admin/annonces/{{$annonce->id}}/unrecommend">
                                                        <i class="far fa-star"></i>
                                                    </a>
                                                    @endif
                                                </div>
                                                <div class="col-6">
                                                    <form action="{{ route('annonces.destroy', $annonce) }}" method="post">
                                                        {{ csrf_field() }}
                                                        {{ method_field('delete') }}
                                                        <button
                                                          id="test-id-unpublish-btn"
                                                          class="btn rounded" style="padding: 2px!important;"><i class="icon-trash text-danger"></i></button>
                                                    </form>
                                                </div>

                                            </div>
                                        </td>
                                        @if($annonce->status == 1)
                                        <td><a href="/unpublishProject/{{$annonce->id}}">Annuler la publication de l'annonce</a></td>
                                        @else
                                        <td><a href="/publishProject/{{$annonce->id}}">Publier l'annonce</a></td>
                                        @endif
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>

    <div id="styleSelector">
    </div>
</div>



@endsection
