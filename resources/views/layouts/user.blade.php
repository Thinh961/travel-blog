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
    <link href="{{ Asset('user/css/header.css') }}" rel="stylesheet">
    <link href="{{ Asset('user/css/style.css') }}" rel="stylesheet">
    
    <!-- Tải thư viện jQuery -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    
  
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

    {{-- Menu mới --}}
    <section class="ftco-section">		
		<div class="container-fluid px-md-5 bg-dark">
			<div class="row justify-content-between">
				<div class="col-md-8 order-md-last">
					<div class="row">
						<div class="col-md-6 text-center">
							<a class="navbar-brand" href="{{ Route('home') }}">{{ __('msg.logo') }} 
                            </a>
                            <div class="d-flex justify-content-center" style="height: 50px; align-items: center">
                                <div class="dropdown d-inline" style="margin-right: 15px;">
                                    {{-- Dropdown language --}}
                                    <a class="dropdown-toggle" data-toggle="collapse" data-target="#dropdownLanguge" aria-expanded="false" aria-label="Toggle language" style="color: #fff; cursor: pointer;">
                                        {{ __('msg.language') }}
                                    </a>
                                    <ul class="dropdown-menu" id="dropdownLanguge">
                                        <li>
                                            <a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['language' => 'zh']) }}"><i
                                                    class="flag-poland flag"></i>{{ __('msg.languageChina') }}
                                                @if (app()->getLocale() == 'zh')
                                                    <i class="fa fa-check text-success ms-2"></i>
                                                @endif
                                            </a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['language' => 'vie']) }}">
                                                <i class="flag-united-kingdom flag"></i>
                                                Vietnamese
                                                @if (app()->getLocale() == 'vie')
                                                    <i class="fa fa-check text-success ms-2"></i>
                                                @endif
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-inline-flex align-items-center" style="height: 45px;">
                                    @foreach ($medias as $item)
                                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle mr-2" target="blank"
                                            href="{{ $item->link }}">{!! $item->icon !!} </a>
                                    @endforeach
                                </div>
                            </div>
						</div>

						<div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3" style="align-items: center">
							<form action="{{ Route('post.search') }}" method="GET" class="searchform order-lg-last">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control pl-3" placeholder="Eg: laibaoxinchuan" name="keyword">
                                <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
                            </div>
                            </form>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex">
					<div class="social-media">
                        <p class="mb-0 d-flex" style="flex-direction: column">
                            <a href="#" class="d-flex align-items-center justify-content-center">
                                <span class="fa fa-facebook"><i class="fa fa-map-marker mr-2 mt-2"></i>{{ $aboutUs ? $aboutUs->address : '' }}</span>
                            </a>
                            <a href="#" class="d-flex align-items-center justify-content-center">
                                <span class="fa fa-twitter"><i class="fa fa-phone mr-2 mt-2"></i>{{ $aboutUs ? $aboutUs->phone : '' }}</span>
                            </a>
                            <a href="#" class="d-flex align-items-center justify-content-center">
                                <span class="fa fa-instagram"><i class="fa fa-envelope-open mr-2 mt-2"></i>{{ $aboutUs ? $aboutUs->email : '' }}</span>
                            </a>
                        </p>
                    </div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container-fluid">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars" style="color: #86b817; font-size: 20px">Menu</span> 
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul id="nav" class="navbar-nav m-auto">
                    @foreach ($categories as $item)
                        <li class="nav-item">
                            {{-- <a class="nav-link {{ count($item->descendants) > 0 ? 'dropdown-toggle' : '' }}" id="dropLi"
                                href="{{ Route('post.index', [$item->slug, $item->id]) }}">{{ $item->translate(app()->getLocale())->name }}</a> --}}
                            <span class="nav-link {{ count($item->descendants) > 0 ? 'dropdown-toggle' : '' }}" id="dropLi">
                                <a 
                                    href="{{ Route('post.index', [$item->slug, $item->id]) }}">{{ $item->translate(app()->getLocale())->name }}
                                </a>
                            </span>
                                
                            @if (count($item->descendants) > 0)
                                @include('components.menu', ['categories' => $item->descendants])
                            @endif
                        </li>
                    @endforeach
                    <li class="nav-item">
                        <span class="nav-link"><a  href="{{ Route('about.index') }}">{{ __('msg.aboutUs') }}</a></span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link"><a href="{{ Route('video.index') }}">{{ __('msg.video') }}</a></span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link"><a href="{{ Route('contact.index') }}">{{ __('msg.contact') }}</a></span>
                    </li>
                </ul>
            </div>
            </div>
	    </nav>
        <div class="container-fluid bg-primary py-5 mb-5 hero-header"
            style="url({{ !empty($banner) ? Asset($banner->image) : Asset('user/img/bg-hero.jpg') }});  
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
	</section>

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
    <script src="{{ Asset('user/js/bootstrap.min.js') }}"></script>
    {{-- <script src="{{ Asset('user/lib/wow/wow.min.js') }}"></script>
    <script src="{{ Asset('user/lib/easing/easing.min.js') }}"></script>
    <script src="{{ Asset('user/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ Asset('user/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ Asset('user/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ Asset('user/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ Asset('user/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.j') }}s"></script> --}}

    <!-- Template Javascript -->
    <script src="{{ Asset('user/js/main.js') }}"></script>
</body>

</html>
