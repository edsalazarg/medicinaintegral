<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 10 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <!--begin::Head-->
        <head>
            <base href="{{url('/')}}">

            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <meta charset="utf-8" />
            <title>Medicina UDG</title>
            <meta name="description" content="Page with empty content" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

            <!--begin::Fonts-->
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
            <!--end::Fonts-->

            <!--begin::Page Vendors Styles(used by this page)-->
            <!--end::Page Vendors Styles-->

            <!--begin::Global Theme Styles(used by all pages)-->
                <link href="{{asset('/dist/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{asset('/dist/assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{asset('/dist/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
            <!--end::Global Theme Styles-->

            <!--begin::Layout Themes(used by all pages)-->
            <!--end::Layout Themes-->

            <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
        </head>
    <!--end::Head-->

    <!--begin::Body-->
        <body id="kt_body" class="header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-secondary-enabled page-loading">

            <!--begin::Main-->

                <!--begin::Header Mobile-->
                    <div id="kt_header_mobile" class="header-mobile">

                        <!--begin::Logo-->
                            <a href="index.html">
                                <img alt="Logo" src="assets/media/logos/logo-letter-2.png" class="logo-default max-h-30px" />
                            </a>
                        <!--end::Logo-->

                        <!--begin::Toolbar-->
                            <div class="d-flex align-items-center">
                                <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                                    <span></span>
                                </button>
                            </div>
                        <!--end::Toolbar-->

                    </div>
                <!--end::Header Mobile-->

                <div class="d-flex flex-column flex-root">

                <!--begin::Page-->
                    <div class="d-flex flex-row flex-column-fluid page">

                        <!--begin::Aside-->
                            <div class="aside aside-left d-flex aside-fixed" id="kt_aside">

                                <!--begin::Primary-->
                                    <div class="aside-primary d-flex flex-column align-items-center flex-row-auto">

                                        <!--begin::Brand-->
                                            <div class="aside-brand d-flex flex-column align-items-center flex-column-auto py-5 py-lg-12">

                                                <!--begin::Logo-->
                                                    <a href="index.html">
                                                        <img alt="Logo" src="{{asset('/dist/assets/media/logos/logo-letter-2.png')}}" class="max-h-30px" />
                                                    </a>
                                                <!--end::Logo-->

                                            </div>
                                        <!--end::Brand-->

                                        <!--begin::Nav Wrapper-->
                                            <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid py-5 scroll scroll-pull">

                                                <!--begin::Nav-->
                                                    <ul class="nav flex-column" role="tablist">

                                                        <!--begin::Item-->
                                                            <li class="nav-item mb-3" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Metronic Features">
                                                                <a href="#" class="nav-link btn btn-icon btn-clean btn-lg" data-toggle="tab" data-target="#kt_aside_tab_2" role="tab">
                                                                    <span class="svg-icon svg-icon-xl">

                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                                    <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                    <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                                                </g>
                                                                            </svg>
                                                                        <!--end::Svg Icon-->

                                                                    </span>
                                                                </a>
                                                            </li>
                                                        <!--end::Item-->

                                                    </ul>
                                                <!--end::Nav-->

                                            </div>
                                        <!--end::Nav Wrapper-->

                                        <!--begin::Footer-->
                                            <div class="aside-footer d-flex flex-column align-items-center flex-column-auto py-4 py-lg-10">

                                                <!--begin::Aside Toggle-->
                                                    <span class="aside-toggle btn btn-icon btn-primary btn-hover-primary shadow-sm" id="kt_aside_toggle" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Toggle Aside">
                                                        <i class="ki ki-bold-arrow-back icon-sm"></i>
                                                    </span>
                                                <!--end::Aside Toggle-->

                                                <!--begin::User-->
                                                    <a href="#" class="btn btn-icon btn-clean btn-lg w-40px h-40px" id="kt_quick_user_toggle" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="User Profile">
                                                        <span class="symbol symbol-30 symbol-lg-40">
                                                            <span class="svg-icon svg-icon-xl">

                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                                        </g>
                                                                    </svg>
                                                                <!--end::Svg Icon-->

                                                            </span>
                                                        </span>
                                                    </a>
                                                <!--end::User-->

                                            </div>
                                        <!--end::Footer-->

                                    </div>
                                <!--end::Primary-->

                                <!--begin::Secondary-->
                                    <div class="aside-secondary d-flex flex-row-fluid">

                                        <!--begin::Workspace-->
                                            <div class="aside-workspace scroll scroll-push my-2">

                                                    <!--begin::Tab Pane-->
                                                        <div class="tab-pane fade" id="kt_aside_tab_2">

                                                            <!--begin::Aside Menu-->
                                                                <div class="aside-menu-wrapper flex-column-fluid px-10 py-5" id="kt_aside_menu_wrapper">

                                                                    <!--begin::Menu Container-->
                                                                        <div id="kt_aside_menu" class="aside-menu min-h-lg-800px" data-menu-vertical="1" data-menu-scroll="1">

                                                                            <!--begin::Menu Nav-->
                                                                                <ul class="menu-nav">
                                                                                    <li class="menu-section">
                                                                                        <h4 class="menu-text">Layout</h4>
                                                                                        <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                                                                                    </li>
                                                                                    <li class="menu-item" aria-haspopup="true">
                                                                                        <a target="_blank" href="https://preview.keenthemes.com/metronic/demo3/builder.html" class="menu-link">
                                                                                            <i class="menu-icon flaticon-cogwheel-1"></i>
                                                                                            <span class="menu-text">Builder</span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            <!--end::Menu Nav-->

                                                                        </div>
                                                                    <!--end::Menu Container-->

                                                                </div>
                                                            <!--end::Aside Menu-->

                                                        </div>
                                                    <!--end::Tab Pane-->

                                                </div>
                                                <!--end::Tab Content-->

                                            </div>
                                        <!--end::Workspace-->

                                    </div>
                                <!--end::Secondary-->

                            </div>
                        <!--end::Aside-->

                        <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

                                <!--begin::Content-->
                                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                                        <!--begin::Entry-->
                                        <div class="d-flex flex-column-fluid">
                                            <!--begin::Container-->
                                            <div class="container">
                                                @yield('content')
                                            </div>
                                            <!--end::Container-->
                                        </div>
                                        <!--end::Entry-->
                                    </div>
                                <!--end::Content-->

                                <!--begin::Footer-->
                                    <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">

                                        <!--begin::Container-->
                                            <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">

                                                <!--begin::Copyright-->
                                                    <div class="text-dark order-2 order-md-1">
                                                        <span class="text-muted font-weight-bold mr-2">2020©</span>
                                                        <a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Keenthemes</a>
                                                    </div>
                                                <!--end::Copyright-->

                                                <!--begin::Nav-->
                                                    <div class="nav nav-dark order-1 order-md-2">
                                                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pr-3 pl-0">About</a>
                                                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link px-3">Team</a>
                                                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-3 pr-0">Contact</a>
                                                    </div>
                                                <!--end::Nav-->

                                            </div>
                                        <!--end::Container-->

                                    </div>
                                <!--end::Footer-->

                            </div>
                        <!--end::Wrapper-->

                    </div>
                <!--end::Page-->

            <!--end::Main-->

            <!-- begin::User Panel-->
                <div id="kt_quick_user" class="offcanvas offcanvas-left p-10">

                    <!--begin::Header-->
                        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
                            <h3 class="font-weight-bold m-0">User Profile
                                <small class="text-muted font-size-sm ml-2">12 messages</small></h3>
                            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
                                <i class="ki ki-close icon-xs text-muted"></i>
                            </a>
                        </div>
                    <!--end::Header-->

                    <!--begin::Content-->
                        <div class="offcanvas-content pr-5 mr-n5">

                            <!--begin::Header-->
                                <div class="d-flex align-items-center mt-5">
                                    <div class="symbol symbol-100 mr-5">
                                        <div class="symbol-label" style="background-image:url('assets/media/users/300_21.jpg')"></div>
                                        <i class="symbol-badge bg-success"></i>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">James Jones</a>
                                        <div class="text-muted mt-1">Application Developer</div>
                                        <div class="navi mt-2">
                                            <a href="#" class="navi-item">
                                                        <span class="navi-link p-0 pb-2">
                                                            <span class="navi-icon mr-1">
                                                                <span class="svg-icon svg-icon-lg svg-icon-primary">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                                                                            <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </span>
                                                            <span class="navi-text text-muted text-hover-primary">jm@softplus.com</span>
                                                        </span>
                                            </a>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <!--end::Header-->

                            <!--begin::Separator-->
                                <div class="separator separator-dashed my-7"></div>
                            <!--end::Separator-->

                        </div>
                    <!--end::Content-->

                </div>
            <!-- end::User Panel-->

            <!--begin::Scrolltop-->
                <div id="kt_scrolltop" class="scrolltop">
                    <span class="svg-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                                <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                </div>
            <!--end::Scrolltop-->

            <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>

            <!--begin::Global Config(global config for global JS scripts)-->
                <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
            <!--end::Global Config-->

            <!--begin::Global Theme Bundle(used by all pages)-->
                <script src="{{'/dist/assets/plugins/global/plugins.bundle.js'}}"></script>
                <script src="{{'/dist/assets/plugins/custom/prismjs/prismjs.bundle.js'}}"></script>
                <script src="{{'/dist/assets/js/scripts.bundle.js'}}"></script>
            <!--end::Global Theme Bundle-->

            <!--begin::Page Vendors(used by this page)-->
            <!--end::Page Vendors-->

            <!--begin::Page Scripts(used by this page)-->
            <!--end::Page Scripts-->

        </body>
    <!--end::Body-->

</html>
