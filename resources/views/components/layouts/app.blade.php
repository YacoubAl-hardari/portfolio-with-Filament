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
        .color_switcher {
            position: fixed;
            top: 220px;
            @if (app()->getLocale()==='en') left:-200px;
            @else right:-200px;
            @endif width: 200px;
            padding: 10px;
            background: #fff;
            z-index: 1000;
            transition: all 0.2s linear;
            border-radius: 10px;

        }

        .color_switcher.active {
            @if (app()->getLocale()==='en') left:0;
            @else right:0;
            @endif
        }

        .color_switcher h3 {
            color:#3333;
            font-size: 20px;
            margin-bottom: 10px;
            border-bottom: 1px solid #3333;
            padding: 5px 0;
            text-align: center;
            border-radius: 10px;

        }

        .color_switcher .switcher_btn {
            position: absolute;
            top: 0;
            @if (app()->getLocale()==='en') right: -100px;
            @else left: -100px;
            @endif color:#3333;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 10px;
            font-size: 39px;
        }

        .color_switcher .switcher_btn i {
            animation: spinner 2s linear infinite;
        }

        @keyframes spinner {
            100% {
                transform: rotate(360deg);
            }

        }

        .color_switcher .them_color {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .color_switcher .them_color .theme_btn {
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

        @keyframes zooom {
            0% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1.02);

            }

        }

        h3,
        .h3 {
            font-size: 1rem;
        }

        @media only screen and (max-width: 1000px) {

            h1,
            h2,
            h3 {
                font-size: 1rem !important;
                margin: 5px 0;
            }

            h1 {
                font-size: 26px !important;
            }
        }

        h1,
        .h1 {
            font-size: 1rem;
            margin: 5px 0;
        }

        @media only screen and (max-width: 768px) {

            h1,
            h2,
            h3,
            .h1 {
                font-size: 1rem !important;
                margin: 5px 0;
            }

            h1 {
                font-size: 26px !important;
            }
        }

        @media only screen and (max-width: 480px) {
            h1 {
                font-size: 26px !important;
            }
        }



                    /* Hide the default checkbox */
            .container-colors input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
            }

            .container-colors {
            display: block;
            position: relative;
            cursor: pointer;
            font-size: 1.5rem;
            user-select: none;
            }

            /* Create a custom checkbox */
            .checkmark {
            --clr: #0B6E4F;
            position: relative;
            top: 0;
            left: 0;
            height: 1.3em;
            width: 1.3em;
            background-color: #ccc;
            border-radius: 50%;
            transition: 300ms;
            }

            /* When the checkbox is checked, add a blue background */
            .container-colors input:checked ~ .checkmark {
            background-color: var(--clr);
            border-radius: .5rem;
            animation: pulse 500ms ease-in-out;
            }

            /* Create the checkmark/indicator (hidden when not checked) */
            .checkmark:after {
            content: "";
            position: absolute;
            display: none;
            }

            /* Show the checkmark when checked */
            .container-colors input:checked ~ .checkmark:after {
            display: block;
            }

            /* Style the checkmark/indicator */
            .container-colors .checkmark:after {
            left: 0.45em;
            top: 0.25em;
            width: 0.25em;
            height: 0.5em;
            border: solid #E0E0E2;
            border-width: 0 0.15em 0.15em 0;
            transform: rotate(45deg);
            }

            @keyframes pulse {
            0% {
                box-shadow: 0 0 0 #0B6E4F90;
                rotate: 20deg;
            }

            50% {
                rotate: -20deg;
            }

            75% {
                box-shadow: 0 0 0 10px #0B6E4F60;
            }

            100% {
                box-shadow: 0 0 0 13px #0B6E4F30;
                rotate: 0;
            }
            }

    </style>
            
    </head>
    <body class="black-bg   @if (app()->getLocale() === 'en')  mh-ltr @else  mh-rtl @endif">
        
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
                                    <a class="nav-link" href="{{ route('home') }}#mh-home">{{ trans('ar.Home') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}#mh-about">{{ trans('ar.about_me') }}</a>
                                </li>
                                <li class="nav-item"> 
                                   <a class="nav-link" href="{{ route('home') }}#mh-skills">{{ trans('ar.skills') }}</a>
                                </li>                                
                                <li class="nav-item">
                                   <a class="nav-link" href="{{ route('home') }}#mh-experience">{{ trans('ar.experience') }}</a>
                                </li>                                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}#mh-portfolio">{{ trans('ar.portfolio') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}#mh-blog">{{ trans('ar.blog') }}</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="{{ route('home') }}#mh-contact">{{ trans('ar.contact_me') }}</a>
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
          <img src="{{ asset('language.png') }}" width="50" alt="logo">
            </div>
            <h5 class="fs_15" style="color:#000">{{ trans('ar.langs') }}</h5>
            <div class="them_color">
                @foreach (config('app.support_langs') as $lang => $data)
                <a href="{{ route('lang-swicher', $lang) }}" class="mx-3 theme_btn">
                    <x-dynamic-component :component="'flag-country-' . $data['icon']" style="width: 50px;" />
                 
                </a>
            @endforeach
    
         
            <label class="container-colors" title="Dark || Light">
             
                <input checked="checked" type="checkbox" id="Dark-or-light">
                <div class="checkmark"></div>
              </label>
            </div>
        </div>
             
      


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
        
    
        var color_switcher = document.querySelector('.color_switcher');

        // Add a scroll event listener
        window.addEventListener('scroll', function() {
            // Check if the scroll position is greater than 400px
            if (window.scrollY > 400) {
                // If true, hide the color_switcher
                color_switcher.style.display = 'none';
            } else {
                // If false, show the color_switcher
                color_switcher.style.display = 'block'; // or 'flex' or any other display value based on your layout
            }
        });
        document.querySelector('.switcher_btn').onclick = () => {
            document.querySelector('.color_switcher').classList.toggle('active');
        }




        document.addEventListener('DOMContentLoaded', function () {
    const checkbox = document.getElementById('Dark-or-light');
    const body = document.body;
    const darkModeKey = 'darkMode';

    // Function to enable dark mode
    function enableDarkMode() {
      body.classList.add('dark-vertion');
      body.classList.remove('white-vertion');
      localStorage.setItem(darkModeKey, 'enabled');
    }

    // Function to enable light mode
    function enableLightMode() {
      body.classList.remove('dark-vertion');
      body.classList.add('white-vertion');
      localStorage.setItem(darkModeKey, 'disabled');
    }

    // Function to check saved mode from localStorage
    function checkSavedMode() {
      const savedMode = localStorage.getItem(darkModeKey);
      if (savedMode === 'enabled') {
        enableDarkMode();
        checkbox.checked = true;
      } else {
        enableLightMode();
        checkbox.checked = false;
      }
    }

    // Event listener for checkbox change
    checkbox.addEventListener('change', function () {
      if (checkbox.checked) {
        enableDarkMode(); // Enable dark mode
      } else {
        enableLightMode(); // Enable light mode
      }
    });

    // Check saved mode on page load
    checkSavedMode();
  });;
        
    </script>

    
    
</body>

</html>