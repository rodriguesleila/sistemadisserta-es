@extends('layout.principal')

@section('conteudo')


       <div class="container-fluid"> 
        <h3 style="color:#2ca02c"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Listagem de Dissertações</h3>
    
    
        <form class="navbar-form navbar-right" role="search" action="{!! url('pesquisarlista') !!}" method="post">           
            <div class="form-group">
                {!! csrf_field() !!}  
                <input type="text" name= "texto" class="form-control" placeholder="Nome, título, orientador">                
              </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
           
        </form>
        <br><br>
        <div class="col-sm-12">
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
                @foreach ($lista as $d)
                    <tr>
                        <td> {{$d->nome}} </td>
                        <td> <center>{{date('d/m/Y', strtotime($d->data))}} </center></td>
                        <td> <center>{{$d->titulo}} </center></td>
                        <td> <center>{{$d->orientador}}</center> </td>
                        <td> <center> {{$d->co_orientador}} </center></td>
                        <td><center><button type="button"  class="btn btn-info" data-toggle="modal" onclick="getMessage({{$d->id}})" data-target="#myModal"><span class="glyphicon glyphicon-search"></span></button></center>
                        <td><center><a class="btn btn-warning " href="/editar/<?= $d->id ?>"><span class="glyphicon glyphicon-pencil"></span></a></center></td>
                        <td><center><a  class="btn btn-danger" href="/deletar/<?= $d->id ?>"><span class="glyphicon glyphicon-trash"></span></a></center></td>
                    </tr>
                @endforeach        
        </table>
        </div>
        
            <td colspan="5" class="text-center"><center>{{$links}}</center></td>
        
        
       </div>
           <div class="modal fade" id="modalDetails" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel">Resumo</h4>
                        </div><!-- /.modal-header -->
                        <div class="modal-body" id="modal-bodyDetails">
                        </div><!-- /.modal-body -->
                        <div class="modal-footer" id="modal-footerDetails">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div><!-- /.modal-footer -->
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal fade -->


@stop
    