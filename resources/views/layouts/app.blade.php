<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TSBW - Lerngruppen</title>
    <!-- Fonts -->
    <link rel="shortcut icon" href="{{ asset('icon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/googlefont-lato.css') }}" />
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/pajinate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    {{-- <link rel="stylesheet" type="text/css" href="{{ elixir('/css/app.css') }}" /> --}}
    <!-- JavaScripts -->
    <script src="{{ url('/js/jquery.min.js') }}"></script>
    <script src="{{ url('/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('/js/action.js') }}"></script>

<style>
    body {
        font-family: 'Lato';
    }

    .fa-btn {
        margin-right: 6px;
    }
</style>

</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

            <!-- Branding Name -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Lerngruppen
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out  fa-lg  fa-fw"></i>Logout</a></li>
                        <li><a href="{{ url('/changePassword') }}"><i class="fa fa-cog fa-spin  fa-lg  fa-fw" ></i>Passwort ändern</a></li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{Session::get('success')}}
</div>
@endif

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-danger" role="alert">
    {{Session::get('error')}}
</div>
@endif

@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
    {{ $error }}<br>
    @endforeach
</div>
@endif

</body>
</html>
