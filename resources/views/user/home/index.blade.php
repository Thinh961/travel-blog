@extends('layouts.user')

@section('content')
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary">laibaoxinchuan</span></h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam
                        et
                        eos. Clita erat ipsum et lorem et sit.</p>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam
                        et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Hotels</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Star Accommodations
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Model Vehicles
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>150 Premium City
                                Tours
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
                <h1 class="mb-5">Awesome Packages</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/package-1.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>Thailand</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                                Person</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/package-2.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>Indonesia</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                                Person</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">$139.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/package-3.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>Malaysia</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                                Person</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">$189.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Package End -->

    <!-- Slider Start-->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/package-1.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>Thailand</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                                Person</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam
                                eos</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/package-2.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>Indonesia</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                                Person</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">$139.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam
                                eos</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/package-3.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>Malaysia</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                                Person</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">$189.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam
                                eos</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/package-1.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>Thailand</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                                Person</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam
                                eos</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/package-2.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>Indonesia</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                                Person</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">$139.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam
                                eos</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider End -->

    <!-- Destination Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Destination</h6>
                <h1 class="mb-5">Popular Destination</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ Asset('user/img/destination-1.jpg') }}" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                                    30% OFF</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                    Thailand</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ Asset('user/img/destination-2.jpg') }}" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                                    25% OFF</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                    Malaysia</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ Asset('user/img/destination-3.jpg') }}" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                                    35% OFF</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                    Australia</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100"
                            src="{{ Asset('user/img/destination-4.jpg') }}" alt="" style="object-fit: cover;">
                        <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">20% OFF
                        </div>
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                            Indonesia</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
