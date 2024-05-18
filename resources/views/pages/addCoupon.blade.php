@extends('layouts.app')
@section('content')

    <div class="content-wrapper">
        <div class="row">

            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">ajouter un coupon</h4>
                        <p class="card-description">
                            formulaire d'ajout d'un coupon
                        </p>
                        <form class="forms-sample" action="{{ route("coupon.store") }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="selectId" class="col-sm-3 col-form-label">selectionner le type de coupon</label>
                                <select class="form-control" name="type_id" id="selectId">
                                    <option selected>Selectionner un type _ _ _</option>
                                    <option value="{{ \App\Enums\TypeEnum::FREEMIUM }}">Gratuit</option>
                                    <option value="{{ \App\Enums\TypeEnum::MEDIUM }}">Moyen</option>
                                    <option value="{{ \App\Enums\TypeEnum::PREMIUM }}">Supérieur</option>
                                </select>

                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">titre</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title" class="form-control" id="exampleInputUsername2"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="image[]" class="form-control" id="exampleInputEmail2" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 card-form-label" for="description">description</label>
                                <textarea class="form-control-lg" name="description" rows="3" id="description"></textarea>
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
