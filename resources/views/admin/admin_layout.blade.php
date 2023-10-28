<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', '') }}</title>
       
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{ asset('admin_assets/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/countrySelect.css') }}">
        <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/dragula.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/dropzone.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/flatpickr.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/jquery-jvectormap-2.0.5.css') }}">
        <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/leaflet.css') }}">
        <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/plyr.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/quill.css') }}">
        <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/sidebar-menu.css') }}">
        <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/SimpleBar.css') }}">
        <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/zabuto_calendar.min.css') }}">
    </head>
    <body>

        <div class="loginwrapper">
            <div class="lg-inner-column">
                <div class="left-column relative z-[1]">
                    <div class="max-w-[520px] pt-20 pl-20 pr-20">
                        <!-- APPLICATION LOGO -->
                        <div class="mb-6">
                            <a class="flex items-center" href="{{ url('/') }}">
                                <img src="{{ asset('admin_assets/images/dark-logo.svg') }}" class="black_logo" alt="logo">
                                <img src="{{ asset('admin_assets/images/logo.svg') }}" class="white_logo" alt="logo">
                                <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white hidden xl:inline-block">Growthius</span>
                            </a>

                        </div>
                        <h4>
                            {{ __('Unlock your project') }}
                            <span class="text-slate-800 dark:text-slate-400 font-bold">
                                {{ __('Performance') }}
                            </span>
                        </h4>
                    </div>
                    <div class="absolute left-0 2xl:bottom-[-160px] bottom-[-130px] h-full w-full z-[-1]">
                        <img class="h-full w-full object-containll" src="{{ asset('admin_assets/images/guest-background.svg') }}" alt="image">
                    </div>
                </div>
                <div class="right-column  relative">
                    <div class="inner-content h-full flex flex-col bg-white dark:bg-slate-800">
                    @yield('content')
                        <div class="auth-footer text-center">
                            {{ __('Copyright') }}
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            , <a href="#">{{ __('Growthius') }}</a>
                            {{ __('All Rights Reserved.') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Main JS -->
    <script src="{{ asset('admin_assets/js/plugins-old/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/main.js') }}"></script>
    <script src="{{ asset('admin_assets/js/app.js') }}"></script>
    <script src="{{ asset('admin_assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin_assets/js/plugins/cleave.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/plugins/dropzone.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/plugins/flatpickr.js') }}"></script>
    <script src="{{ asset('admin_assets/js/plugins/iconify.js') }}"></script>
    <script src="{{ asset('admin_assets/js/plugins/jquery-jvectormap-2.0.5.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/plugins/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('admin_assets/js/plugins/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/plugins/plyr.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/plugins/Select2.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/custom/app-chat.js') }}"></script>
    <script src="{{ asset('admin_assets/js/custom/app-email.js') }}"></script>
    <script src="{{ asset('admin_assets/js/custom/app-todo.js') }}"></script>
    <script src="{{ asset('admin_assets/js/custom/calander-init.js') }}"></script>
    <script src="{{ asset('admin_assets/js/custom/chart-active.js') }}"></script>
    <script src="{{ asset('admin_assets/js/custom/main.js') }}"></script>
    <script src="{{ asset('admin_assets/js/custom/map-active.js') }}"></script>
    <script src="{{ asset('admin_assets/js/custom/sidebar-menu.js') }}"></script>
    <script src="{{ asset('admin_assets/js/custom/step-form.js') }}"></script>
    <script src="{{ asset('admin_assets/js/custom/store.js') }}"></script>
    </body>
</html>
