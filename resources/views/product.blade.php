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
                            <h2>Products</h2>
                        </div>
                        <ul class="breadcrumb-menu">
                            <li><a href="index.html">home</a></li>
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
                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        @forelse($categories as $item)
                        <div class="row">
                            <div class="col-xl-4 col-lg-4">
                                <div class="product mb-30">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/img/medglobal1.jpg')}}" alt="" style="height:250px;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8">
                                <div class="product-list-content mb-30">
                                    <div class="product-text">

                                        <h4>{{$item->name}}</h4>
                                        <span>MGS-F24</span>
                                    </div>
                                    {!!$item->long_description!!}
                                    <!-- <ul>
                                                <li class="liststyle">Laminated board top fitted on heavy tubular steelframe mounted on 5cm. Swivel castors</li>
                                                <li class="liststyle">Height adjustable sliding pipe made of heavy duty Stainless steel and maneuverable by knob.</li>
                                                <li class="liststyle">Finish:pre-treatedandepoxypowdercoated.</li>
                                            </ul> -->

                                </div>
                            </div>
                        </div>
                        @empty
                        @endforelse
                        <div class="row">
                            <div class="col-xl-4 col-lg-4">
                                <div class="product mb-30">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/img/medglobal1.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8">
                                <div class="product-list-content mb-30">
                                    <div class="product-text">

                                        <h4>Stretcher Trolley Non Hi-Low deluxe</h4>
                                        <span>MGS-F27</span>
                                    </div>
                                    <ul>
                                        <li class="liststyle">Totally made of crca pipe & sheet with epoxyPowder coated finish.</li>
                                        <li class="liststyle">Height adjustable with crank mechanism at foot end.</li>
                                        <li class="liststyle">Two sections powder coated top, head raise by ratchet system.</li>
                                        <li class="liststyle">Trolley mobile on four 125mm high strength castorswith covers& two with brakes</li>
                                        <li class="liststyle">Abs tuck away side safety railing that enables hospital staff to keep the trolley strictly adjacent to patientbed/operatingtable/x-raytable etc. and shift the patient without any discomfortor hustle.</li>
                                        <li class="liststyle">One stainless steel i.v. rod with foldable four i.v hooks.</li>
                                        <li class="liststyle">Provided with cylinder cage and utility tray.</li>
                                        <li class="liststyle">Provide with two sections 50 mm high density foam mattress with fixing straps.</li>
                                        <li class="liststyle">Pre-treated and epoxy powder coated.</li>
                                    </ul>
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                                incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                                ut
                                                aliquip ex ea commodo consequat.
                                                Duis aute irure dolor in reprehenderit in voluptate.</p> -->
                                    <!-- <div class="product-action product-02-action">
                                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                    <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                </div> -->
                                </div>
                            </div>
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
                            <a href="#"><img src="assets/img/instagram/01.jpg" alt="">
                                <div class="instagram-icon">
                                    <i class="fab fa-instagram"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 p-0">
                    <div class="instagram-wrapper">
                        <div class="instagram-img">
                            <a href="#"><img src="assets/img/instagram/02.jpg" alt="">
                                <div class="instagram-icon">
                                    <i class="fab fa-instagram"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 p-0">
                    <div class="instagram-wrapper">
                        <div class="instagram-img">
                            <a href="#"><img src="assets/img/instagram/03.jpg" alt="">
                                <div class="instagram-icon">
                                    <i class="fab fa-instagram"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 p-0">
                    <div class="instagram-wrapper">
                        <div class="instagram-img">
                            <a href="#"><img src="assets/img/instagram/04.jpg" alt="">
                                <div class="instagram-icon">
                                    <i class="fab fa-instagram"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 p-0">
                    <div class="instagram-wrapper">
                        <div class="instagram-img">
                            <a href="#"><img src="assets/img/instagram/05.jpg" alt="">
                                <div class="instagram-icon">
                                    <i class="fab fa-instagram"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 p-0">
                    <div class="instagram-wrapper">
                        <div class="instagram-img">
                            <a href="#"><img src="assets/img/instagram/06.jpg" alt="">
                                <div class="instagram-icon">
                                    <i class="fab fa-instagram"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 p-0">
                    <div class="instagram-wrapper">
                        <div class="instagram-img">
                            <a href="#"><img src="assets/img/instagram/01.jpg" alt="">
                                <div class="instagram-icon">
                                    <i class="fab fa-instagram"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- instagram-area-end -->

</main>


@endsection