@php
    $logo = \App\Models\Utility::get_file('uploads/logo/');

    $company_logo = \App\Models\Utility::GetLogo();
    $settings = Utility::settings();
    $setting = App\Models\Utility::colorset();
    if ($setting['color']) {
        $color = $setting['color'];
    } else {
        $color = 'theme-3';
    }
@endphp

    <!DOCTYPE html>
<html lang="en" dir="{{ $setting['SITE_RTL'] == 'on' ? 'rtl' : '' }}">

<head>
    <title>{{ __('Neermata') }}</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="Dashboard Template Description"/>
    <meta name="keywords" content="Dashboard Template"/>
    <meta name="author" content="Rajodiya Infotech"/>

    <!-- Favicon icon -->
    <link rel="icon" href="{{ $logo . '/favicon.png' }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css') }}"/>
    <!-- font css -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}">

    <!-- vendor css -->
    @if ($setting['SITE_RTL'] == 'on')
        <link rel="stylesheet" href="{{ asset('assets/css/style-rtl.css') }}" id="main-style-link">
    @endif
    @if ($setting['cust_darklayout'] == 'on')
        <link rel="stylesheet" href="{{ asset('assets/css/style-dark.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link">
@endif
<!--    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/customizer.css') }}">

    <link rel="stylesheet" href="{{ asset('landing/css/landing.css') }}"/>
</head>

<body class="{{ $color }}">
<!-- [ Nav ] start -->
<nav class="navbar navbar-expand-md navbar-dark default">
    <div class="container">
        <a class="navbar-brand bg-transparent" href="#">
            {{-- <img  src="{{ $logo . '/' . ('logo-light.png') }}" alt="logo" /> --}}
            <img src="{{ $logo . (isset($logo_light) && !empty($logo_light) ? $logo_light : 'logo-light.png') }}"
                 alt="logo"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav align-items-center ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#layouts">Layouts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonial">Testimonial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pricing">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#faq">Faq</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light ms-2 me-1" href="{{ route('login') }}">Login</a>
                </li>

                @if (App\Models\Utility::getValByName('signup_button') == 'on')
                    <li class="nav-item">
                        <a class="btn btn-light ms-2 me-1" href="{{ route('register') }}">Register</a>
                    </li>

                @endif
            </ul>
        </div>
    </div>
</nav>
<!-- [ Nav ] start -->
<!-- [ Header ] start -->
<header id="home" class="bg-primary">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-sm-6 bannerTextWhite">
                <h1 class="text-white mb-sm-4 wow animate__fadeInLeft" data-wow-delay="0.2s">
                    Neermata
                </h1>
                <h2 class="text-white mb-sm-4 wow animate__fadeInLeft" data-wow-delay="0.4s">
                    {{ __('Online Store Builder') }}
                </h2>
                <p class="mb-sm-4 wow animate__fadeInLeft" data-wow-delay="0.6s">
                    Use these awesome forms to login or create new account in your
                    project for free.
                </p>
                <div class="my-4 wow animate__fadeInLeft" data-wow-delay="0.8s">
                    <a href="{{ route('login') }}" class="btn btn-light me-2"><i class="far fa-eye me-2"></i>Live
                        Demo</a>
                    <a href="https://codecanyon.net/item/storego-saas-online-store-builder/31116337?s_rank=11"
                       class="btn btn-outline-light" target="_blank"><i
                            class="fas fa-shopping-cart me-2"></i>Buy now</a>
                </div>
            </div>
            <div class="col-sm-5 align-items-center justify-content-between position-relative">
                <div class="business-image">
                    <img src="{{ asset('assets/images/front/header-mokeup.svg') }}" alt="Datta Able Admin Template"
                         class="img-fluid header-img wow animate__fadeInRight" data-wow-delay="0.2s"/>
                </div>
                <div class="business-video">
                    <a id="play-video" class="video-play-button" href="#">
                        <span></span>
                    </a>
                    <div id="video-overlay" class="video-overlay">
                        <a class="video-overlay-close">&times;</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- [ Header ] End -->
<!-- [ client ] Start -->
<section id="dashboard" class="theme-alt-bg dashboard-block">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-9 title">
                <h2><span>Happy clients use Dashboard</span></h2>
            </div>
        </div>
        <div class="row align-items-center justify-content-center mobile-screen">
            <div class="col-auto">
                <div class="wow animate__fadeInRight mobile-widget" data-wow-delay="0.2s">

                    <img src="{{ !empty($company_logo) ? $logo . $company_logo : $logo . 'logo-light.png' }}"
                         alt="">
                    {{-- @if ($setting['cust_darklayout'] == 'on')
                    <img src="{{ asset(Storage::url('uploads/logo/logo-light.png')) }}" alt=""
                        class="img-fluid" />
                @else
                    <img src="{{ asset(Storage::url('uploads/logo/logo-dark.png')) }}" alt=""
                        class="img-fluid" />
                @endif --}}
                </div>
            </div>
            <div class="col-auto">
                <div class="wow animate__fadeInRight mobile-widget" data-wow-delay="0.4s">
                    {{-- @if ($setting['cust_darklayout'] == 'on')
                    <img src="{{ asset(Storage::url('uploads/logo/logo-light.png')) }}" alt=""
                        class="img-fluid" />
                @else
                    <img src="{{ asset(Storage::url('uploads/logo/logo-dark.png')) }}" alt=""
                        class="img-fluid" />
                @endif --}}
                    <img src="{{ !empty($company_logo) ? $logo . $company_logo : $logo . 'logo-light.png' }}"
                         alt="">


                </div>
            </div>
            <div class="col-auto happyClientImg">
                <div class="wow animate__fadeInRight mobile-widget" data-wow-delay="0.6s">
                    {{-- @if ($setting['cust_darklayout'] == 'on')
                    <img src="{{ asset(Storage::url('uploads/logo/logo-light.png')) }}" alt=""
                        class="img-fluid" />
                @else
                    <img src="{{ asset(Storage::url('uploads/logo/logo-dark.png')) }}" alt=""
                        class="img-fluid" />
                @endif --}}
                    <img src="{{ !empty($company_logo) ? $logo . $company_logo : $logo . 'logo-light.png' }}"
                         alt="">


                </div>
            </div>
            <div class="col-auto happyClientImg">
                <div class="wow animate__fadeInRight mobile-widget" data-wow-delay="0.8s">
                    {{-- @if ($setting['cust_darklayout'] == 'on')
                    <img src="{{ asset(Storage::url('uploads/logo/logo-light.png')) }}" alt=""
                        class="img-fluid" />
                @else
                    <img src="{{ asset(Storage::url('uploads/logo/logo-dark.png')) }}" alt=""
                        class="img-fluid" />
                @endif --}}
                    <img src="{{ !empty($company_logo) ? $logo . $company_logo : $logo . 'logo-light.png' }}"
                         alt="">


                </div>
            </div>
            <div class="col-auto happyClientImg">
                <div class="wow animate__fadeInRight mobile-widget" data-wow-delay="1s">
                    {{-- @if ($setting['cust_darklayout'] == 'on')
                    <img src="{{ asset(Storage::url('uploads/logo/logo-light.png')) }}" alt=""
                        class="img-fluid" />
                @else
                    <img src="{{ asset(Storage::url('uploads/logo/logo-dark.png')) }}" alt=""
                        class="img-fluid" />
                @endif --}}
                    <img src="{{ !empty($company_logo) ? $logo . $company_logo : $logo . 'logo-light.png' }}"
                         alt="">


                </div>
            </div>
        </div>
        <img style="border-radius: 15px;" src="{{ asset('landing/images/storego-saas-pic-1.png') }}"
             alt="" class="img-fluid img-dashboard wow animate__fadeInUp mt-5" data-wow-delay="0.2s"/>
    </div>
</section>
<!-- [ client ] End -->
<!-- [ dashboard ] start -->
<section class="">
    <div class="container">
        <div class="row align-items-center justify-content-end mb-5">
            <div class="col-sm-4">
                <h1 class="mb-sm-4 f-w-600 wow animate__fadeInLeft" data-wow-delay="0.2s">
                    Neermata
                </h1>
                <h2 class="mb-sm-4 wow animate__fadeInLeft" data-wow-delay="0.4s">
                    Online Store Builder
                </h2>
                <p class="mb-sm-4 wow animate__fadeInLeft" data-wow-delay="0.6s">
                    Use these awesome forms to login or create new account in your
                    project for free.
                </p>
                <div class="my-4 wow animate__fadeInLeft" data-wow-delay="0.8s">
                    <a href="https://codecanyon.net/item/storego-saas-online-store-builder/31116337?s_rank=11"
                       class="btn btn-primary" target="_blank"><i class="fas fa-shopping-cart me-2"></i>Buy
                        now</a>
                </div>
            </div>
            <div class="col-sm-6">
                <img src="{{ asset('landing/images/storego-saas-pic-2.png') }}" alt="Datta Able Admin Template"
                     class="img-fluid header-img wow animate__fadeInRight" data-wow-delay="0.2s"/>
            </div>
        </div>
        <div class="row align-items-center justify-content-start">
            <div class="col-sm-6">
                <img src="{{ asset('assets/images/front/img-crm-dash-2.svg') }}" alt="Datta Able Admin Template"
                     class="img-fluid header-img wow animate__fadeInLeft" data-wow-delay="0.2s"/>
            </div>
            <div class="col-sm-4">
                <h1 class="mb-sm-4 f-w-600 wow animate__fadeInRight" data-wow-delay="0.2s">
                    Neermata
                </h1>
                <h2 class="mb-sm-4 wow animate__fadeInLeft" data-wow-delay="0.4s">
                    Online Store Builder
                </h2>
                <p class="mb-sm-4 wow animate__fadeInRight" data-wow-delay="0.6s">
                    Use these awesome forms to login or create new account in your
                    project for free.
                </p>
                <div class="my-4 wow animate__fadeInRight" data-wow-delay="0.8s">
                    <a href="https://codecanyon.net/item/storego-saas-online-store-builder/31116337?s_rank=11"
                       class="btn btn-primary" target="_blank"><i class="fas fa-shopping-cart me-2"></i>Buy
                        now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- [ dashboard ] End -->
<!-- [ feature ] start -->
<section id="feature" class="feature">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-9 title">
                <h2>
                    <span class="d-block mb-3">Features</span> Online Store Builder
                </h2>
                <p class="m-0">
                    Use these awesome forms to login or create new account in your
                    project for free.
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="card wow animate__fadeInUp" data-wow-delay="0.2s"
                     style="
                visibility: visible;
                animation-delay: 0.2s;
                animation-name: fadeInUp;
              ">
                    <div class="card-body">
                        <div class="theme-avtar bg-primary">
                            <i class="ti ti-home"></i>
                        </div>
                        <h6 class="text-muted mt-4">ABOUT</h6>
                        <h4 class="my-3 f-w-600">Feature</h4>
                        <p class="mb-0">
                            Use these awesome forms to login or create new account in your
                            project for free.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card wow animate__fadeInUp" data-wow-delay="0.4s"
                     style="
                visibility: visible;
                animation-delay: 0.2s;
                animation-name: fadeInUp;
              ">
                    <div class="card-body">
                        <div class="theme-avtar bg-success">
                            <i class="ti ti-user-plus"></i>
                        </div>
                        <h6 class="text-muted mt-4">ABOUT</h6>
                        <h4 class="my-3 f-w-600">Feature</h4>
                        <p class="mb-0">
                            Use these awesome forms to login or create new account in your
                            project for free.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card wow animate__fadeInUp" data-wow-delay="0.6s"
                     style="
                visibility: visible;
                animation-delay: 0.2s;
                animation-name: fadeInUp;
              ">
                    <div class="card-body">
                        <div class="theme-avtar bg-warning">
                            <i class="ti ti-users"></i>
                        </div>
                        <h6 class="text-muted mt-4">ABOUT</h6>
                        <h4 class="my-3 f-w-600">Feature</h4>
                        <p class="mb-0">
                            Use these awesome forms to login or create new account in your
                            project for free.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card wow animate__fadeInUp" data-wow-delay="0.8s"
                     style="
                visibility: visible;
                animation-delay: 0.2s;
                animation-name: fadeInUp;
              ">
                    <div class="card-body">
                        <div class="theme-avtar bg-danger">
                            <i class="ti ti-report-money"></i>
                        </div>
                        <h6 class="text-muted mt-4">ABOUT</h6>
                        <h4 class="my-3 f-w-600">Feature</h4>
                        <p class="mb-0">
                            Use these awesome forms to login or create new account in your
                            project for free.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center pt-sm-5 feature-mobile-screen">
            <button class="btn px-sm-5 btn-primary me-sm-3">Buy Now</button>
            <button class="btn px-sm-5 btn-outline-primary">
                View doucmentation
            </button>
        </div>
    </div>
</section>
<!-- [ feature ] End -->
<!-- [ dashboard ] start -->
<section class="">
    <div class="container">
        <div class="row align-items-center justify-content-end mb-5">
            <div class="col-sm-4">
                <h1 class="mb-sm-4 f-w-600 wow animate__fadeInLeft" data-wow-delay="0.2s">
                    Neermata
                </h1>
                <h2 class="mb-sm-4 wow animate__fadeInLeft" data-wow-delay="0.4s">
                    Online Store Builder
                </h2>
                <p class="mb-sm-4 wow animate__fadeInLeft" data-wow-delay="0.6s">
                    Use these awesome forms to login or create new account in your
                    project for free.
                </p>
                <div class="my-4 wow animate__fadeInLeft" data-wow-delay="0.8s">
                    <a href="https://codecanyon.net/item/storego-saas-online-store-builder/31116337?s_rank=11"
                       class="btn btn-primary" target="_blank"><i class="fas fa-shopping-cart me-2"></i>Buy
                        now</a>
                </div>
            </div>
            <div class="col-sm-6">
                <img src="{{ asset('assets/images/front/img-crm-dash-3.svg') }}" alt="Datta Able Admin Template"
                     class="img-fluid header-img wow animate__fadeInRight" data-wow-delay="0.2s"/>
            </div>
        </div>
        <div class="row align-items-center justify-content-start">
            <div class="col-sm-6">
                <img src="{{ asset('assets/images/front/img-crm-dash-4.svg') }}" alt="Datta Able Admin Template"
                     class="img-fluid header-img wow animate__fadeInLeft" data-wow-delay="0.2s"/>
            </div>
            <div class="col-sm-4">
                <h1 class="mb-sm-4 f-w-600 wow animate__fadeInRight" data-wow-delay="0.2s">
                    Neermata
                </h1>
                <h2 class="mb-sm-4 wow animate__fadeInLeft" data-wow-delay="0.4s">
                    Online Store Builder
                </h2>
                <p class="mb-sm-4 wow animate__fadeInRight" data-wow-delay="0.6s">
                    Use these awesome forms to login or create new account in your
                    project for free.
                </p>
                <div class="my-4 wow animate__fadeInRight" data-wow-delay="0.8s">
                    <a href="https://codecanyon.net/item/storego-saas-online-store-builder/31116337?s_rank=11"
                       class="btn btn-primary" target="_blank"><i class="fas fa-shopping-cart me-2"></i>Buy
                        now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- [ dashboard ] End -->
<!-- [ price ] start -->

<section id="price" class="price-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-9 title">
                <h2>
                    <span class="d-block mb-3">Price</span>Online Store Builder
                    system
                </h2>
                <p class="m-0">
                    Use these awesome forms to login or create new account in your
                    project for free.
                </p>
            </div>

        </div>

        <div class="packageCetegory p-1">
            <button class="btn monthlyBtn">Pay Month</button>
            <button class="btn sixMonthBtn">6 Month (save 25%)</button>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="card price-card price-1 wow animate__fadeInUp" data-wow-delay="0.2s"
                     style="
                  visibility: visible;
                  animation-delay: 0.2s;
                  animation-name: fadeInUp;
                ">
                    <div class="card-body">
                        <span class="price-badge bg-primary">Basic Package</span>
                        <span class="mb-4 f-w-600 p-price">৳<span id="basicPackage"></span><small
                                class="text-sm">BDT</small></span>
                        <p class="mb-0">
                            You have Free Unlimited Updates and <br/>
                            Premium Support on each package.
                        </p>
                        <ul class="list-unstyled my-5">
                            <li>
                                    <span class="theme-avtar">
                                        <i class="text-primary ti ti-circle-plus"></i></span>
                                2 team members
                            </li>
                            <li>
                                    <span class="theme-avtar">
                                        <i class="text-primary ti ti-circle-plus"></i></span>
                                20GB Cloud storage
                            </li>
                            <li>
                                    <span class="theme-avtar">
                                        <i class="text-primary ti ti-circle-plus"></i></span>
                                Integration help
                            </li>
                        </ul>
                        <div class="d-grid text-center">
                            <a href="{{url('dashboard')}}"
                               class="btn mb-3 btn-primary d-flex justify-content-center align-items-center mx-sm-5 text-white">
                                Try for free
                                <i class="ti ti-chevron-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card price-card price-2 bg-primary wow animate__fadeInUp" data-wow-delay="0.4s"
                     style="
                  visibility: visible;
                  animation-delay: 0.2s;
                  animation-name: fadeInUp;
                ">
                    <div class="card-body">
                        <span class="price-badge">Neermata Package</span>
                        <span class="mb-4 f-w-600 p-price">৳<span id="neermataPackage"></span><small
                                class="text-sm">BDT</small></span>
                        <p class="mb-0">
                            You have Free Unlimited Updates and <br/>
                            Premium Support on each package.
                        </p>
                        <ul class="list-unstyled my-5">
                            <li>
                                    <span class="theme-avtar">
                                        <i class="text-primary ti ti-circle-plus"></i></span>
                                2 team members
                            </li>
                            <li>
                                    <span class="theme-avtar">
                                        <i class="text-primary ti ti-circle-plus"></i></span>
                                20GB Cloud storage
                            </li>
                            <li>
                                    <span class="theme-avtar">
                                        <i class="text-primary ti ti-circle-plus"></i></span>
                                Integration help
                            </li>
                            <li>
                                    <span class="theme-avtar">
                                        <i class="text-primary ti ti-circle-plus"></i></span>
                                Sketch Files
                            </li>
                        </ul>
                        <div class="d-grid text-center">
                            <a href="{{url('dashboard')}}"
                               class="btn mb-3 btn-light d-flex justify-content-center align-items-center mx-sm-5">
                                Try for free
                                <i class="ti ti-chevron-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card price-card price-3 wow animate__fadeInUp" data-wow-delay="0.6s"
                     style="
                  visibility: visible;
                  animation-delay: 0.2s;
                  animation-name: fadeInUp;
                ">
                    <div class="card-body">
                        <span class="price-badge bg-primary">Advanced Package</span>
                        <span class="mb-4 f-w-600 p-price">৳<span id="advancePackage"></span><small
                                class="text-sm">BDT</small></span>
                        <p class="mb-0">
                            You have Free Unlimited Updates and <br/>
                            Premium Support on each package.
                        </p>
                        <ul class="list-unstyled my-5">
                            <li>
                                    <span class="theme-avtar">
                                        <i class="text-primary ti ti-circle-plus"></i></span>
                                2 team members
                            </li>
                            <li>
                                    <span class="theme-avtar">
                                        <i class="text-primary ti ti-circle-plus"></i></span>
                                20GB Cloud storage
                            </li>
                            <li>
                                    <span class="theme-avtar">
                                        <i class="text-primary ti ti-circle-plus"></i></span>
                                Integration help
                            </li>
                            <li>
                                    <span class="theme-avtar">
                                        <i class="text-primary ti ti-circle-plus"></i></span>
                                2 team members
                            </li>
                            <li>
                                    <span class="theme-avtar">
                                        <i class="text-primary ti ti-circle-plus"></i></span>
                                20GB Cloud storage
                            </li>
                            <li>
                                    <span class="theme-avtar">
                                        <i class="text-primary ti ti-circle-plus"></i></span>
                                Integration help
                            </li>
                        </ul>
                        <div class="d-grid text-center">
                            <a href="{{url('dashboard')}}"
                               class="btn mb-3 btn-primary d-flex justify-content-center align-items-center mx-sm-5">
                                Try for free
                                <i class="ti ti-chevron-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- [ price ] End -->
<!-- [ faq ] start -->
<section class="faq">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-9 title">
                <h2><span></span>Frequently Asked Questions</h2>
                <p class="m-0">
                    Use these awesome forms to login or create new account in your
                    project for free.
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-10 col-xxl-8">
                <div class="accordion accordion-flush" id="accordionExample">
                    <div class="accordion-item card">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="d-flex align-items-center">
                                        <i class="ti ti-info-circle text-primary"></i> How do I
                                        order?
                                    </span>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                             aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It
                                is shown by default, until the collapse plugin adds the
                                appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the
                                showing and hiding via CSS transitions. You can modify any
                                of this with custom CSS or overriding our default variables.
                                It's also worth noting that just about any HTML can go
                                within the <code>.accordion-body</code>, though the
                                transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item card">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="d-flex align-items-center">
                                        <i class="ti ti-info-circle text-primary"></i> How do I
                                        order?
                                    </span>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong>
                                It is hidden by default, until the collapse plugin adds the
                                appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the
                                showing and hiding via CSS transitions. You can modify any
                                of this with custom CSS or overriding our default variables.
                                It's also worth noting that just about any HTML can go
                                within the <code>.accordion-body</code>, though the
                                transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item card">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <span class="d-flex align-items-center">
                                        <i class="ti ti-info-circle text-primary"></i> How do I
                                        order?
                                    </span>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse"
                             aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It
                                is hidden by default, until the collapse plugin adds the
                                appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the
                                showing and hiding via CSS transitions. You can modify any
                                of this with custom CSS or overriding our default variables.
                                It's also worth noting that just about any HTML can go
                                within the <code>.accordion-body</code>, though the
                                transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- [ faq ] End -->
<!-- [ dashboard ] start -->
<section class="side-feature">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
                <h1 class="mb-sm-4 f-w-600 wow animate__fadeInLeft" data-wow-delay="0.2s">
                    Neermata
                </h1>
                <h2 class="mb-sm-4 wow animate__fadeInLeft" data-wow-delay="0.4s">
                    Online Store Builder
                </h2>
                <p class="mb-sm-4 wow animate__fadeInLeft" data-wow-delay="0.6s">
                    Use these awesome forms to login or create new account in your
                    project for free.
                </p>
                <div class="my-4 wow animate__fadeInLeft" data-wow-delay="0.8s">
                    <a href="https://codecanyon.net/item/storego-saas-online-store-builder/31116337?gclid=EAIaIQobChMI-4mW3qTk-AIVkZlmAh0ayA-pEAAYASAAEgLEuPD_BwE"
                       class="btn btn-primary" target="_blank"><i class="fas fa-shopping-cart me-2"></i>Buy
                        now</a>
                </div>
            </div>
            <div class="col-xl-9 col-lg-6 col-md-12 col-sm-12">
                <div class="row feature-img-row m-auto">
                    <div class="col-lg-3 col-sm-6">
                        <img src="{{ asset('landing/images/storego-saas-pic-3.png') }}"
                             class="img-fluid header-img wow animate__fadeInRight" data-wow-delay="0.2s"
                             alt="Admin"/>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <img src="{{ asset('landing/images/storego-saas-pic-4.png') }}"
                             class="img-fluid header-img wow animate__fadeInRight" data-wow-delay="0.4s"
                             alt="Admin"/>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <img src="{{ asset('landing/images/storego-saas-pic-5.png') }}"
                             class="img-fluid header-img wow animate__fadeInRight" data-wow-delay="0.6s"
                             alt="Admin"/>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <img src="{{ asset('landing/images/storego-saas-pic-7.png') }}"
                             class="img-fluid header-img wow animate__fadeInRight" data-wow-delay="0.8s"
                             alt="Admin"/>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <img src="{{ asset('landing/images/storego-saas-pic-9.png') }}"
                             class="img-fluid header-img wow animate__fadeInRight" data-wow-delay="0.3s"
                             alt="Admin"/>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <img src="{{ asset('landing/images/storego-saas-pic-8.png') }}"
                             class="img-fluid header-img wow animate__fadeInRight" data-wow-delay="0.5s"
                             alt="Admin"/>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <img src="{{ asset('landing/images/storego-saas-pic-6.png') }}"
                             class="img-fluid header-img wow animate__fadeInRight" data-wow-delay="0.7s"
                             alt="Admin"/>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <img src="{{ asset('landing/images/storego-saas-pic-10.png') }}"
                             class="img-fluid header-img wow animate__fadeInRight" data-wow-delay="0.9s"
                             alt="Admin"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- [ dashboard ] End -->
<!-- [ dashboard ] start -->
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 footerImg">

                <img
                    src="{{ $logo . '/' . (isset($company_logo) && !empty($company_logo) ? $company_logo : 'logo-dark.png') }}"
                    alt="logo"/>
                {{-- @if ($setting['cust_darklayout'] == 'on')

                    <img src="{{ asset(Storage::url('uploads/logo/logo-light.png')) }}" alt=""
                        class="img-fluid" />
                @else

                    <img src="{{ asset(Storage::url('uploads/logo/logo-dark.png')) }}" alt=""
                        class="img-fluid" />
                @endif --}}
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-end footerCopyRightText">
                <p class="text-body">{{ __('Copyright') }}
                    {{ Utility::getValByName('footer_text') ? Utility::getValByName('footer_text') : config('app.name', 'StoreGo') }}
                    {{ date('Y') }}</p>
            </div>
        </div>
    </div>
</section>
<!-- [ dashboard ] End -->
<button id="scrollButton"><i class="fas fa-arrow-up"></i></button>

<!-- [ whatsapp_plugin ] Start -->
<div class="whatsapp_integration" style="width: 60px;height:60px;position:fixed;bottom:5px;right:50px;">
    <a href="https://wa.me/+8801763155595?text=Hello">
        <img src="{{ asset('assets/img/whatsapp.png') }}" alt="whatsapp" style="width: 60px;height:60px;"/>
    </a>
</div>
<!-- [ whatsapp_plugin ] End -->

<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "105786432017671");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v18.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
{{-- <div class="adobeExpressIntregrate">
  <button id="edit-project-button">Edit project</button>
<img id="image-container" height="420" width="420" src="{{ asset('landing/images/storego-saas-pic-6.png') }}" />
</div> --}}


<!-- Required Js -->
<script src="{{asset('landing/js/ajax.js')}}"></script>
<script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/wow.min.js') }}"></script>

<script src="https://sdk.cc-embed.adobe.com/v2/CCEverywhere.js"></script>

{{-- <script type="text/javascript">

(async () => {
    const ccEverywhere = await window.CCEverywhere.initialize({
        clientId: 'd3027becf4054ac6bdc3224f4d32cab9',
        appName: 'appTest',
        appVersion: { major: 1, minor: 0 },
        platformCategory: 'web',
    });

    // projectId should be saved from an earlier call to createDesign
    var projectId = 'd3027becf4054ac6bdc3224f4d32cab9';
    var imageContainer = document.getElementById("image-container");
    const editButton = document.getElementById("edit-project-button");

    editButton.addEventListener('click', () => {
        const editDesignCallback = {
            onCancel: () => {},
            onPublish: (publishParams) => {
                const localData = { project: publishParams.projectId, image: publishParams.asset.data };
                imageContainer.src = localData.image;
                projectId = localData.project;
            },
            onError: (err) => {
                console.error('Error received is', err.toString());
            },
        };
        ccEverywhere.editDesign(
            {
                inputParams: { projectId: projectId },
                callbacks: editDesignCallback
            }
        );
    });
})();
</script> --}}


{{-- Adobe Express Intregrate End --}}


<script>
    // Start [ Menu hide/show on scroll ]
    let ost = 0;
    document.addEventListener("scroll", function () {
        let scrollTop = document.documentElement.scrollTop;
        if (scrollTop == 0) {
            document.querySelector(".navbar").classList.add("top-nav-collapse");
        } else if (scrollTop > ost) {
            document.querySelector(".navbar").classList.add("top-nav-collapse");
            document.querySelector(".navbar").classList.remove("default");
        } else {
            document.querySelector(".navbar").classList.add("default");
            document
                .querySelector(".navbar")
                .classList.remove("top-nav-collapse");
        }
        ost = scrollTop;
    });
    // End [ Menu hide/show on scroll ]
    var wow = new WOW({
        animateClass: "animate__animated", // animation css class (default is animated)
    });
    wow.init();
    var scrollSpy = new bootstrap.ScrollSpy(document.body, {
        target: "#navbar-example",
    });


</script>
<script>
    // Start [ Price Button Action Event ]
    $(document).ready(function () {
        $(".monthlyBtn").on("click", function () {
            const basicPackage = 5000;
            const neermataPackage = 10000;
            const advancePackage = 20000;
            $("#basicPackage").html(basicPackage);
            $("#neermataPackage").html(neermataPackage);
            $("#advancePackage").html(advancePackage);
            $(this).css({"background-color": "#0a2842", "color": "white"});
            $(".sixMonthBtn").css({"background-color": "#ffff", "color": "black"})
        });
        $(".monthlyBtn").show(function () {
            const basicPackage = 10000;
            const neermataPackage = 20000;
            const advancePackage = 30000;
            $("#basicPackage").html(basicPackage);
            $("#neermataPackage").html(neermataPackage);
            $("#advancePackage").html(advancePackage);
            $(this).css({"background-color": "#0a2842", "color": "white"});
            $(".sixMonthBtn").css({"background-color": "#ffff", "color": "black"})
        });

        $(".sixMonthBtn").on("click", function () {
            const basicPackage = 30000;
            const neermataPackage = 60000;
            const advancePackage = 100000;
            $("#basicPackage").html(basicPackage);
            $("#neermataPackage").html(neermataPackage);
            $("#advancePackage").html(advancePackage);
            $(this).css({"background-color": "#0a2842", "color": "white"});
            $(".monthlyBtn").css({"background-color": "#ffff", "color": "#0a2842"})

        });

        if (window.matchMedia('(max-width: 768px)').matches) {
            $(".sixMonthBtn").hide();
            $(".monthlyBtn").on("click", function () {
                $(".sixMonthBtn").show();
                $(".sixMonthBtn").css({"background-color": "#0a2842", "color": "white"});
                $(".monthlyBtn").hide();
            });
            $(".sixMonthBtn").on("click", function () {
                $(".monthlyBtn").show();
                $(".monthlyBtn").css({"background-color": "#0a2842", "color": "white"});
                $(".sixMonthBtn").hide();
            });
        }

        const navigation = document.querySelector('#navbarTogglerDemo01');
        let prevScrollPosY = window.pageYOffset;

        // Function to toggle navigation visibility based on scroll direction
        function toggleNavigation() {
            const currentScrollPosY = window.pageYOffset;
            if (prevScrollPosY > currentScrollPosY || prevScrollPosY < currentScrollPosY) {
                navigation.classList.remove('show')
            } else {
                navigation.classList.add('show')
                prevScrollPosY = currentScrollPosY;
            }

        }

        // Attach the function to the scroll event
        window.addEventListener('scroll', toggleNavigation);

    });
</script>
<script>
    const navbar = document.querySelector('#navbarTogglerDemo01');
    document.addEventListener("click", function (event) {
        if (!navbar.contains(event.target)) {
            navbar.classList.remove('show')
        }
    });

</script>

<script>
    // Get the button element
    let scrollButton = document.getElementById("scrollButton");
    // Show the button when the user scrolls down 20px from the top of the document
    window.onscroll = function () {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollButton.style.display = "block";
        } else {
            scrollButton.style.display = "none";
        }
    };
    // Scroll to the top of the page when the button is clicked
    scrollButton.addEventListener("click", function () {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera+

    });
</script>

<script>
    $('#play-video').on('click', function (e) {
        e.preventDefault();
        $('#video-overlay').addClass('open');
        $("#video-overlay").append('<iframe width="980" height="515" src="https://www.youtube.com/embed/DXzDXsXKjFk" frameborder="0" allowfullscreen></iframe>');
    });

    $('.video-overlay, .video-overlay-close').on('click', function (e) {
        e.preventDefault();
        close_video();
    });

    $(document).keyup(function (e) {
        if (e.keyCode === 27) {
            close_video();
        }
    });

    function close_video() {
        $('.video-overlay.open').removeClass('open').find('iframe').remove();
    };
</script>

@if ($settings['enable_cookie'] == 'on')
    @include('layouts.cookie_consent')
@endif

</body>

</html>
