@extends('layouts.admin')
@section('title', 'Modification d\'une catégorie')
@section('page_title', 'Modification d\'une catégorie')
@section('link_title', 'Modification d\'une catégorie')

@section('content')



<div class="pcoded-inner-content">

    <div class="main-body">
        <div class="page-wrapper">

            <div class="page-body">

                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <h5>Modification d'une catégorie</h5>
                                <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                            </div>
                            <div class="card-block">
                                <h4 class="sub-title">Modification d'une catégorie</h4>
                                <form method="post" enctype="multipart/form-data" action="{{url('categories', $category)}}">
                                    @csrf
                                    {{method_field('patch')}}
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nom de la catégorie</label>
                                        <div class="col-sm-10">
                                            <input name="name" value="{{$category->name}}" type="text" class="form-control" placeholder="Nom de la catégorie">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10">
                                            <input type="file"  name="image"   class="form-control input" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Couleur de la catégorie</label>
                                        <div class="col-sm-10">
                                            <input name="icon_color" data-jscolor="" value="{{$category->icon_color}}" style="border-radius: 5px;border: 2px solid #00000000; padding:10px;">
                                        </div>
                                    </div>





                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary btn-round waves-effect waves-light">
                                                Modifier la catégorie
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
<!--=====
<script src="/js/jscolor.js"></script>


<script type="text/javascript">
        $(document).ready(function(){

          $('.input').iconpicker(".input");


          });
      </script>
============-->
@endsection
