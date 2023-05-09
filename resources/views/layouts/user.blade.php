<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>laibaoxinchuan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ Asset('user/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ Asset('user/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ Asset('user/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ Asset('user/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ Asset('user/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ Asset('user/css/style.css') }}" rel="stylesheet">
    <!-- Tải thư viện jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i
                            class="fa fa-map-marker-alt me-2"></i>{{ $aboutUs ? $aboutUs->address : '' }}</small>
                    <small class="me-3 text-light"><i
                            class="fa fa-phone-alt me-2"></i>{{ $aboutUs ? $aboutUs->phone : '' }}</small>
                    <small class="text-light"><i
                            class="fa fa-envelope-open me-2"></i>{{ $aboutUs ? $aboutUs->email : '' }}</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    @foreach ($medias as $item)
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="blank"
                            href="{{ $item->link }}">{!! $item->icon !!} </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-4 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>laibaoxinchuan</h1>
            </a>
            <div class="navbar-nav py-0 ms-auto">
                <ul id="nav">
                    <li><a class="nav-item nav-link dropdown-toggle" href="#">Sub Menu1</a>
                        <ul>
                            <li><a href="#">Test Sub Item</a></li>
                            <li><a href="#">Test Sub Item</a></li>
                            <li><a class="dropdown-toggle" href="#">Sub Menu2</a>
                                <ul>
                                    <li><a href="#">Sub Menu2.1</a>
                                    <li><a href="#">Sub Menu2.2</a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="nav-item nav-link dropdown-toggle" href="#">Sub Menu1</a>
                        <ul>
                            <li><a href="#">Test Sub Item</a></li>
                            <li><a href="#">Test Sub Item</a></li>
                            <li><a class="dropdown-toggle" href="#">Sub Menu2</a>
                                <ul>
                                    <li><a href="#">Sub Menu2.1</a>
                                    <li><a href="#">Sub Menu2.2</a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="nav-item nav-link active" href="index.html">Home</a></li>
                    <li><a class="nav-item nav-link" href="about.html">About</a></li>
                    <li><a class="nav-item nav-link" href="service.html">Services</a></li>
                    <li><a class="nav-item nav-link" href="{{ Route('contact.index') }}">Liên hệ</a></li>
                </ul>
            </div>
            <div class="d-flex">
                <input class="form-control border-0 rounded-pill position-relative home-search" type="text"
                    placeholder="Tìm kiếm">
                <button type="button"
                    class="btn btn-primary rounded-pill position-absolute home-search-button">Search</button>
            </div>
        </nav>


        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Enjoy Your Vacation With Us</h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">Tempor erat elitr rebum at clita diam amet
                            diam et eos erat ipsum lorem sit</p>
                        <div class="position-relative w-75 mx-auto animated slideInDown">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link" href="">Về chúng tôi</a>
                    <a class="btn btn-link" href="">Liên hệ với chúng tôi</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i
                            class="fa fa-map-marker-alt me-3"></i>{{ $aboutUs ? $aboutUs->address : '' }}</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ $aboutUs ? $aboutUs->phone : '' }}</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ $aboutUs ? $aboutUs->email : '' }}</p>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ Asset('user/img/package-1.jpg') }}">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ Asset('user/img/package-2.jpg') }}">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ Asset('user/img/package-3.jpg') }}">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ Asset('user/img/package-2.jpg') }}">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ Asset('user/img/package-3.jpg') }}">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ Asset('user/img/package-1.jpg') }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Media</h4>
                    <div class="d-flex pt-2">
                        @foreach ($medias as $item)
                            <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="blank"
                                href="{{ $item->link }}">{!! $item->icon !!} </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s"">
        <div class=" container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; Bản quyền thuộc về Laibaoxinchuan
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="{{ Route('home') }}">Home</a>
                            <a href="#">Cookies</a>
                            <a href="#">Help</a>
                            <a href="#">FAQ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ Asset('user/lib/wow/wow.min.js') }}"></script>
    <script src="{{ Asset('user/lib/easing/easing.min.js') }}"></script>
    <script src="{{ Asset('user/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ Asset('user/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ Asset('user/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ Asset('user/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ Asset('user/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.j') }}s"></script>

    <!-- Template Javascript -->
    <script src="{{ Asset('user/js/main.js') }}"></script>
</body>

</html>
