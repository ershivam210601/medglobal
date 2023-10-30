@extends('components/layout')
@section('content')

<main>

    <!-- hero-area start -->
    <section class="hero-area">
        <div class="hero-slider">
            <div class="slider-active">
                <div class="single-slider slider-2-height d-flex align-items-center" data-background="assets/img/slider/02.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-9">
                                <div class="hero-content">
                                    <div class="slider-caption ">
                                        <span data-animation="fadeInUp" data-delay=".2s">New Formula</span>
                                        <h2 data-animation="fadeInUp" data-delay=".4s">Lab Hand
                                            Sanitizer</h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">Sed ut perspiciatis unde omnis iste natus error oluptatem accusantium doloremque laudantium totam rem</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-5">
                                <div class="slider-02-img" data-animation="fadeInRight" data-delay=".8s">
                                    <img src="assets/img/slider/02.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-2-height d-flex align-items-center" data-background="assets/img/slider/02.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="hero-content">
                                    <div class="slider-caption ">
                                        <span data-animation="fadeInUp" data-delay=".2s">New Formula</span>
                                        <h2 data-animation="fadeInUp" data-delay=".4s">Lab Hand
                                            Sanitizer</h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">Sed ut perspiciatis unde omnis iste natus error oluptatem accusantium doloremque laudantium totam rem</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="slider-02-img" data-animation="fadeInRight" data-delay=".8s">
                                    <img src="assets/img/slider/02.png" alt="">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-2-height d-flex align-items-center" data-background="assets/img/slider/02.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="hero-content">
                                    <div class="slider-caption ">
                                        <span data-animation="fadeInUp" data-delay=".2s">New Formula</span>
                                        <h2 data-animation="fadeInUp" data-delay=".4s">Lab Hand
                                            Sanitizer</h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">Sed ut perspiciatis unde omnis iste natus error oluptatem accusantium doloremque laudantium totam rem</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="slider-02-img" data-animation="fadeInRight" data-delay=".8s">
                                    <img src="assets/img/slider/02.png" alt="">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero-area end -->





    <!-- product-area-start -->
    <div class="product-area pb-70 grey-2-bg pt-100 pb-65">
        <div class="container">
            <div class="row mb-30">
                <div class="col-xl-7 col-lg-7 col-md-7">
                    <div class="section-title mb-30">
                        <h2>Product Categories</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5">
                    <div class="b-button shop-btn s-btn text-md-right mb-30">
                        <a href="{{route('category')}}">view all product <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($category as $item)
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-02-wrapper pos-rel text-center mb-30">
                        <div class="product-02-img pos-rel">
                            <a href="">
                                <img src="{{ asset('uploads/category/'.$item->category_image)}}" alt="">
                            </a>
                        </div>
                        <div class="product-text">
                            <h4><a href="">{{$item->name}}</a></h4>
                        </div>
                    </div>
                </div>
                @empty
                @endforelse

            </div>
        </div>
    </div>
    <!-- product-area-end -->
    <div class="about-area about-pb pt-150 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-img pos-rel mb-30">
                        <img src="assets/img/about/01.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about-wrapper pos-rel mb-30">
                        <div class="section-title mb-40">
                            <h2>About Us</h2>
                            <p>Medglobal Surgical is known to be one of the leading manufacturer, supplier and exporter of Medical & Surgical Equipment, Hospital Supplies, Laboratory Equipment, devices and Instrument.The highly advanced state-of-the-art infrastructural facility at Medglobal Surgical has been equipped with all the machinery and equipment, needed for the facilitation of the attainment of a number of the firm’s predefined targets. The facility’s regular up-gradation helps us extend our reach in the market and to maximize our productivity. Our products are manufactured at state-of-the art production facilities in India, with capacity to produce large quantities. We are ISO 9001:2008 and ISO 13485:2016 Certified and our products are CE Marked. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- testimonial-area-start -->
    <div class="testimonial-area pb-175 grey-2-bg pt-100 pb-65" data-background="assets/img/bg/test.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                    <div class="section-title text-center mb-65">
                        <h2>What Our Client’s Say</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error</p>
                    </div>
                </div>
            </div>
            <div class="row test-active">
                <div class="col-xl-6">
                    <div class="testimonial-wrapper">
                        <div class="inner-test d-flex justify-content-between align-items-center">
                            <div class="test-img">
                                <img src="assets/img/testimonial/01.png" alt="">
                            </div>
                            <div class="test-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <div class="test-text">
                            <p>Sed perspiciatis unde omnis iste natus erolup tatem accusantium doloremque laudantium totam reperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <h4>Sebastian Barry</h4>
                            <span>Business Manager</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="testimonial-wrapper">
                        <div class="inner-test d-flex justify-content-between align-items-center">
                            <div class="test-img">
                                <img src="assets/img/testimonial/02.png" alt="">
                            </div>
                            <div class="test-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <div class="test-text">
                            <p>Sed perspiciatis unde omnis iste natus erolup tatem accusantium doloremque laudantium totam reperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <h4>Oliver Greenwood</h4>
                            <span>Business Manager</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="testimonial-wrapper">
                        <div class="inner-test d-flex justify-content-between align-items-center">
                            <div class="test-img">
                                <img src="assets/img/testimonial/01.png" alt="">
                            </div>
                            <div class="test-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <div class="test-text">
                            <p>Sed perspiciatis unde omnis iste natus erolup tatem accusantium doloremque laudantium totam reperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <h4>Sebastian Barry</h4>
                            <span>Business Manager</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="testimonial-wrapper">
                        <div class="inner-test d-flex justify-content-between align-items-center">
                            <div class="test-img">
                                <img src="assets/img/testimonial/02.png" alt="">
                            </div>
                            <div class="test-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <div class="test-text">
                            <p>Sed perspiciatis unde omnis iste natus erolup tatem accusantium doloremque laudantium totam reperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <h4>Oliver Greenwood</h4>
                            <span>Business Manager</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial-area-end -->

    <!-- blog-area-start -->
    <div class="blog-area pt-105 pb-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                    <div class="section-title text-center mb-65">
                        <h2>Events</h2>
                        <!-- <p>Sed ut perspiciatis unde omnis iste natus error</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="blog-wrapper mb-30">
                        <div class="blog-img pos-rel">
                            <a href="blog-details.html"><img src="assets/img/blog/01.jpg" alt=""></a>
                            <!-- <span class="blog-tag color-1">covid -19</span> -->
                        </div>
                        <div class="blog-text">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar-alt"></i> <a href="blog-details.html">25 Aug 2020</a></span>
                            </div>
                            <h4><a href="blog-details.html">Mirage Deep Dive Under anding Timin Response</a></h4>
                            <p>Sedut perspiciatis unde omnis natus error sit voluptatem accusantium </p>
                            <div class="b-button gray-b-button">
                                <a href="blog-details.html">read more <i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="blog-wrapper mb-30">
                        <div class="blog-img pos-rel">
                            <a href="blog-details.html"><img src="assets/img/blog/02.jpg" alt=""></a>
                            <!-- <span class="blog-tag color-2">sanitizer</span> -->
                        </div>
                        <div class="blog-text">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar-alt"></i> <a href="blog-details.html">25 Aug 2020</a></span>
                            </div>
                            <h4><a href="blog-details.html">How To Feel More Energe Even You’re Stuck</a></h4>
                            <p>Sedut perspiciatis unde omnis natus error sit voluptatem accusantium </p>
                            <div class="b-button gray-b-button">
                                <a href="blog-details.html">read more <i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="blog-wrapper mb-30">
                        <div class="blog-img pos-rel">
                            <a href="blog-details.html"><img src="assets/img/blog/03.jpg" alt=""></a>
                            <!-- <span class="blog-tag color-1">medical</span> -->
                        </div>
                        <div class="blog-text">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar-alt"></i> <a href="blog-details.html">25 Aug 2020</a></span>
                            </div>
                            <h4><a href="blog-details.html">Learning Resourc Challe
                                    Ging Online Work</a></h4>
                            <p>Sedut perspiciatis unde omnis natus error sit voluptatem accusantium </p>
                            <div class="b-button gray-b-button">
                                <a href="blog-details.html">read more <i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog-area-end -->


    <!-- instagram-area-start -->
    <div class="instagram-area pl-130 pr-130">
        <div class="container-fluid">
            <div class="row instagram-active">
                <div class="col-xl-2 p-0">
                    <div class="instagram-wrapper">
                        <div class="instagram-img">
                            <img src="assets/img/instagram/01.jpg" alt="">
                            <!-- <div class="instagram-icon">
                                            <i class="fab fa-instagram"></i>
                                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 p-0">
                    <div class="instagram-wrapper">
                        <div class="instagram-img">
                            <img src="assets/img/instagram/02.jpg" alt="">
                            <!-- <div class="instagram-icon">
                                            <i class="fab fa-instagram"></i>
                                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 p-0">
                    <div class="instagram-wrapper">
                        <div class="instagram-img">
                            <img src="assets/img/instagram/03.jpg" alt="">
                            <!-- <div class="instagram-icon">
                                            <i class="fab fa-instagram"></i>
                                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 p-0">
                    <div class="instagram-wrapper">
                        <div class="instagram-img">
                            <img src="assets/img/instagram/04.jpg" alt="">
                            <!-- <div class="instagram-icon">
                                            <i class="fab fa-instagram"></i>
                                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 p-0">
                    <div class="instagram-wrapper">
                        <div class="instagram-img">
                            <img src="assets/img/instagram/05.jpg" alt="">
                            <!-- <div class="instagram-icon">
                                            <i class="fab fa-instagram"></i>
                                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 p-0">
                    <div class="instagram-wrapper">
                        <div class="instagram-img">
                            <img src="assets/img/instagram/06.jpg" alt="">
                            <!-- <div class="instagram-icon">
                                            <i class="fab fa-instagram"></i>
                                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 p-0">
                    <div class="instagram-wrapper">
                        <div class="instagram-img">
                            <img src="assets/img/instagram/01.jpg" alt="">
                            <div class="instagram-icon">
                                <!-- <i class="fab fa-instagram"></i> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- instagram-area-end -->

</main>


@endsection