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
                        <ul class="nav navbar-nav navbar-right">                                
                            @if (Auth::check())
                                <li class="links"><a href="{{url('/tasks')}}">Minhas Tarefas</a></li>
                                <li class="links"><a href="{{url('/logout')}}">Sair</a></li>
                            @else
                                <li class="links"><a href="{{url('/')}}">Home</a></li>
                            @endif
                        </ul>                                    
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
    <script>
        //Makes navbar 'responsive' with Jquery
        $(window).resize(function(){
            console.log('resize called');
            var width = $(window).width();
            if(width < 720){
                $('#nav-content').removeClass('navbar-collapse collapse');
            }else{
                $('#nav-content').addClass('navbar-collapse collapse');
            }
        }).resize();//trigger the resize event on page load

</script>
</body>
</html>