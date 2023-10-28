@extends('components/layout')
@section('content')

<main>

    <!-- breadcrumb-area-start -->
    <div class="breadcrumb-area pt-125 pb-125" style="background-image:url(assets/img/bg/04.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-wrapper">
                        <div class="breadcrumb-text">
                            <h2>Our Products</h2>
                        </div>
                        <ul class="breadcrumb-menu">
                            <li><a href="{{route('home')}}">home</a></li>
                            <li><span>Products</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- product-area-start -->
    <div class="product-area pt-100 pb-100">
        <div class="container">
            <div class="product-tab-content">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            @forelse($category as $item)
                            <div class="col-xl-4 cl-lg-4 col-md-6">
                                <div class="product-wrapper text-center mb-45">
                                    <div class="product-img pos-rel">
                                        <a href="{{route('categoryProduct',$item->slug)}}">
                                            <img src="{{ asset('uploads/category/'.$item->category_image)}}" alt="">
                                            <!-- <img class="secondary-img" src="assets/img/products/01.jpg" alt=""> -->
                                        </a>
                                    </div>
                                    <div class="product-text">
                                        <h4><a href="{{route('categoryProduct',$item->slug)}}">{{$item->name}}</a></h4>
                                    </div>
                                </div>
                            </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product-area-end -->


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