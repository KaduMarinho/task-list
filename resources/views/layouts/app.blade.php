<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Quickstart - Basic</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

        .links > a {  
            color: #000;              
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        } 

        .navbar-collapse, .collapse {
            /*border: 1px solid red;             */
            margin-top:-35px;
        }

        @media screen and (max-width: 720px) {
            .navbar-collapse, .collapse {
                display: none !important;
            }
        }       

    </style>
</head>
<body id="app-layout">
    <!--<nav class="navbar navbar-default">-->
        <div class="container">
            <div class="col-sm-offset-2 col-sm-8">
                <!--<div class="navbar-header">-->
                <div class="panel panel-default">                                       
                    <div class="panel-heading">

                        <!-- Branding Image -->
                        <!--<a class="navbar-brand" href="{{ url('/') }}">-->
                            Task List
                        <!--</a>-->
                    </div>                                                          
                </div>
                <div id="nav-content" class="navbar-collapse collapse">
                    @if (Auth::check())
                        <ul class="nav navbar-nav navbar-right">
                            <li class="links"><a href="{{url('/home')}}">Home</a></li>
                            <li class="links"><a href="{{url('/logout')}}">Sair</a></li>
                        </ul>
                    @endif                
                </div> 
                <!--</div>-->
            </div>
        </div>
    <!--</nav>-->
    

    @yield('content')
    

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>