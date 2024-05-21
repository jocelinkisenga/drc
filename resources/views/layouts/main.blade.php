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
    <link href="{{ asset("assets/fontawesome/css/fontawesome.min.css") }}" rel="stylesheet">
        <link href="{{ asset("assets/fontawesome/css/all.css") }}" rel="stylesheet">

    @livewireStyles
</head>

<body id="top">

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <i class="bi-back "></i>
                    <span class="text-white">R</span>
                    <span class="text-danger">D</span>
                    <span class="text-warning">C</span>
                </a>

                <div class="d-lg-none ms-auto me-4">
                    {{-- <a href="#top" class="navbar-icon bi-person smoothscroll"></a> --}}
                </div>

                <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
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
                    {{-- <div class="container-fluid">
                        <div class="row">
                            <ul class="nav nav-tabs" style="background-color:none;" id="myTab" role="tablist">

                                @foreach(\App\Models\Category::all() as $key => $category)
                                <li class="nav-item " role="presentation">
                                    <a href="{{ route("front.categorie",["id" => $category->id]) }}" class="nav-link text-white fw-bold fs-5" id="{{ $category->title }}">{{ $category->title }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div> --}}
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

            {{-- <section class="contact-section section-padding section-bg" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="mb-5">Contact</h2>
                        </div>

                        <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                            <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.065641062665!2d-122.4230416990949!3d37.80335401520422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858127459fabad%3A0x808ba520e5e9edb7!2sFrancisco%20Park!5e1!3m2!1sen!2sth!4v1684340239744!5m2!1sen!2sth" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto">
                            <h4 class="mb-3">Lorem</h4>

                            <p>Bay St &amp;, Larkin St, San Francisco, CA 94109, United States</p>

                            <hr>

                            <p class="d-flex align-items-center mb-1">
                                <span class="me-2">Phone</span>

                                <a href="tel: 305-240-9671" class="site-footer-link">
                                    305-240-9671
                                </a>
                            </p>

                            <p class="d-flex align-items-center">
                                <span class="me-2">Email</span>

                                <a href="mailto:info@company.com" class="site-footer-link">
                                    info@company.com
                                </a>
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mx-auto">
                            <h4 class="mb-3">Dubai office</h4>

                            <p>Burj Park, Downtown Dubai, United Arab Emirates</p>

                            <hr>

                            <p class="d-flex align-items-center mb-1">
                                <span class="me-2">Phone</span>

                                <a href="tel: 110-220-3400" class="site-footer-link">
                                    110-220-3400
                                </a>
                            </p>

                            <p class="d-flex align-items-center">
                                <span class="me-2">Email</span>

                                <a href="mailto:info@company.com" class="site-footer-link">
                                    info@company.com
                                </a>
                            </p>
                        </div>

                    </div>
                </div>
            </section> --}}

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
