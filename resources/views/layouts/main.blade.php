<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Découvre les meileurs endroits de la rdc">
    <meta name="author" content="jocelin kisenga">

    <title>congo</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">

    <link href="{{ asset('assets/css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset("assets/css/bootstrap.min.css") }}" rel="stylesheet">

    <link href="{{ asset("assets/css/style.css") }}" rel="stylesheet">
    @livewireStyles
</head>

<body id="top">

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <i class="bi-back"></i>
                    <span class="text-primary">R</span>
                    <span class="text-danger">D</span>
                    <span class="text-warning">C</span>
                </a>

                <div class="d-lg-none ms-auto me-4">
                    {{-- <a href="#top" class="navbar-icon bi-person smoothscroll"></a> --}}
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Acceuil</a>
                        </li>

                        {{-- <li class="nav-item">
                            <a class="nav-link " href="/">Catégories</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="">FAQs</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="#section_5">Contact</a>
                        </li> --}}
                    </ul>

                    <div class="d-none d-lg-block">
                        {{-- <a href="#top" class="navbar-icon bi-person smoothscroll"></a> --}}
                    </div>
                </div>
            </div>
        </nav>


        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

            <div class="container">
            <div class="row justify-center">
                    <div class="container-fluid">
                        <div class="row">
                            <ul class="nav nav-tabs" style="background-color:none;" id="myTab" role="tablist">

                                @foreach(\App\Models\Category::all() as $key => $category)
                                <li class="nav-item " role="presentation">
                                    <a href="{{ route("front.categorie",["id" => $category->id]) }}" class="nav-link text-white" id="{{ $category->title }}">{{ $category->title }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    </div>

                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="text-primary text-center">Decouvre. <span class="text-danger">Voyage</span>. <span class="text-warning">Apprécie</span></h2>

                        {{-- livewire search --}}
                        @livewire("search")
                    </div>

                </div>
            </div>
        </section>

        @yield("content")


    </main>

    <footer class="site-footer section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-12 mb-4 pb-2">
                    <a class="navbar-brand mb-2" href="index.html">
                        <i class="bi-back"></i>
                        <span class="text-primary">R</span>
                        <span class="text-danger">D</span>
                        <span class="text-warning">C</span>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <h6 class="site-footer-title mb-3">Resources</h6>

                    <ul class="site-footer-links">




                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">FAQs</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                    <h6 class="site-footer-title mb-3">Information</h6>

                    <p class="text-white d-flex mb-1">
                        <a href="tel: " class="site-footer-link">
                            +243 8500244690
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <a href="mailto:lushidev01@gmail.com" class="site-footer-link">
                            lushidev01@gmail.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
                    {{-- <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            English</button>

                            <ul class="dropdown-menu">
                                <li><button class="dropdown-item" type="button">Thai</button></li>

                                <li><button class="dropdown-item" type="button">Myanmar</button></li>

                                <li><button class="dropdown-item" type="button">Arabic</button></li>
                            </ul>
                        </div> --}}

                    <p class="copyright-text mt-lg-5 mt-4">Copyright © Congo. All rights reserved.
                        <br><br>

                </div>

            </div>
        </div>
    </footer>

    @livewireScripts
    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset("assets/js/jquery.min.js") }}"></script>
    <script src="{{ asset("assets/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("assets/js/jquery.sticky.js") }}"></script>
    <script src="{{ asset("assets/js/click-scroll.js") }}"></script>
    <script src="{{ asset("assets/js/custom.js") }}"></script>

</body>
</html>
