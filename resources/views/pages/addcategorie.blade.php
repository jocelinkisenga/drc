@extends('layouts.app')
@section('content')

    <div class="content-wrapper">
        <div class="row">

            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">ajouter une categorie</h4>
                        <p class="card-description">
                            formulaire d'ajout d'un coupon
                        </p>
                        <form class="forms-sample" action="{{ route("categorie.store") }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">titre</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title" class="form-control" id="exampleInputUsername2"
                                        placeholder="">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary me-2">enregistrer</button>
                            <button class="btn btn-light">Annuler</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
