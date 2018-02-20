<!doctype html>
<html lang="pt-br">
    <head>
                <link href="/css/app.css" rel="stylesheet">
<!--            Exibição Calendario-->
<!--        <link href='http://fonts.googleapis.com/css?family=OpenSans:300,400,700' rel='stylesheet' type='text/css'>-->
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        
        <meta charset="utf-8" />
       
        <title>Sistema de Dissertações</title>
<!--                <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>-->

        <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
        <script>
          $(function () {
            $('.dropdown-toggle').dropdown();
          }); 
        </script>
        

        <script src = "//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


    </head>
    
        <body>
            <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="http://localhost:8000/"style="color:#2ca02c">Sistema de Dissertações</a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                 <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in">  Login</span></a></li>
                    <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-user"> Register</span></a></li>
                    @else
                    
                    
                        <li> <a href="/listapublico"><span class="glyphicon glyphicon-ok"></span> Listagem publica</a></li>
                        <li><a href="/lista"><span class="glyphicon glyphicon-list"></span> Listagem</a></li>
                        <li><a href="/formulario"><span class="glyphicon glyphicon-pencil"></span> Formulário</a></li>
                        <li class="dropdown">
                            
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"> Logout</a></li>
                            </ul>
                        </li>
                  </ul>
         
                    @endif
                </div>
                    
                
            </nav>
            <div class="container">

                        @yield('conteudo')

            </div>
<!-- jQuery -->

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- BS JavaScript -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- Have fun using Bootstrap JS -->
<script type="text/javascript">
         function getMessage(id_value){
            $.ajax({
               type:'GET',
               url:'/detalhar',
               data: {'id_value' : id_value},
               dataType : "json",
               success : function(data){ 
                    if(data){ 
                         // vamos gerar um html e guardar nesta variável
                             var html = "";
 
                            // executo este laço para ecessar os itens do objeto javaScript
                            for($i=0; $i < data.length; $i++){
                            // coloco o nome e sobre nome
                                html += data[$i].resumo;
                            }//fim do laço
 
        //coloco a variável html na tela
            
                        $('#modal-bodyDetails').html(html);
                        
                        }
                            $('#modalDetails').modal('show');

                    }
            });
         }
      </script>

            
            <footer>

               <div id="footer">
                  <div class="container">
                      <br><br>
                      <center><h5>Programa de Pós-graduação em Engenharia Elétrica e Computação da UFC (PPGEEC-UFC)</h5></center>
                      <center><h5><span class="glyphicon glyphicon-copyright-mark" aria-hidden= "true"></span> Desenvolvido por NUDETEC - UFC Campus Sobral</h5>
                      </center>
                    </div>
               </div>
            </footer>
</html>