@extends('layouts.admin')
@section('title', 'Modification d\'une offre')
@section('page_title', 'Modification d\'une offre')
@section('link_title', 'Modification d\'une offre')

@section('content')



<div class="pcoded-inner-content">

    <div class="main-body">
        <div class="page-wrapper">

            <div class="page-body">

                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <h5>Modification d'une offre</h5>
                                <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                            </div>
                            <div class="card-block">
                                <h4 class="sub-title">Modification d'une offre</h4>
                                <form method="post" enctype="multipart/form-data" action="{{url('pricings', $pricing)}}">
                                    @csrf
                                    {{method_field('patch')}}
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nom</label>
                                        <div class="col-sm-10">
                                            <input value="{{$pricing->name}}" name="name" type="text" class="form-control" placeholder="Nom de l'offre">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Prix</label>
                                        <div class="col-sm-10">
                                            <input value="{{$pricing->price}}" name="price" type="text" class="form-control" placeholder="Prix">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary btn-round waves-effect waves-light">
                                                Modifier l'offre
                                            </button>
                                        </div>
                                    </div>

                                </form>

                            </div>
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
