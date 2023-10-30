<!-- BEGIN: Sidebar Navigation -->
<!-- BEGIN: Sidebar -->
<div class="sidebar-wrapper group w-0 hidden xl:w-[248px] xl:block">
    <div id="bodyOverlay" class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden">
    </div>
    <div class="logo-segment">

        <!-- Application Logo -->
        <a class="flex items-center" href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('images/logo-4.png') }}" class="black_logo" alt="logo-4" style="width:184px">
            <img src="{{ asset('images/logo-4.png') }}" class="white_logo" alt="logo-4">
            <!-- <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white hidden xl:inline-block">HelloGeo</span> -->
        </a>

        <!-- Sidebar Type Button -->
        <div id="sidebar_type" class="cursor-pointer text-slate-900 dark:text-white text-lg">
            <iconify-icon class="sidebarDotIcon extend-icon text-slate-900 dark:text-slate-200" icon="fa-regular:dot-circle"></iconify-icon>
            <iconify-icon class="sidebarDotIcon collapsed-icon text-slate-900 dark:text-slate-200" icon="material-symbols:circle-outline"></iconify-icon>
        </div>

    </div>
    <div id="nav_shadow" class="nav_shadow h-[60px] absolute top-[80px] nav-shadow z-[1] w-full transition-all duration-200 pointer-events-none
      opacity-0"></div>
    <div class="sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] z-50" id="sidebar_menus">
        <ul class="sidebar-menu">
            <!-- <li class="sidebar-menu-title">MENU</li> -->
            <!-- <li>
                <a href="{{route('admin.dashboard')}}" class="navItem {{url()->current()==route('admin.dashboard')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:home"></iconify-icon>
                        <span>Dashboard</span>
                    </span>
                </a>
            </li> -->
            <!-- Homepage Settings -->
            <li>
                <a href="{{route('admin.Settings','homepage-settings')}}" class="navItem {{url()->current()==route('admin.Settings','homepage-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:home"></iconify-icon>
                        <span>Homepage</span>
                    </span>
                </a>
            </li>
            <!-- How It Works Settings -->
            <li>
                <a href="{{route('admin.Settings','about-settings')}}" class="navItem {{url()->current()==route('admin.Settings','about-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="material-symbols:settings-outline"></iconify-icon>
                        <span>About Us</span>
                    </span>
                </a>
            </li>
            <!-- Solutions Settings -->
            <li>
                <a href="{{route('admin.Settings','category-settings')}}" class="navItem {{url()->current()==route('admin.Settings','category-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="material-symbols:settings-outline"></iconify-icon>
                        <span>Categories</span>
                    </span>
                </a>
            </li>
            <!-- About Settings -->
            <li>
                <a href="{{route('admin.Settings','product-settings')}}" class="navItem {{url()->current()==route('admin.Settings','product-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="material-symbols:settings-outline"></iconify-icon>
                        <span>Products</span>
                    </span>
                </a>
            </li>

            <li>
                <a href="{{route('admin.Settings','event-settings')}}" class="navItem {{url()->current()==route('admin.Settings','event-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="material-symbols:settings-outline"></iconify-icon>
                        <span>Events</span>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.Settings','quality-settings')}}" class="navItem {{url()->current()==route('admin.Settings','quality-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="material-symbols:settings-outline"></iconify-icon>
                        <span>Quality</span>
                    </span>
                </a>
            </li>

            <li>
                <a href="{{route('admin.Settings','testimonial-settings')}}" class="navItem {{url()->current()==route('admin.Settings','testimonial-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="material-symbols:settings-outline"></iconify-icon>
                        <span>Testimonial</span>
                    </span>
                </a>
            </li>
            <!-- Case Studies Settings -->
            <li>
                <a href="{{route('admin.Settings','contact-settings')}}" class="navItem {{url()->current()==route('admin.Settings','contact-settings')?'active':''}}">
                    <span>
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:document"></iconify-icon>
                        <span>Enquiry</span>
                    </span>
                </a>
            </li>

            <!-- <li>
                <a href="{{route('admin.Settings','info-settings')}}" class="navItem {{url()->current()==route('admin.Settings','info-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="material-symbols:settings-outline"></iconify-icon>
                        <span>Contact</span>
                    </span>
                </a>
            </li> -->

            <!-- Partner Settings -->
            <!-- <li>
                <a href="{{route('admin.Settings','partner-settings')}}" class="navItem {{url()->current()==route('admin.Settings','partner-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="material-symbols:settings-outline"></iconify-icon>
                        <span>Partner With Us</span>
                    </span>
                </a>
            </li> -->
            <!-- Pricing Settings -->
            <!-- <li>
                <a href="{{route('admin.Settings','pricing-settings')}}" class="navItem {{url()->current()==route('admin.Settings','pricing-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="material-symbols:settings-outline"></iconify-icon>
                        <span>Pricing</span>
                    </span>
                </a>
            </li> -->
            <!-- Partner Settings -->
            <!-- <li>
                <a href="{{route('admin.Settings','contact-settings')}}" class="navItem {{url()->current()==route('admin.Settings','contact-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="material-symbols:settings-outline"></iconify-icon>
                        <span>Contact</span>
                    </span>
                </a>
            </li> -->


        </ul>
    </div>
</div>
<!-- End: Sidebar --> <!-- End: Sidebar -->