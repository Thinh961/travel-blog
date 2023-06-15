<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>laibaoxinchuan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ Asset('user/img/logo.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Liu+Jian+Mao+Cao&family=Long+Cang&family=Ma+Shan+Zheng&family=Noto+Sans+SC&family=Noto+Serif&family=Noto+Serif+SC&family=Roboto&family=ZCOOL+KuaiLe&family=ZCOOL+QingKe+HuangYou&family=ZCOOL+XiaoWei&family=Zhi+Mang+Xing&Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
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
    <div class="container-fluid bg-dark px-5 d-lg-block">
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
                <div class="dropdown d-inline" style="margin-right: 15px;">
                    <a class="dropdown-toggle" href="#" style="pointer-events: none;" id="Dropdown"
                        role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        {{ __('msg.language') }}
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="Dropdown">
                        <li>
                            <a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['language' => 'vie']) }}">
                                <i class="flag-united-kingdom flag"></i>
                                Vietnamese
                                @if (app()->getLocale() == 'vie')
                                    <i class="fa fa-check text-success ms-2"></i>
                                @endif
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['language' => 'zh']) }}"><i
                                    class="flag-poland flag"></i>{{ __('msg.languageChina') }}
                                @if (app()->getLocale() == 'zh')
                                    <i class="fa fa-check text-success ms-2"></i>
                                @endif
                            </a>
                        </li>
                    </ul>
                </div>
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

    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3">
            <a href="{{ Route('home') }}" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>{{ __('msg.logo') }}</h1>
            </a>

            <ul id="nav">
                @foreach ($categories as $item)
                    <li>
                        <a class="nav-item nav-link  {{ count($item->descendants) > 0 ? 'dropdown-toggle' : '' }}"
                            href="{{ Route('post.index', [$item->slug, $item->id]) }}">{{ $item->translate(app()->getLocale())->name }}</a>
                        @if (count($item->descendants) > 0)
                            @include('components.menu', ['categories' => $item->descendants])
                        @endif
                    </li>
                @endforeach
                <li><a class="nav-item nav-link" href="{{ Route('about.index') }}">{{ __('msg.aboutUs') }}</a></li>
                <li><a class="nav-item nav-link" href="{{ Route('video.index') }}">{{ __('msg.video') }}</a></li>
                <li><a class="nav-item nav-link" href="{{ Route('contact.index') }}">{{ __('msg.contact') }}</a></li>
            </ul>

            <div class="position-relative ms-auto animated slideInDown search-input">
                <form action="{{ Route('post.search') }}" method="GET">
                    <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                        placeholder="Eg: laibaoxinchuan" name="keyword">
                    <button type="submit"
                        class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2"
                        style="margin-top: 7px;">
                        {{-- {{ __('msg.search') }} --}}
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
        </nav>


        <div class="container-fluid bg-primary py-5 mb-5 hero-header"
            style="background: linear-gradient(rgba(20, 20, 31, 0.7), rgba(20, 20, 31, 0.7)),
            url({{ !empty($banner) ? Asset($banner->image) : Asset('user/img/bg-hero.jpg') }});  
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;">
            <a href="{{ !empty($banner->link) ? Asset($banner->link) : '' }}">
                <div class="container py-5">
                    <div class="row justify-content-center py-5">
                        <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                            <h1 class="display-3 text-white mb-3 animated slideInDown">{{ __('msg.welcome') }}
                                {{ __('msg.logo') }}</h1>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn footer" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link" href="{{ Route('contact.index') }}">{{ __('msg.contactUs') }}</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ $aboutUs ? $aboutUs->address : '' }}</p>
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

    <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
        <div class=" container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-12 text-center mb-3 mb-md-0">
                        &copy; Bản quyền thuộc về Laibaoxinchuan
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
