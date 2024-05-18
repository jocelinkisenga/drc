@extends("layouts.app")
@section("content")
<div class="content-wrapper">
<div class="row">

    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">ajouter un article</h4>
          <p class="card-description">
            formulaire d'ajout d'article
          </p>
          <form class="forms-sample" method="POST" action="{{ route("posts.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="my-select">categorie</label>
                <select id="my-select" class="form-control" name="category_id">
                  <option selected>selectionner une categorie</option>
                    @foreach ($categories as $item)
                      <option value="{{ $item->id }}">{{ $item->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row">

              <label for="exampleInputUsername2" class="col-sm-3 col-form-label">titre</label>
              <div class="col-sm-9">
                <input type="text"  name="title" class="form-control" id="exampleInputUsername2" placeholder="">
              </div>
            </div>
            <div class="form-group row">
              <label for="exampleInputEmail2" class="col-sm-3 col-form-label">image</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" id="exampleInputEmail2" name="image">
              </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">petite description</label>
                <div class="col-sm-9">
                  <textarea name="slug" id="" cols="30" rows="5" class="form-control-sm"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 card-form-label" for="description">description</label>
                <textarea class="form-control-lg"  name="description" rows="3" id="description" ></textarea>
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
