@extends('layout.principal')

@section('conteudo')
    <div class="container-fluid"> 
        <h3 style="color:#2ca02c"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Resultado da Pesquisa de Dissertações</h3>
        <br>
        
        <div class="col-sm-12">
            @if (empty($posts))
                <div class="container-fluid">
                    <br><br><br>
                    <center><h2 style="color:red"> Informações não encontradas!</h2></center>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
            @else
                <table class="table table-hover">
                    <tr>
                        <td><center> Nome </center></td>
                        <td><center> Data </center></td>
                        <td><center> Titulo </center></td>
                        <td><center> Orientador </center></td>
                        <td><center> Co_orientador </center></td>
                        <td><center> Resumo </center></td>
                        <td></td>
                    </tr>
                        @foreach ($posts as $d)
                            
                            <tr>
                                <td> {{$d->nome}} </td>
                                <td> <center>{{date('d/m/Y', strtotime($d->data))}} </center></td>
                                <td> <center>{{$d->titulo}} </center></td>
                                <td> <center>{{$d->orientador}}</center> </td>
                                <td> <center> {{$d->co_orientador}} </center></td>
                                <td><center><button type="button"  class="btn btn-info" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-search"></span></button></center>
                                <!-- Modal -->
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Resumo da Dissertação: {{$d->titulo}} </h4>
                                          </div>
                                          <div class="modal-body">
                                              <p>{{$d->resumo}}</p>
                                              <br>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </td>                 
                                <td><center><a class="btn btn-warning " href="/editar?id=<?= $d->id ?>"><span class="glyphicon glyphicon-pencil"></span></a></center></td>
                                <td><center><a  class="btn btn-danger" href="/deletar?id=<?= $d->id ?>"><span class="glyphicon glyphicon-trash"></span></a></center></td>
     
                            </tr>
                            
                        @endforeach        
                </table>


            @endif
        </div>
        
    </div>
           
@stop

<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.zebra-datepicker.js"></script>