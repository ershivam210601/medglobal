<div class="z-[9] sticky top-0" id="app_header">
   <div class="app-header z-[999] bg-white dark:bg-slate-800 shadow-sm dark:shadow-slate-700">
      <div class="flex justify-between items-center h-full">
         <div class="flex items-center md:space-x-4 space-x-4 rtl:space-x-reverse vertical-box">
            <div class="xl:hidden inline-block">
               <a class="flex items-center" href="http://127.0.0.1:8001">
                  <img src="{{ asset('assets/images/logo.png') }}" class="black_logo" alt="logo" width="50px">
                  <img src="{{ asset('assets/images/logo.png') }}" class="white_logo" alt="logo">
                  <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white hidden xl:inline-block">DashCode</span>
               </a>
            </div>
            <!-- <button class="smallDeviceMenuController  open-sdiebar-controller hidden xl:hidden md:inline-block">
                              <iconify-icon class="leading-none bg-transparent relative text-xl top-[2px] text-slate-900 dark:text-white" icon="heroicons-outline:menu-alt-3"></iconify-icon>
                           </button>
                           <button class="sidebarOpenButton text-xl text-slate-900 dark:text-white !ml-0">
                              <iconify-icon icon="ph:arrow-right-bold"></iconify-icon>
                           </button>
                           <button class="flex items-center xl:text-sm text-lg xl:text-slate-400 text-slate-800 dark:text-slate-300 focus:outline-none focus:shadow-none px-1 space-x-3
                              rtl:space-x-reverse search-modal" data-bs-toggle="modal" data-bs-target="#searchModal">
                              <iconify-icon icon="heroicons-outline:search"></iconify-icon>
                              <span class="xl:inline-block hidden">Search...
                              </span>
                           </button> -->
         </div>
         <!-- end vertcial -->
         <!-- <div class="items-center space-x-4 rtl:space-x-reverse horizental-box">
                           <a class="flex items-center" href="http://127.0.0.1:8001">
                           <img src="http://127.0.0.1:8001/images/logo.svg" class="black_logo" alt="logo">
                           <img src="http://127.0.0.1:8001/images/dark-logo.svg" class="white_logo" alt="logo">
                           <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white hidden xl:inline-block">DashCode</span>
                           </a>
                           <button class="smallDeviceMenuController  open-sdiebar-controller  hidden xl:hidden md:inline-block">
                              <iconify-icon
                                 class="leading-none bg-transparent relative text-xl top-[2px] text-slate-900 dark:text-white"
                                 icon="heroicons-outline:menu-alt-3"></iconify-icon>
                           </button>
                           <button class="flex items-center xl:text-sm text-lg xl:text-slate-400 text-slate-800 dark:text-slate-300 focus:outline-none focus:shadow-none px-1 space-x-3
                              rtl:space-x-reverse search-modal" data-bs-toggle="modal" data-bs-target="#searchModal">
                              <iconify-icon icon="heroicons-outline:search"></iconify-icon>
                              <span class="xl:inline-block hidden">Search...
                              </span>
                           </button>
                        </div> -->
         <!-- end horizontal -->
         <!-- start horizontal nav -->
         <div class="main-menu">
            <ul>
               <li class="menu-item-has-children">
                  <!--  Single menu -->
                  <!-- has dropdown -->
                  <a href="javascript:void()">
                     <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                        <span class="icon-box">
                           <iconify-icon icon=heroicons-outline:home>
                           </iconify-icon>
                        </span>
                        <div class="text-box"> Dashboard
                        </div>
                     </div>
                     <div class="flex-none text-sm ltr:ml-3 rtl:mr-3 leading-[1] relative top-1">
                        <iconify-icon icon="heroicons-outline:chevron-down">
                        </iconify-icon>
                     </div>
                  </a>
                  <!-- Dropdown menu -->
                  <ul class="sub-menu">
                     <li>
                        <a href="#">
                           <div class="flex space-x-2 items-start rtl:space-x-reverse">
                              <iconify-icon icon=heroicons:presentation-chart-line class="leading-[1] text-base">
                              </iconify-icon>
                              <span class="leading-[1]">
                                 Analytics Dashboard
                              </span>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href=ecommerce-dashboard.html>
                           <div class="flex space-x-2 items-start rtl:space-x-reverse">
                              <iconify-icon icon=heroicons:shopping-cart class="leading-[1] text-base">
                              </iconify-icon>
                              <span class="leading-[1]">
                                 Ecommerce Dashboard
                              </span>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href=project-dashboard.html>
                           <div class="flex space-x-2 items-start rtl:space-x-reverse">
                              <iconify-icon icon=heroicons:briefcase class="leading-[1] text-base">
                              </iconify-icon>
                              <span class="leading-[1]">
                                 Project Dashboard
                              </span>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href=crm-dashboard.html>
                           <div class="flex space-x-2 items-start rtl:space-x-reverse">
                              <iconify-icon icon=ri:customer-service-2-fill class="leading-[1] text-base">
                              </iconify-icon>
                              <span class="leading-[1]">
                                 CRM Dashboard
                              </span>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href=banking-dashboard.html>
                           <div class="flex space-x-2 items-start rtl:space-x-reverse">
                              <iconify-icon icon=heroicons:wrench-screwdriver class="leading-[1] text-base">
                              </iconify-icon>
                              <span class="leading-[1]">
                                 Banking Dashboard
                              </span>
                           </div>
                        </a>
                     </li>
                  </ul>
                  <!-- Megamenu -->
               </li>
               <li class="menu-item-has-children">
                  <!--  Single menu -->
                  <!-- has dropdown -->
                  <a href="javascript:void()">
                     <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                        <span class="icon-box">
                           <iconify-icon icon=heroicons-outline:chip>
                           </iconify-icon>
                        </span>
                        <div class="text-box">App
                        </div>
                     </div>
                     <div class="flex-none text-sm ltr:ml-3 rtl:mr-3 leading-[1] relative top-1">
                        <iconify-icon icon="heroicons-outline:chevron-down">
                        </iconify-icon>
                     </div>
                  </a>
                  <!-- Dropdown menu -->
                  <ul class="sub-menu">
                     <li>
                        <a href=chat.html>
                           <div class="flex space-x-2 items-start rtl:space-x-reverse">
                              <iconify-icon icon=heroicons-outline:chat class="leading-[1] text-base">
                              </iconify-icon>
                              <span class="leading-[1]">
                                 Chat
                              </span>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href=email.html>
                           <div class="flex space-x-2 items-start rtl:space-x-reverse">
                              <iconify-icon icon=heroicons-outline:mail class="leading-[1] text-base">
                              </iconify-icon>
                              <span class="leading-[1]">
                                 Email
                              </span>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href=calender>
                           <div class="flex space-x-2 items-start rtl:space-x-reverse">
                              <iconify-icon icon=heroicons-outline:calendar class="leading-[1] text-base">
                              </iconify-icon>
                              <span class="leading-[1]">
                                 Calander
                              </span>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href=kanban>
                           <div class="flex space-x-2 items-start rtl:space-x-reverse">
                              <iconify-icon icon=heroicons-outline:view-boards class="leading-[1] text-base">
                              </iconify-icon>
                              <span class="leading-[1]">
                                 Kanban
                              </span>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href=todo>
                           <div class="flex space-x-2 items-start rtl:space-x-reverse">
                              <iconify-icon icon=heroicons-outline:clipboard-check class="leading-[1] text-base">
                              </iconify-icon>
                              <span class="leading-[1]">
                                 Todo
                              </span>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href=projects>
                           <div class="flex space-x-2 items-start rtl:space-x-reverse">
                              <iconify-icon icon=heroicons-outline:document class="leading-[1] text-base">
                              </iconify-icon>
                              <span class="leading-[1]">
                                 Projects
                              </span>
                           </div>
                        </a>
                     </li>
                  </ul>
                  <!-- Megamenu -->
               </li>
               <li class="
                                 menu-item-has-children has-megamenu
                                 ">
                  <!--  Single menu -->
                  <!-- has dropdown -->
                  <a href="javascript:void()">
                     <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                        <span class="icon-box">
                           <iconify-icon icon=heroicons-outline:view-boards>
                           </iconify-icon>
                        </span>
                        <div class="text-box">Pages
                        </div>
                     </div>
                     <div class="flex-none text-sm ltr:ml-3 rtl:mr-3 leading-[1] relative top-1">
                        <iconify-icon icon="heroicons-outline:chevron-down">
                        </iconify-icon>
                     </div>
                  </a>
                  <!-- Dropdown menu -->
                  <!-- Megamenu -->
                  <div class="rt-mega-menu">
                     <div class="flex flex-wrap space-x-8 justify-between rtl:space-x-reverse">
                        <div>
                           <!-- mega menu title -->
                           <div class="text-sm font-medium text-slate-900 dark:text-white mb-2 flex space-x-1 items-center">
                              <span>Authentication</span>
                           </div>
                           <!-- single menu item* -->
                           <a href=signin-one.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">Signin One
                                 </span>
                              </div>
                           </a>
                           <a href=signin-two.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">Signin Two
                                 </span>
                              </div>
                           </a>
                           <a href=signin-three.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">Signin Three
                                 </span>
                              </div>
                           </a>
                           <a href=signup-one.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">Signup One
                                 </span>
                              </div>
                           </a>
                           <a href=signup-two.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">Signin Two
                                 </span>
                              </div>
                           </a>
                           <a href=signup-three.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">Signup Three
                                 </span>
                              </div>
                           </a>
                           <a href=forget-password-one.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">Forget Password One
                                 </span>
                              </div>
                           </a>
                           <a href=forget-password-two.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">Forget Password Two
                                 </span>
                              </div>
                           </a>
                           <a href=forget-password-three.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">Forget Password Three
                                 </span>
                              </div>
                           </a>
                           <a href=lock-screen-one.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">Lock Screen One
                                 </span>
                              </div>
                           </a>
                           <a href=lock-screen-two.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">Lock Screen Two
                                 </span>
                              </div>
                           </a>
                           <a href=lock-screen-three.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">Lock Screen Three
                                 </span>
                              </div>
                           </a>
                        </div>
                        <div>
                           <!-- mega menu title -->
                           <div class="text-sm font-medium text-slate-900 dark:text-white mb-2 flex space-x-1 items-center">
                              <span> Components
                              </span>
                           </div>
                           <!-- single menu item* -->
                           <a href=typography.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">Typography
                                 </span>
                              </div>
                           </a>
                           <a href=colors.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Colors
                                 </span>
                              </div>
                           </a>
                           <a href=alert.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Alert
                                 </span>
                              </div>
                           </a>
                           <a href=button.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Button
                                 </span>
                              </div>
                           </a>
                           <a href=card.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Card
                                 </span>
                              </div>
                           </a>
                           <a href=carousel.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Carousel
                                 </span>
                              </div>
                           </a>
                           <a href=dropdown.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Dropdown
                                 </span>
                              </div>
                           </a>
                           <a href=image.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Image
                                 </span>
                              </div>
                           </a>
                           <a href=modal.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Modal
                                 </span>
                              </div>
                           </a>
                           <a href=progress-bar.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">Progress Bar
                                 </span>
                              </div>
                           </a>
                           <a href=placeholder.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Placeholder
                                 </span>
                              </div>
                           </a>
                           <a href=tab-accordion.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Tab &amp;amp; Accordion
                                 </span>
                              </div>
                           </a>
                        </div>
                        <div>
                           <!-- mega menu title -->
                           <div class="text-sm font-medium text-slate-900 dark:text-white mb-2 flex space-x-1 items-center">
                              <span> Forms
                              </span>
                           </div>
                           <!-- single menu item* -->
                           <a href=input.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Input
                                 </span>
                              </div>
                           </a>
                           <a href=input-group.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Input Group
                                 </span>
                              </div>
                           </a>
                           <a href=input-layout.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Input Layout
                                 </span>
                              </div>
                           </a>
                           <a href=form-validation.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Form Validation
                                 </span>
                              </div>
                           </a>
                           <a href=form-wizard.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Wizard
                                 </span>
                              </div>
                           </a>
                           <a href=input-mask.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Input Mask
                                 </span>
                              </div>
                           </a>
                           <a href=file-input>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    File Input
                                 </span>
                              </div>
                           </a>
                           <a href=form-repeater.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Form Repeater
                                 </span>
                              </div>
                           </a>
                           <a href=textarea.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Textarea
                                 </span>
                              </div>
                           </a>
                           <a href=checkbox.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Checkbox
                                 </span>
                              </div>
                           </a>
                           <a href=radio-button.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Radion Button
                                 </span>
                              </div>
                           </a>
                           <a href=switch.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Switch
                                 </span>
                              </div>
                           </a>
                        </div>
                        <div>
                           <!-- mega menu title -->
                           <div class="text-sm font-medium text-slate-900 dark:text-white mb-2 flex space-x-1 items-center">
                              <span> Utility
                              </span>
                           </div>
                           <!-- single menu item* -->
                           <a href=invoice.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Invoice
                                 </span>
                              </div>
                           </a>
                           <a href=pricing.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Pricing
                                 </span>
                              </div>
                           </a>
                           <a href=faq.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    FAQ
                                 </span>
                              </div>
                           </a>
                           <a href=blank-page.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Blank Page
                                 </span>
                              </div>
                           </a>
                           <a href=blog.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Blog
                                 </span>
                              </div>
                           </a>
                           <a href=404.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    404 Page
                                 </span>
                              </div>
                           </a>
                           <a href=comming-soon.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Coming Soon
                                 </span>
                              </div>
                           </a>
                           <a href=under-maintanance.html>
                              <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                 <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none">
                                 </span>
                                 <span class="capitalize text-slate-600 dark:text-slate-300">
                                    Under Maintanance Page
                                 </span>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="menu-item-has-children">
                  <!--  Single menu -->
                  <!-- has dropdown -->
                  <a href="javascript:void()">
                     <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                        <span class="icon-box">
                           <iconify-icon icon=heroicons-outline:view-grid-add>
                           </iconify-icon>
                        </span>
                        <div class="text-box">Widgets
                        </div>
                     </div>
                     <div class="flex-none text-sm ltr:ml-3 rtl:mr-3 leading-[1] relative top-1">
                        <iconify-icon icon="heroicons-outline:chevron-down">
                        </iconify-icon>
                     </div>
                  </a>
                  <!-- Dropdown menu -->
                  <ul class="sub-menu">
                     <li>
                        <a href=basic-widgets.html>
                           <div class="flex space-x-2 items-start rtl:space-x-reverse">
                              <iconify-icon icon=heroicons-outline:document-text class="leading-[1] text-base">
                              </iconify-icon>
                              <span class="leading-[1]">
                                 Basic
                              </span>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href=statistics-widgets.html>
                           <div class="flex space-x-2 items-start rtl:space-x-reverse">
                              <iconify-icon icon=heroicons-outline:document-text class="leading-[1] text-base">
                              </iconify-icon>
                              <span class="leading-[1]">
                                 Statistic
                              </span>
                           </div>
                        </a>
                     </li>
                  </ul>
                  <!-- Megamenu -->
               </li>
               <li class="
                                 menu-item-has-children
                                 ">
                  <!--  Single menu -->
                  <!-- has dropdown -->
                  <a href="javascript:void()">
                     <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                        <span class="icon-box">
                           <iconify-icon icon=heroicons-outline:template>
                           </iconify-icon>
                        </span>
                        <div class="text-box">Extra
                        </div>
                     </div>
                     <div class="flex-none text-sm ltr:ml-3 rtl:mr-3 leading-[1] relative top-1">
                        <iconify-icon icon="heroicons-outline:chevron-down">
                        </iconify-icon>
                     </div>
                  </a>
                  <!-- Dropdown menu -->
                  <ul class="sub-menu">
                     <li>
                        <a href=basic-table.html>
                           <div class="flex space-x-2 items-start rtl:space-x-reverse">
                              <iconify-icon icon=heroicons-outline:table class="leading-[1] text-base">
                              </iconify-icon>
                              <span class="leading-[1]">
                                 Basic Table
                              </span>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href=advance-table.html>
                           <div class="flex space-x-2 items-start rtl:space-x-reverse">
                              <iconify-icon icon=heroicons-outline:table class="leading-[1] text-base">
                              </iconify-icon>
                              <span class="leading-[1]">
                                 Advanced Table
                              </span>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href=apex-chart.html>
                           <div class="flex space-x-2 items-start rtl:space-x-reverse">
                              <iconify-icon icon=heroicons-outline:chart-bar class="leading-[1] text-base">
                              </iconify-icon>
                              <span class="leading-[1]">
                                 Apex Chart
                              </span>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href=chartjs.html>
                           <div class="flex space-x-2 items-start rtl:space-x-reverse">
                              <iconify-icon icon=heroicons-outline:chart-bar class="leading-[1] text-base">
                              </iconify-icon>
                              <span class="leading-[1]">
                                 Chart js
                              </span>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href=map.html>
                           <div class="flex space-x-2 items-start rtl:space-x-reverse">
                              <iconify-icon icon=heroicons-outline:map class="leading-[1] text-base">
                              </iconify-icon>
                              <span class="leading-[1]">
                                 Map
                              </span>
                           </div>
                        </a>
                     </li>
                  </ul>
                  <!-- Megamenu -->
               </li>
            </ul>
         </div>
         <!-- end top menu -->
         <!-- end horizontal nav -->
         <div class="nav-tools flex items-center lg:space-x-5 space-x-3 rtl:space-x-reverse leading-0">
            <div class="md:block hidden w-full leading-0">
               <button class="text-slate-800 dark:text-white focus:ring-0 focus:outline-none font-medium rounded-lg text-sm text-center
                                 inline-flex items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="lg:h-8 lg:w-8 h-7 w-7 rounded-full flex-1 ltr:mr-[10px] rtl:ml-[10px]">
                     <!-- <img class="block w-full h-full object-cover rounded-full"  alt="user" /> -->
                  </div>
                  <div class="ltr:text-left rtl:text-right">
                     <span class="flex-none text-slate-600 dark:text-white text-sm font-normal items-center lg:flex hidden overflow-hidden text-ellipsis whitespace-nowrap">
                        admin
                     </span>
                     <!-- <small class="text-[9px] block"></small> -->
                  </div>
                  <svg class="w-[16px] h-[16px] dark:text-white hidden lg:inline-block text-base inline-block ml-[10px] rtl:mr-[10px]" aria-hidden="true" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
               </button>
               <!-- Dropdown menu -->
               <div class="dropdown-menu z-10 hidden bg-white divide-y divide-slate-100 shadow w-44 dark:bg-slate-800 border dark:border-slate-700 !top-[23px] rounded-md
                                 overflow-hidden">
                  <ul class="py-1 text-sm text-slate-800 dark:text-slate-200" :class="listView ? 'z-20 opacity-100 top-[61px]' : 'opacity-0 -z-20 top-5' " x-show="listView" @click.away="listView = false">
                     <li>
                        <a href="{{ route('admin.Profile')}}" class="flex items-center px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600
                                          dark:text-white font-normal" class="country-list">
                           <iconify-icon class="text-lg text-textColor dark:text-white mr-2" icon="carbon:user-avatar">
                           </iconify-icon>
                           <span class="dropdown-option">
                              Profile </span>
                        </a>
                     </li>
                     <li>
                        <a href="{{ route('admin.logout')}}" class="flex items-center px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600
                                          dark:text-white font-normal" class="country-list">
                           <iconify-icon class="text-lg text-textColor dark:text-white mr-2" icon="carbon:logout">
                           </iconify-icon>
                           <span class="dropdown-option">
                              Log Out </span>
                        </a>
                     </li>

                  </ul>
               </div>
            </div>
            <button class="smallDeviceMenuController md:hidden block leading-0">
               <iconify-icon class="cursor-pointer text-slate-900 dark:text-white text-2xl" icon="heroicons-outline:menu-alt-3"></iconify-icon>
            </button>
            <!-- end mobile menu -->
         </div>
         <!-- end nav tools -->
      </div>
   </div>
</div>

<!-- END: header -->