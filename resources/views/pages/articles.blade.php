@extends('layouts.main')
@section('content')
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">

                <div class="row">

                        <!-- Trending Top -->

                        <div class="trending-bottom">
                            <div class="row">
                                @foreach ($articles as $item)
                            <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="{{ asset("storage/uploads/".$item->image) }}" alt="">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <span class="color1">{{ $item->category->title }}</span>
                                        <h4><a href="{{ route("posts.show",['id' => $item->id]) }}">{{ $item->title }}</a></h4>
                                    </div>
                                </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    <!-- Riht content -->

                </div>
            </div>
        </div>
    </div>
    <div class="pagination-area pb-45 text-center mb-1 mt-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-wrap d-flex justify-content-center">
             {{ $articles->links('vendor.pagination.bootstrap-4') }}
 </div>
                </div>
            </div>
        </div>
    </div>

@endsection
