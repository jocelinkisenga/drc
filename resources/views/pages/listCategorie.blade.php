@extends('layouts.app')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">liste des categories</h4>
                            <p class="card-description">
                                Coupons <code> </code>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>
                                                N°
                                            </th>
                                            <th>
                                                Titre
                                            </th>
                                            <th>
                                               Date ajout
                                            </th>
                                            <th>
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $key => $item)
                                        <tr>
                                            <td class="py-1">
                                                {{ $key + 1 }}
                                            </td>
                                            <td>
                                                {{ $item->title }}
                                            </td>
                                            <td>
                                              {{ $item->created_at }}
                                            </td>
                                            <td>
                                                <a href="{{ route("categorie.delete",["id" => $item->id]) }}" class="text-danger">
                                                <i class="fa fa-delete-left"></i>
                                                </a>
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
    @endsection
