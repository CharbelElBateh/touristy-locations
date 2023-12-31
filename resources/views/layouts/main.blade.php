<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/fav-icon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" href="{{ asset('images/fav-icon/favicon-32x32.png') }}" sizes="32x32">
        <link rel="icon" type="image/png" href="{{ asset('images/fav-icon/favicon-16x16.png') }}" sizes="16x16">

            
    </head>
    <body>
        <div class="boxed_wrapper">
            <div class="top-bar">
                <div class="container">
                    <div class="clearfix">

                        <ul class="float_left top-bar-info">
                                <li><i class="icon-phone-call"></i>Phone: (123) 0200 12345</li>
                                <li><i class="icon-e-mail-envelope"></i>Supportus@Touristy.com</li>
                            </ul>
                        <div class="right-column float_right">
                            <div id="polyglotLanguageSwitcher" class="">
                                <form action="#">
                                    <select id="polyglot-language-options">
                                        <option id="en" value="en" selected>Eng</option>
                                        <option id="fr" value="fr">Fre</option>
                                        <option id="de" value="de">Ger</option>
                                        <option id="it" value="it">Ita</option>
                                        <option id="es" value="es">Spa</option>
                                    </select>
                                </form>
                            </div>
                            <ul class="social list_inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-feed"></i></a></li>
                            </ul>
                            <button class="thm-btn donate-box-btn">donate now</button>

                        </div>
                            
                        
                    </div>
                        

                </div>
            </div>

            <section class="theme_menu stricky">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="main-logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('images/logo/logo.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-9 menu-column">
                            <nav class="menuzord" id="main_menu">
                            <ul class="menuzord-menu">
                                    <li>
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>

                                    <li>
                                        <a href="#">Admin</a>
                                        <ul class="dropdown">
                                            @if (Route::has('login'))
                                                @auth
                                                    <li><a href="{{ url('/admin') }}">Home</a></li>
                                                    @else
                                                        <li><a href="{{ route('login') }}">Login</a></li>
                                                    @if (Route::has('register'))
                                                        <li><a href="{{ route('register') }}">Register</a></li>
                                                    @endif
                                                @endauth
                                            @endif
                                        </ul>
                                    </li>
                                </ul>
                            </nav> 
                        </div>
                        <div class="right-column">
                            <div class="right-area">
                                <div class="nav_side_content">
                                    <div class="search_option">
                                        <button class="search tran3s dropdown-toggle color1_bg" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        <form action="#" class="dropdown-menu" aria-labelledby="searchDropdown">
                                            <input type="text" placeholder="Search...">
                                            <button><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </form>
                                </div>
                            </div>
                            </div>   
                        </div>


                    </div>
                            

                </div>
            </section>

    

            <!--Start rev slider wrapper-->     
            <section class="rev_slider_wrapper">
                <div id="slider1" class="rev_slider"  data-version="5.0">
                    @yield('slider1') 
                </div>
            </section>

            <!--End rev slider wrapper--> 
            <section class="service sec-padd3">
                <div class="container">
                    <div class="section-title center">
                        <h2>We provide the<span class="thm-color"> most breathtaking and stunning</span> locations around Lebanon</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-x-12">
                            <div class="service-item center">
                                <div class="icon-box">
                                    <span class="icon-can"></span>
                                </div>
                                <h4>Sustainability</h4>
                                <p>We really focus on sustainability and the environment, we make sure that all locations have a recycling program.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-x-12">
                            <div class="service-item center">
                                <div class="icon-box">
                                    <span class="icon-tool"></span>
                                </div>
                                <h4>Green Energy</h4>
                                <p>All power consumed by us & by the mentioned locations is proudly 100% green and renewable.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-x-12">
                            <div class="service-item center">
                                <div class="icon-box">
                                    <span class="icon-nature-1"></span>
                                </div>
                                <h4>Green Water</h4>
                                <p>Water used to care for the </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-x-12">
                            <div class="service-item center">
                                <div class="icon-box">
                                    <span class="icon-deer"></span>
                                </div>
                                <h4>Save Animals</h4>
                                <p>Praising pain was born & I will give  you a complete ac of the all systems, expound the actual great.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="fact-counter style-2 sec-padd" style="background-image: url(images/background/view1.jpg);">
                <div class="container">
                    <div class="section-title center">
                        <h2>Some Interesting Numbers</h2>
                    </div>
                    <div class="row clearfix">
                        <div class="counter-outer clearfix">
                            <!--Column-->
                            <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="0ms">
                                <div class="item">
                                    <div class="icon"><i class="icon-heart2"></i></div>
                                    <div class="count-outer"><span class="count-text" data-speed="3000" data-stop="{{ $locations->count() }}">0</span>+</div>
                                    <h4 class="counter-title">Locations</h4>
                                </div>
                                    
                            </article>
                            
                            <!--Column-->
                            <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="0ms">
                                <div class="item">
                                    <div class="icon"><i class="icon-money"></i></div>
                                    <div class="count-outer">$<span class="count-text" data-speed="3000" data-stop="34500">0</span></div>
                                    <h4 class="counter-title">Funds Collected</h4>
                                </div>
                            </article>
                            
                            <!--Column-->
                            <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="0ms">
                                <div class="item">
                                    <div class="icon"><i class="icon-people3"></i></div>
                                    <div class="count-outer"><span class="count-text" data-speed="3000" data-stop="{{ $admins->count() }}">0</span></div>
                                    <h4 class="counter-title">Admins Involved</h4>
                                </div>
                            </article>
                            
                            <!--Column-->
                            <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="0ms">
                                <div class="item">
                                    <div class="icon"><i class="icon-animals"></i></div>
                                    <div class="count-outer"><span class="count-text" data-speed="3000" data-stop="485">0</span>+</div>
                                    <h4 class="counter-title">Animals Preserved</h4>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <section class="gallery sec-padd3 style-2" style="background-image: url(images/background/view2.jpg); background-size: cover;">
                <div class="container">
                    <div class="section-title">
                        <h2 style="color: black;">Our Featured Locations</h2>
                    </div>
                    @yield('show1')
                </div>
            </section>


            <section class="urgent-cause2 sec-padd">
                <div class="container">
                    <div class="section-title">
                        <h2>More Locations</h2>
                        <p>Check back often for more!</p>
                    </div>
                    <div class="cause-carousel">
                        @yield('slider2')
                    </div>
                </div>
            </section>

            <div class="border-bottom"></div>

            <section class="call-out">
                <div class="container">
                    <div class="float_left">
                        <h4>Join Our Mission to Improve a Child's Feature, Pet’s Life and Our Planet.</h4>
                    </div>
                    <div class="float_right">
                        <a href="#" class="thm-btn style-3">Get Involeved</a>
                    </div>
                            
                </div>
            </section>

            <footer class="main-footer">
                
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="container">
                        <div class="row">
                            <!--Big Column-->
                            <div class="big-column col-md-6 col-sm-12 col-xs-12">
                                <div class="row clearfix">
                                    
                                    <!--Footer Column-->
                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        <div class="footer-widget about-column">
                                            
                                            <div class="text"><p>When you give to us you know your donation is making a difference. </p> </div>
                                            <ul class="contact-info">
                                                <li><span class="icon-signs"></span>22/121 Apple Street, New York, <br>NY 10012, USA</li>
                                                <li><span class="icon-phone-call"></span> Phone: +123-456-7890</li>
                                                <li><span class="icon-note"></span>Supportus@touristy.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Big Column--> 
                            <div class="big-column col-md-6 col-sm-12 col-xs-12">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-6 col-xs-12"></div>
                                    
                                    <!--Footer Column-->
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="footer-widget contact-column">
                                            <div class="section-title">
                                                <h4>Subscribe To Us</h4>
                                            </div>
                                            <h5>Subscribe to our newsletter!</h5>
                                            <form action="#">
                                                <input type="email" placeholder="Email address....">
                                                <button type="submit"><i class="fa fa-paper-plane"></i></button>
                                            </form>
                                            <p>We don’t do mail to spam & your mail <br>id is confidential.</p>
                                            
                                            <ul class="social-icon">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-feed"></i></a></li>
                                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            
                
            </footer>

            <!--Footer Bottom-->
            <section class="footer-bottom">
                <div class="container">
                    <div class="pull-left copy-text">
                        <p><a href="#">Copyrights © {{ date('Y') }}</a> All Rights Reserved. Powered by <a href="#">Touristy.</a></p>
                        
                    </div><!-- /.pull-right -->
                    <div class="pull-right get-text">
                        <a href="#">Join Us Now!</a>
                    </div><!-- /.pull-left -->
                </div><!-- /.container -->
            </section>

            <!-- Scroll Top  -->
            <button class="scroll-top tran3s color2_bg"><span class="fa fa-angle-up"></span></button>
            <!-- preloader  -->
            <div class="preloader"></div>
            <div id="donate-popup" class="donate-popup">
            <div class="close-donate theme-btn"><span class="fa fa-close"></span></div>
            <div class="popup-inner">

            <div class="container">
                <div class="donate-form-area">
                    <div class="section-title center">
                        <h2>Donation Information</h2>
                    </div>

                    <h4>How much would you like to donate:</h4>

                    <form  action="#" class="donate-form default-form">
                        <ul class="chicklet-list clearfix">
                            <li>
                                <input type="radio" id="donate-amount-1" name="donate-amount" />
                                <label for="donate-amount-1" data-amount="1000" >$1000</label>
                            </li>
                            <li>
                                <input type="radio" id="donate-amount-2" name="donate-amount" checked="checked" />
                                <label for="donate-amount-2" data-amount="2000">$2000</label>
                            </li>
                            <li>
                                <input type="radio" id="donate-amount-3" name="donate-amount" />
                                <label for="donate-amount-3" data-amount="3000">$3000</label>
                            </li>
                            <li>
                                <input type="radio" id="donate-amount-4" name="donate-amount" />
                                <label for="donate-amount-4" data-amount="4000">$4000</label>
                            </li>
                            <li>
                                <input type="radio" id="donate-amount-5" name="donate-amount" />
                                <label for="donate-amount-5" data-amount="5000">$5000</label>
                            </li>
                            <li class="other-amount">

                                <div class="input-container" data-message="Every dollar you donate helps end hunger.">
                                    <span>Or</span><input type="text" id="other-amount" placeholder="Other Amount"  />
                                </div>
                            </li>
                        </ul>

                        <h3>Donor Information</h3>

                        <div class="form-bg">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    
                                    <div class="form-group">
                                        <p>Your Name*</p>
                                        <input type="text" name="fname" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <p>Email*</p>
                                        <input type="text" name="fname" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <p>Address*</p>
                                        <input type="text" name="fname" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <p>Phn Num*</p>
                                        <input type="text" name="fname" placeholder="">
                                    </div>
                                </div>  

                            </div>
                        </div>

                        <ul class="payment-option">
                            <li>
                                <h4>Choose your payment method:</h4>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <input name="pay-us" type="checkbox">
                                        <span>Paypal</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                            <div class="checkbox">
                                    <label>
                                        <input name="pay-us" type="checkbox">
                                        <span>Offline Donation</span>
                                    </label>
                                </div> 
                            </li>
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <input name="pay-us" type="checkbox">
                                        <span>Credit Card</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <input name="pay-us" type="checkbox">
                                        <span>Debit Card</span>
                                    </label>
                                </div>
                            </li>
                        </ul>

                        <div class="center"><button class="thm-btn" type="submit">Donate Now</button></div>
                            
                    
                    </form>
                </div>
            </div>
            
        </div>
    </div>

        <!-- jQuery -->
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/menu.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
        <script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
        <script src="{{ asset('js/imagezoom.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/jquery.polyglot.language.switcher.js') }}"></script>
        <script src="{{ asset('js/SmoothScroll.js') }}"></script>
        <script src="{{ asset('js/jquery.appear.js') }}"></script>
        <script src="{{ asset('js/jquery.countTo.js') }}"></script>
        <script src="{{ asset('js/validation.js') }}"></script>
        <script src="{{ asset('js/wow.js') }}"></script>
        <script src="{{ asset('js/jquery.fitvids.js') }}"></script>
        <script src="{{ asset('js/nouislider.js') }}"></script>
        <script src="{{ asset('js/isotope.js') }}"></script>
        <script src="{{ asset('js/pie-chart.js') }}"></script>



        <!-- revolution slider js -->
        <script src="{{ asset('js/rev-slider/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('js/rev-slider/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('js/rev-slider/revolution.extension.actions.min.js') }}"></script>
        <script src="{{ asset('js/rev-slider/revolution.extension.carousel.min.js') }}"></script>
        <script src="{{ asset('js/rev-slider/revolution.extension.kenburn.min.js') }}"></script>
        <script src="{{ asset('js/rev-slider/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('js/rev-slider/revolution.extension.migration.min.js') }}"></script>
        <script src="{{ asset('js/rev-slider/revolution.extension.navigation.min.js') }}"></script>
        <script src="{{ asset('js/rev-slider/revolution.extension.parallax.min.js') }}"></script>
        <script src="{{ asset('js/rev-slider/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('js/rev-slider/revolution.extension.video.min.js') }}"></script>


        <script src="{{ asset('js/custom.js') }}"></script>

        </div>
    </body>
</html>
