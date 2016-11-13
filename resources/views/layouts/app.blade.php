<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SheetPub - @yield('title')</title>
        <link rel="stylesheet" href="{{{ asset('css/fonts.css') }}}">
        <link rel="stylesheet" href="{{{ asset('css/animate.css') }}}">
        <link rel="stylesheet" href="{{{ asset('css/menu.css') }}}">
        <link rel="stylesheet" href="{{{ asset('css/font-awesome.min.css') }}}">
        @yield('custom-css')
        <script src ="{{{ asset('js/jquery-3.1.1.min.js') }}}" type="text/javascript"></script>
        <script src="{{{ asset('js/script.js') }}}" ></script>
        @yield('custom-js')
    </head>
    <body>
    @yield('header-custom')
    <!-- Menu -->
    <nav>
        <div id="header">
            <!-- Responsive Menu 1024 -->
            <div class="menu_respon">
                <div id="h-menu">
                    <h1>
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    </h1>
                    <ul>
                        @if (Session::has('userId'))
                            <li><a href="{{ url('/feed') }}">FEED</a></li>
                            <li><a href="{{ url('/category') }}">CATEGORY</a></li>
                            <li><a href="{{ url('/trending') }}">TRENDING</a></li>
                            <li><a href="{{ url('/content/new') }}">NEW POST</a></li>
                            <li><a href="{{ url('/profile') }}">PROFILE</a></li>
                            <li><a href="{{ url('/logout') }}">LOGOUT</a></li>
                        @else
                            <li><a href="{{ url('/login') }}">SIGN IN</a></li>
                            <li><a href="{{ url('/register') }}">SIGN UP</a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <!-- End Responsive -->
            <!-- Main Menu -->
            <!-- Menu Left -->
            @if (Session::has('userId'))
            <div id="menu">
                <ul>
                    <li><a href="{{ url('/feed') }}">FEED</a></li>
                    <li>
                        <a href="#" class="category_menu">CATEGORY
                            <div class="arrow-down">
                            </div>
                            <div class="arrow-up">
                            </div>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ url('/category/1') }}">Physics</a>
                            </li>
                            <li>
                                <a href="{{ url('/category/2') }}">Chemistry</a>
                            </li>
                            <li>
                                <a href="{{ url('/category/3') }}">Biology</a>
                            </li>
                            <li>
                                <a href="{{ url('/category/4') }}">Mathematics</a>
                            </li>
                            <li>
                                <a href="{{ url('/category/5') }}">English</a>
                            </li>
                            <li>
                                <a href="{{ url('/category/6') }}">Thai</a>
                            </li>
                            <li>
                                <a href="{{ url('/category/7') }}">Social studies</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/trending') }}">TRENDING</a></li>
                </ul>
            </div>
            @endif
            <!-- Menu Right -->
            <div class="menu_right">
            @if (Session::has('userId'))
                <ul>
                    <li class="profile_menu">
                        <span>Hello</span>
                        <a href="{{ url('/profile') }}">
                            {{ Session::get('username') }}
                        </a>
                        <button type="button" href="" aria-expanded="true">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                        </button>
                    </li>

                    <li class="menudrop_user">
                        <ul>
                            <li>
                                <a href="{{ url('/content/new') }}">NEW POST</a>
                            </li>
                            <li>
                                <a href="{{ url('/profile') }}">PROFILE</a>
                            </li>
                            <li>
                                <a href="{{ url('/logout') }}">LOGOUT</a>
                            </li>
                            </ul>
                        </li>
                    </ul>
                @else
                    <ul>
                        <li class="button_menu">
                            <a href="{{ url('/login') }}">SIGN IN</a>
                        </li>
                        <li class="button_menu">
                            <a href="{{ url('/register') }}" style="background-color:#fff; color:#ffc80a;">SIGN UP</a>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
    </nav>
    <!-- End Main Menu -->
    @yield('content')
    </body>
</html>