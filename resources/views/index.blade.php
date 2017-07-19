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

        <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

        <!-- Custom Style -->
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        
    </head>
    <body>

        <nav class="navbar navbar-defualt">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/') }}">Project Management</a>
                </div>
                <div class="nav navbar-nav navbar-right">
                    <a href="{{ route('login') }}">
                        <button class="btn navbar-btn login">LogIn</button>
                    </a>
                    <a href="{{ route('register') }}">
                        <button class="btn navbar-btn signup">Register</button>
                    </a>
                </div>
            </div>
        </nav>
        
        <div class="intro-block">
            <div class="text">Manage your project's workflow with Project Management System</div>

            <div class="text-small">Our boards, lists, and cards enable you to organize and prioritize your projects in a fun, flexible and rewarding way.</div>
            <a href="{{ route('register') }}">
               <button class="btn green">SignUp - It's Free</button>
            </a>

            <div class="text-small">Already have account - <a href="{{ route('login') }}">LogIn</a></div>
        </div>

        <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    </body>
</html>
