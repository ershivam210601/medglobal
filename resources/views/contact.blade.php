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
                            <h2>contact</h2>
                        </div>
                        <ul class="breadcrumb-menu">
                            <li><a href="index.html">home</a></li>
                            <li><span>contact</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- contact-area-start -->
    <div class="contact-area pos-rel pt-100 pb-160">
        <div class="shape d-none d-xl-block">
            <div class="shape-item con-01"><img src="assets/img/icon/s.png" alt=""></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="contact-address-wrapper mt-20 mb-30">
                        <div class="section-title mb-30">
                            <h2>Conatct Us</h2>
                            <!-- <p>Sed ut perspiciatis unde omnis natus error</p> -->
                        </div>
                        <ul class="contact-address-link">
                            <li>
                                <div class="contact-address-icon f-left mr-25">
                                    <i class="far fa-map-marked-alt"></i>
                                </div>
                                <div class="contact-address-text">
                                    <span>Location</span>
                                    <h4>UNIT NO 116 , FIRST FLOOR , LSC , VARDHMAN PREMIUM MALL OUTER RING ROAD , PITAMPURA DELHI – 110034</h4>
                                </div>
                            </li>
                            <li>
                                <div class="contact-address-icon f-left mr-25">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="contact-address-text">
                                    <span>phone number</span>
                                    <h4>+91-9958420476
                                        <!-- <br> +89564213 -->
                                    </h4>
                                </div>
                            </li>
                            <li>
                                <div class="contact-address-icon f-left mr-25">
                                    <i class="far fa-envelope-open"></i>
                                </div>
                                <div class="contact-address-text">
                                    <span>Email Address</span>
                                    <h4><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="85f6f0f5f5eaf7f1c5e2e8e4ece9abe6eae8">medglobalsurgical@gmail.com</a>
                                        <br>info@medglobalsurgical.com
                                    </h4>
                                </div>
                            </li>
                            <!-- <li>
                                    <div class="contact-address-icon f-left mr-25">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="contact-address-text">
                                        <span>Head Office</span>
                                        <h4>Sunday - Saturday, <br> 08 am - 09 pm</h4>
                                    </div>
                                </li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="contact-img mb-30">
                        <img src="assets/img/bg/contact.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-area-end -->

    <!-- map-area-start -->
    <div class="map-area">
        <div class="map-wrapper">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="section-title text-center mb-65">
                        <h2>Send Us A Message</h2>
                        <p>FILL OUT THE FORM AND WE'LL BE IN TOUCH SOON!</p>
                    </div>
                    <form id="contacts-form" class="contacts-form" action="{{route('addContact')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4 col-md-12">

                                <input type="text" placeholder="Your Full Name ">

                            </div>
                            <div class="col-lg-4 col-md-12">

                                <input type="email" placeholder="Your Email Address">

                            </div>
                            <div class="col-lg-4 col-md-12">

                                <input type="text" placeholder="Your Phone">

                            </div>
                            <div class="col-lg-12">
                                <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Your Comments...."></textarea>
                            </div>
                            <div class="col-lg-12">
                                <div class="contacts-form-button text-center">
                                    <button class="c-btn">
                                        send message
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-xl-6 col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14602.254272231177!2d90.3654215!3d23.7985508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1592201299593!5m2!1sen!2sbd" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- map-area-end -->


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