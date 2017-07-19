<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Project Management</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

        <!-- Custom Style -->
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        
    </head>
    <body class="app">

        <nav class="navbar navbar-defualt">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('home') }}">Project Management</a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <a href="{{ route('login') }}">
                        <button class="btn navbar-btn login">LogIn</button>
                    </a>
                    <a href="{{ route('register') }}">
                        <button class="btn navbar-btn signup">Register</button>
                    </a>
                    @else
                        <li>
                            <a href="#profile">{{ Auth::user()->name }}</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-plus"></i> <i class="fa fa-caret-down"></i>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('new') }}">New Project</a>
                                </li>

                                @php
                                    $recentProjects = array_filter(json_decode($data['recentProjects'], true));
                                @endphp

                                @if (!empty($recentProjects))
                                    <li role="separator" class="divider"></li>
                                    @foreach($recentProjects as $project)
                                        <li><a href="project/{{ $project['id'] }}">{{ $project['name'] }}</a></li>
                                    @endforeach
                                @endif

                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i></a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>

        @yield('content')

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
