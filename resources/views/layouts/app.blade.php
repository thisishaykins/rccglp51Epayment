<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ getenv('APP_NAME') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('public/assets/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }} " />
    <link rel="stylesheet" href="{{ asset('public/assets/css/main.css') }} " />
    <noscript><link rel="stylesheet" href="{{ asset('public/assets/css/noscript.css') }}" /></noscript>
    <link href="{{ asset('public/assets/css/app.css') }}" rel="stylesheet">
</head>
<body class="is-preload">
    <div class="rccglp51-space-worship" style="
            background: url({{ asset('public/images/rccg-lp51-banner.jpg') }});"
        ></div>
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="inner">

                <!-- Logo -->
                    <a href="{{ config('app.url') }}" class="logo">
                        <span class="symbol">
                            <img src="{{ asset('public/images/rccg-logo.png') }}" alt="" />
                        </span>
                        <span class="title" title="RCCG Lagos Province 51">RCCG Lagos Province 51</span>
                    </a>

                <!-- Nav -->
                    <nav>
                        <ul>
                            <li><a href="#menu">Menu</a></li>
                        </ul>
                    </nav>

            </div>
        </header>

    <!-- Menu -->
        <nav id="menu">
            <h2>Menu</h2>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/pages/about">About</a></li>
                <li><a href="/pages/instructions">Payment Instruction</a></li>
                <li><a href="/pages/faqs">FAQS</a></li>
                <li><a href="/pages/contact">Contact</a></li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><!--<i class="icon style1 fa-user"></i>--> {{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"><!--<i class="icon style1 fa-user"></i>--> {{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li>
                        <a href="#">
                            Welcome, {{ Auth::user()->first_name }} <span class="caret"></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </nav>


        <!-- <main> -->
            @yield('content')
        <!-- </main> -->
    
    <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <section>
                    <h2>Get in touch</h2>
                    <form method="post" action="#">
                        @csrf
                        <div class="fields">
                            <div class="field half">
                                <input type="text" name="name" id="name" placeholder="Name" />
                            </div>
                            <div class="field half">
                                <input type="email" name="email" id="email" placeholder="Email" />
                            </div>
                            <div class="field">
                                <textarea name="message" id="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" disabled value="Send" class="primary" /></li>
                        </ul>
                    </form>
                </section>
                <section>
                    <h2>Follow</h2>
                    <ul class="icons">
                        <li><a href="https://www.facebook.com/rccglp51" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
                        <li><a href="https://www.twitter.com/rccglp51" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="https://www.instagram.com/rccglp51" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="https://www.youtube.com/rccglp51" class="icon brands style2 fa-youtube"><span class="label">YouTube</span></a></li>
                        <!-- <li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li> -->
                        <li><a href="mailto:epayment@rccglp51.org" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
                    </ul>
                </section>
                <ul class="copyright">
                    <li>&copy; {{ date('Y') }} - {{ env('APP_NAME') }}. All rights reserved</li><li>Design & Developed: <a href="#">RCCGLP51 Media & Technical Dept.</a></li>
                </ul>
            </div>
        </footer>

    </div>

<!-- Scripts -->
    <script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/browser.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/util.js') }}"></script>
    <script src="{{ asset('public/assets/js/main.js') }}"></script>
</body>
</html>
