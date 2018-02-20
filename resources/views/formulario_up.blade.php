@extends('layout.date')
@section ('conteudo')

<div class="container-fluid">
    <h3 style="color:#2ca02c"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Atualização de Dissertações</h3>
    <br>
<form action="/atualiza" method="POST" class="form-horizontal">  
               <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
               <input name="id" type="hidden" value="{{$d->id}}"> 
                <div class="form-group">
                   <label for="nome" class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nome" placeholder="Nome Completo" value="{{$d->nome}}" required="required"/>
                    </div>
                </div>                         
                <div class="form-group">
                    <label for="data" class="col-sm-2 control-label">Data</label>
                    <div class="col-sm-2">
                        <input type="text"  class="form-control" id="datepicker1" placeholder="01/01/2000" value="{{date('d/m/Y', strtotime($d->data))}}" name="data" required="required"/>
                    </div>
                </div>               
                <div class="form-group">
                   <label for="titulo" class="col-sm-2 control-label">Titulo</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="titulo" placeholder="Título da dissertação" value="{{$d->titulo}}" required="required"/>
                    </div>
                </div>
                <div class="form-group">
                   <label for="orientador" class="col-sm-2 control-label">Orientador</label>
                    <div class="col-sm-8">
                          <input type="text" class="form-control" name="orientador" placeholder="Nome do Orientador" value="{{$d->orientador}}" required="required"/>
                    </div>
                </div>
                <div class="form-group">
                   <label for="co_orientador" class="col-sm-2 control-label">Co-orientador</label>
                    <div class="col-sm-8">
                          <input type="text" class="form-control" name="co_orientador" placeholder="Nome do Co-orientador" value="{{$d->co_orientador}}" required="required"/>
                    </div>
                </div>
                 <div class="form-group">
                   <label for="resumo" class="col-sm-2 control-label">Resumo</label>
                    <div class="col-sm-8">
                          <textarea class="form-control" name="resumo" rows="5" required="required">{{$d->resumo}}"</textarea>                          
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                      <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </form>
</div>
@stop
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.zebra-datepicker.js"></script>