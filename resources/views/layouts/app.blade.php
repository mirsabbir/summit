<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="has-navbar-fixed-top">
    <div id="app">
        <nav class="navbar is-link is-fixed-top  has-shadow">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                <img src="{{asset('images/logos/logo.png')}}" alt="Bulma: a modern CSS framework based on Flexbox" width="150" height="60">
                </a>
                <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                <span></span>
                <span></span>
                <span></span>
                </div>
            </div>
            <div id="navbarExampleTransparentExample" class="navbar-menu">
                <div class="navbar-start">
                </div>
                    <div class="navbar-end">

                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link" href="#">
                        Courses
                        </a>
                        <div class="navbar-dropdown is-boxed is-right">
                            @foreach($courses as $course)
                            <a class="navbar-item" href="{{config('app.url').'/courses/'.$course['code']}}">
                                {{$course['name']}}
                            </a>
                            @endforeach
                        </div>
                    </div>

                    @if(Auth::guard('admin')->check())

                     <div class="navbar-item has-dropdown is-hoverable">

                    <a class="navbar-link" href="#">
                    <img class="m-r-10 navbarimg" src="{{asset('images/uploads/'.Auth::guard('admin')->user()->avatar)}}" alt="" height=30 width=30>
                    
                    <?php
                    $p = explode(" ", Auth::guard('admin')->user()->name);
                    echo $p[0];
                    ?>
                    </a>
                    <div class="navbar-dropdown is-boxed is-right">
                        <a class="navbar-item" href="{{route('profile')}}">
                            Profile
                        </a>

                        <a class="navbar-item" href="{{ route('admin.logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                    </div>

                    @endif

                    @guest
                    <div class="navbar-item">
                        <div class="field is-grouped">
                        <p class="control">
                            <a class="button is-primary" href="{{route('login')}}" >
                            <span class="icon">
                                <i class="fa fa-sign-in"></i>
                            </span>
                            <span>
                                Login
                            </span>
                            </a>
                        </p>
                        <p class="control">
                            <a class="button is-primary" href="{{route('register')}}">
                            <span class="icon">
                                <i class="fa fa-user-plus"></i>
                            </span>
                            <span>Sign up</span>
                            </a>
                        </p>
                        </div>
                    </div>
                    @else
                    <div class="navbar-item has-dropdown is-hoverable">

                        <a class="navbar-link" href="#">
                        <img class="m-r-10 navbarimg" src="{{asset('images/uploads/'.Auth::user()->avatar)}}" alt="" height=30 width=30>
                        <?php
                        $p = explode(" ", Auth::user()->name);
                        echo $p[0];
                        ?>
                        </a>
                        <div class="navbar-dropdown is-boxed is-right">
                            <a class="navbar-item" href="{{route('profile')}}">
                                Profile
                            </a>

                            <a class="navbar-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                    @endguest

                    
                </div>
            </div>
        </nav>
        
        @yield('content')

    <footer class="footer m-t-300">
        <div class="columns">
            <div class="column has-text-centered">
                <a href="https://www.facebook.com/summit.haque" target="_blank" class="facebook m-r-10"><i class="fa fa-facebook-square fa-2x social"> </i></a>
                <a href="#"  class="youtube m-l-10 m-r-10"><i class="fa fa-youtube-square fa-2x social"> </i></a>
                <a href="#" class= "twitter m-l-10"><i class="fa fa-twitter fa-2x social"></i></a>
            </div>
            <div class="column has-text-centered">
                
            </div>
            <div class="column has-text-centered">
               <strong>{{config('app.name')}} &copy Copyright 2018-{{now()->year}} Summit Haque  </strong> 
            </div>
        </div>
    </footer>
    

    </div>
<script src="{{ asset('js/app.js') }}"></script>
</body>



<script>


document.addEventListener('DOMContentLoaded', function () {

// Get all "navbar-burger" elements
    var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
        $navbarBurgers.forEach(function ($el) {
            $el.addEventListener('click', function () {

            // Get the target from the "data-target" attribute
            var target = $el.dataset.target;
            var $target = document.getElementById(target);

            // Toggle the class on both the "navbar-burger" and the "navbar-menu"
            $el.classList.toggle('is-active');
            $target.classList.toggle('is-active');

            });
        });
    }
});

</script>



</html>
