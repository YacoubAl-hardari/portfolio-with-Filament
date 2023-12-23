<!doctype html>
<html  @if (app()->getLocale() === 'en') dir="ltr" @else dir="rtl" @endif   lang="ar" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="copyright" content="cloudszone">
    <meta name="robots" content="cloudszone">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="keywords" content="@yield('meta_keywords')">
    <meta name="title" content="@yield('meta_title')">
    <meta name="description" content="@yield('meta_description')">
    <meta name="author" content="Auth admin">

    <meta property="og:keywords" content="@yield('meta_keywords')">
    <meta property="og:title" content="@yield('meta_title')">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:author" content="Auth admin">

    <!-- MS Tile - for Microsoft apps-->
    <meta name="msapplication-TileImage" content="@yield('meta_image')">
    <!-- Site Name, Title, and Description to be displayed -->
    <meta property="og:site_name" content="كلاود زون">
    <meta property="og:title" content="@yield('meta_title')">
    <meta property="og:description" content="@yield('meta_description')">
    <!-- Image to display -->
    <meta property="og:image" content="@yield('meta_image')">
    <!-- No need to change anything here -->
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image/*">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <!-- Website to visit when clicked in fb or WhatsApp-->
    <meta property="og:url" content="https://yacoubalhaidari.com/">

    <title>@yield('title')</title>
                
        <!-- FAV AND ICONS   -->
        <link rel="shortcut icon" href="{{ asset('front/assets/images/favicon.ico')}}">
        <link rel="shortcut icon" href="{{ asset('front/assets/images/apple-icon.png')}}">
        <link rel="shortcut icon" sizes="72x72" href="{{ asset('front/assets/images/apple-icon-72x72.png')}}">
        <link rel="shortcut icon" sizes="114x114" href="{{ asset('front/assets/images/apple-icon-114x114.png')}}">
        
        <!-- Google Font-->
        <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('front/assets/icons/font-awesome-4.7.0/css/font-awesome.min.css')}}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('front/assets/plugins/css/bootstrap.min.css')}}">
        <!-- Animate CSS-->
        <link rel="stylesheet" href="{{ asset('front/assets/plugins/css/animate.css')}}">
        <!-- Owl Carousel CSS-->
        <link rel="stylesheet" href="{{ asset('front/assets/plugins/css/owl.css')}}">
        <!-- Fancybox-->
        <link rel="stylesheet" href="{{ asset('front/assets/plugins/css/jquery.fancybox.min.css')}}">
        <!-- Custom CSS-->
        <link rel="stylesheet" href="{{ asset('front/assets/css/styles.css')}}">
        <link rel="stylesheet" href="{{ asset('front/assets/css/responsive.css')}}">
        <!-- Colors -->
        {{-- <link rel="stylesheet" href="{{ asset('front/assets/css/colors/defauld.css')}}" title="defauld"> --}}

        
<style type="text/css">
    .color_switcher{
        position: fixed;
        top: 220px;
        @if (app()->getLocale() === 'en')  left:-200px; @else   right:-200px; @endif
        width: 200px;
        padding: 10px;
        background: #fff;
        z-index: 1000;
        transition: all 0.2s linear;
    border-radius: 10px;
    
    }
    .color_switcher.active{
        @if (app()->getLocale() === 'en')  left:0; @else   right:0; @endif
    
    }
    
    .color_switcher h3{
        color: var(--main-color);
        font-size: 20px;
        margin-bottom: 10px;
        border-bottom: 1px solid #3333;
        padding: 5px 0;
        text-align: center;
    border-radius: 10px;
    
    }
    
    .color_switcher  .switcher_btn{
    position: absolute;
    top: 0;
    @if (app()->getLocale() === 'en') right: -100px; @else  left: -100px; @endif
    color: var(--main-color);
    padding: 10px 20px ;
    cursor: pointer;
    border-radius: 10px;
    font-size: 39px;
    }
    
    .color_switcher  .switcher_btn i{
        animation: spinner 2s linear infinite;
    }
    
    @keyframes spinner{
        100%{
    transform: rotate(360deg);
        }
    
    }
    .color_switcher .them_color{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    
    .color_switcher .them_color .theme_btn{
        display: block;
        height: 50px;
        width: 50px;
        border-radius: 50%;
        margin: 5px;
        cursor: pointer;
    
    }
    
    .switcher_btn img {
        animation: zooom 1s infinite linear alternate;
    }
    @keyframes zooom{
        0%{
    transform:scale(1.1);
        }
        100%{
    transform:scale(1.02);
    
        }
    
    }
</style>
            
    </head>
    <body class="dark-vertion black-bg   @if (app()->getLocale() === 'en')  mh-ltr @else  mh-rtl @endif">
        
        <!-- Start Loader -->
        {{-- <div class="section-loader">
            <div class="loader">
                <div></div>
                <div></div> 
            </div>
        </div> --}}
        <!-- End Loader -->
        
        
        <!--
        ===================
           NAVIGATION
        ===================
        -->
        <header class="black-bg mh-header mh-fixed-nav nav-scroll mh-xs-mobile-nav" id="mh-header">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg mh-nav nav-btn">
                        <a class="navbar-brand" href="#">
                            @php $Setting = \App\Models\Settings::latest()->first(); @endphp
                            @if($Setting)
                            <img src="{{ asset('storage/'.$Setting->favicon) }}" alt="logo" width="75" class="img-fluid">
                            @else 
                            <img src="{{ asset('front/assets/images/fedalon_logo.png') }}" alt="" class="img-fluid">
                            @endif
                           
                            <!-- <h2>Maha</h2> -->
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon icon"></span>
                        </button>
                    
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#mh-home">{{ trans('ar.Home') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#mh-about">{{ trans('ar.about_me') }}</a>
                                </li>
                                <li class="nav-item"> 
                                   <a class="nav-link" href="#mh-skills">{{ trans('ar.skills') }}</a>
                                </li>                                
                                <li class="nav-item">
                                   <a class="nav-link" href="#mh-experience">{{ trans('ar.experience') }}</a>
                                </li>                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#mh-portfolio">{{ trans('ar.portfolio') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#mh-blog">{{ trans('ar.blog') }}</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="#mh-contact">{{ trans('ar.contact_me') }}</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>


        
    <!--
        ===================
            Pages 
        ===================
        -->
        {{ $slot }}






    <!--
        ===================
            FOOTER 
        ===================
        -->

        <div class="color_switcher text-center">
            <div class="switcher_btn">
          <img src="{{ asset('language.png') }}" width="75" alt="logo">
            </div>
            <h5 class="fs_15">{{ trans('ar.langs') }}</h5>
            <div class="them_color">
                @foreach (config('app.support_langs') as $lang => $data)
                <a href="{{ route('lang-swicher', $lang) }}" class="mx-3 theme_btn">
                    <x-dynamic-component :component="'flag-country-' . $data['icon']" style="width: 50px;" />
                 
                </a>
            @endforeach
    
            </div>
        </div>
             
        <footer class="mh-footer" id="mh-contact">
            <div class="map-image image-bg">
                <div class="container">
                    <div class="row section-separator">
                        <div class="col-sm-12 section-title">
                            <h3>{{ trans('ar.contact_me') }}</h3>
                        </div>
                        <div class="col-sm-12 mh-footer-address">
                            <div class="row">
                               @php $ContactUs = \App\Models\ContactUs::latest()->get() ; @endphp
                               @foreach($ContactUs as $ContactU)
                               <div class="col-sm-12 col-md-4">
                                   <div class="mh-address-footer-item dark-bg shadow-1">
                                       <div class="each-icon">
                                          <img src="{{ asset('storage/'.$ContactU->image) }}" alt="{{ $ContactU->name }}" width="50">
                                       </div>
                                       <div class="each-info">
                                           <h4>{{ $ContactU->name }}</h4>
                                           @if($ContactU->data)
                                           @foreach($ContactU->data as $value)
                                           <b>
                                             {{ $value['name'] }} <br>
                                           </b>
                                            
                                           @endforeach
                                            
                                           @endif
                                       </div>
                                   </div>
                               </div>
                                
                               @endforeach
                             
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <form id="contactForm" class="single-form quate-form wow fadeInUp" data-toggle="validator">
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <input name="name" class="contact-name form-control" id="name" type="text" placeholder="{{ trans('ar.name') }}" required>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <input name="name" class="contact-email form-control" id="L_name" type="text" placeholder="{{ trans('ar.lastName') }}" required>
                                    </div>
                                    <div class="col-sm-12">
                                        <input name="name" class="contact-subject form-control" id="email" type="email" placeholder="{{ trans('ar.email') }}" required>
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea class="contact-message" id="message" rows="6" placeholder="{{ trans('ar.Message') }}" required></textarea>
                                    </div>
                                    <!-- Subject Button -->
                                    <div class="btn-form col-sm-12">
                                        <button type="submit" class="btn btn-fill btn-block" id="form-submit">{{ trans('ar.sendMessage') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mh-map">
                                <div id="mh-map" class="shadow-1"></div>
                            </div>
                        </div>
                        <div class="col-sm-12 mh-copyright">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="text-right text-xs-center">
                                        <p>جميع الحقوق محفوظة Yacoub Al-haidari @ 2023</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    
                                    @php $SoicalMedais = \App\Models\SoicalMedai::latest()->get() ; @endphp
                                    <ul class="social-icon">
                                        @foreach($SoicalMedais as $social_link)
                                        @if ($social_link->social_links)
                                        @foreach($social_link->social_links as $social_link)
                                        <li><a class="mx-1" href="{{ $social_link['link'] }}"><img src="{{ asset('storage/'.$social_link['icon']) }}" alt="logo social medai"></a></li>
                                            
                                        @endforeach
                                        @endif
                                        @endforeach
                                            
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>   


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <!-- jQuery -->
    <script src="{{ asset('front/assets/plugins/js/jquery.min.js') }}"></script>
    <!-- popper -->
    <script src="{{ asset('front/assets/plugins/js/popper.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('front/assets/plugins/js/bootstrap.min.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('front/assets/plugins/js/owl.carousel.js') }}"></script>
    <!-- validator -->
    <script src="{{ asset('front/assets/plugins/js/validator.min.js') }}"></script>
    <!-- wow -->
    <script src="{{ asset('front/assets/plugins/js/wow.min.js') }}"></script>
    <!-- mixin js-->
    <script src="{{ asset('front/assets/plugins/js/jquery.mixitup.min.js') }}"></script>
    <!-- circle progress-->
    <script src="{{ asset('front/assets/plugins/js/circle-progress.js') }}"></script>
    <!-- jquery nav -->
    <script src="{{ asset('front/assets/plugins/js/jquery.nav.js') }}"></script>
    <!-- Fancybox js-->
    <script src="{{ asset('front/assets/plugins/js/jquery.fancybox.min.js') }}"></script>
    <!-- isotope js-->
    <script src="{{ asset('front/assets/plugins/js/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('front/assets/plugins/js/packery-mode.pkgd.js') }}"></script>

    <script src="{{ asset('front/assets/js/custom-scripts.js') }}"></script>
    <script>
        
       document.querySelector('.switcher_btn').onclick = ()=>{
    document.querySelector('.color_switcher').classList.toggle('active');
       }
    </script>

    
    
</body>

</html>