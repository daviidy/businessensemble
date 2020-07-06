@extends('layouts.admin')
@section('title', 'Liste des offres')
@section('page_title', 'Liste des offres')
@section('link_title', 'Liste des offres')

@section('content')



<div class="pcoded-inner-content">

    <div class="main-body">
        <div class="page-wrapper">

            <div class="page-body">

                <div class="card">
                    <div class="card-header">
                        <h5>Liste des offres</h5>
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
                                        <th>Nom de l'offre</th>
                                        <th>Prix</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pricings as $pricing)
                                    <tr>
                                        <th scope="row">{{$loop->index + 1}}</th>
                                        <td>{{$pricing->name}}</td>
                                        <td>{{$pricing->price}}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-6">
                                                    <a class="float-right" href="/admin/pricings/{{$pricing->id}}/edit">
                                                        <i class="icon-pencil text-primary"></i>
                                                    </a>
                                                </div>
                                                <div class="col-6">
                                                    <form action="{{ route('pricings.destroy', $pricing) }}" method="post">
                                                        {{ csrf_field() }}
                                                        {{ method_field('delete') }}
                                                        <button
                                                          id="test-id-unpublish-btn"
                                                          class="btn rounded"><i class="icon-trash text-danger"></i></button>
                                                    </form>
                                                </div>

                                            </div>



                                        </td>
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
