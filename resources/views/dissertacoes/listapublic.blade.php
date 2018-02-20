@extends('layout.principal')

@section('conteudo')


    
<div class="container-fluid"> 
    <h3 style="color:#2ca02c"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Listagem de Dissertações</h3>
    
    
        <form class="navbar-form navbar-right" role="search" action="{!! url('pesquisar') !!}" method="post">           
            <div class="form-group">
                {!! csrf_field() !!}  
                <input type="text" name= "texto" class="form-control" placeholder="Nome, título, orientador">                
              </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
           
        </form>
    
    
        
    <br><br>
        <div class="col-sm-offset-1 col-sm-10">

                @foreach ($lista as $d)
                <div class="list-group" >
                    <ol class="breadcrumb">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-info"> <p class="text-uppercase"> {{$d->nome}} </p></li>
                          <li class="list-group-item"> Defesa: {{date('d/m/Y', strtotime($d->data))}} </li>
                          <li class="list-group-item"> Titulo: {{$d->titulo}}</li>
                          <li class="list-group-item"> Orientador: {{$d->orientador}} </li>
                          <li class="list-group-item">

                                  <button type="button" class="btn btn-default" data-toggle="tooltip" onclick="getMessage({{$d->id}})" title="Ler resumo completo">Resumo</button>
                                                       </li>
                          
                        </ul>
                    </ol>
                    </div>

                @endforeach
                
        </div>
</div>
        <div class="btn-group" href="/" role="group" aria-label="...">
            <a href="/"  class="btn-group-justified ">Voltar</a>
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
