@extends("layouts.main")
@section('content')

   <!--================Blog Area =================-->
           <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-5 col-12 mb-5">


                            <h2 class="text-white">{{ $post->title }}</h2>

                            <div class="d-flex align-items-center mt-5">
                                <a href="#topics-detail" class="btn custom-btn custom-border-btn smoothscroll me-4"></a>

                                <a href="#top" class="custom-icon bi-bookmark smoothscroll"></a>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="topics-detail-block bg-white shadow-lg">
                                <img src="{{ asset("storage/uploads/".$post->image) }}" class="topics-detail-block-image img-fluid">
                            </div>
                        </div>

                    </div>
                </div>
            </header>


            <section class="topics-detail-section section-padding" id="topics-detail">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 m-auto">
                            <h3 class="mb-4">{{ $post->title }}</h3>

                            <blockquote>
                                {{ $post->slug }}
                            </blockquote>



                            <p>{!! $post->description !!}</p>
                        </div>

                    </div>
                </div>
            </section>

@endsection
