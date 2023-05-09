 <!-- About Start -->
 <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100"
                        src="{{ $aboutUs && !empty($aboutUs->image) ? Asset($aboutUs->image) : Asset('user/img/about.jpg') }}"  style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">Về chúng tôi</h6>
                <h1 class="mb-4">Chào mừng đến với <span
                        class="text-primary">{{ $aboutUs ? $aboutUs->translate(app()->getLocale())->name : '' }}</span></h1>
                <p class="mb-4">{!! $aboutUs ? $aboutUs->translate(app()->getLocale())->description : '' !!}</p>

                <a class="btn btn-primary py-3 px-5 mt-2" href="">Đọc thêm</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->