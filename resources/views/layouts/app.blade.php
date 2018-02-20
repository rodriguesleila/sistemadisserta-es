<!--<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema de Dissertações</title>

     Fonts 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

     Styles 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>-->

<!doctype html>
<html lang="pt-br">
    <head>
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/boostrap.min.css" rel="stylesheet">
<!--            Exibição Calendario-->
        <link href='http://fonts.googleapis.com/css?family=OpenSans:300,400,700' rel='stylesheet' type='text/css'>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        
        <meta charset="utf-8" />
       
        <title>Sistema de Dissertações</title>
        <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
        <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
        <script>
          $(function () {
            $('.dropdown-toggle').dropdown();
          }); 
        </script>
    </head>
<body>
    <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}" style="color:#2ca02c">
                    Sistema de Dissertações
                </a>
            </div>
              
                    
               <div id="navbar" class="navbar-collapse collapse">
                 <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in " ></span> Login </a></li>
                    <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-user " ></span> Registrar </a></li>
                    @else
                    
                        <li> <a href="/listapublico"><span class="glyphicon glyphicon-ok"> Público</span></a> </li>

                        <li><a href="/lista"><span class="glyphicon glyphicon-list"> Listagem</span></a></li>
                        <li><a href="/formulario"><span class="glyphicon glyphicon-pencil"> Formulário</span></a>
               
                        
                        <li class="dropdown">
                            
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"> Logout</a></li>
                            </ul>
                        </li>
                  </ul>
         
                    @endif
                </div>
                    
                
            </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
