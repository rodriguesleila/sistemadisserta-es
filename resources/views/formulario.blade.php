
@extends('layout.date')

@section('conteudo')

<div class="container-fluid">
    <h3 style="color:#2ca02c"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Nova de Dissertaçãos</h3>
     <br>
           <form action="/cadastro" method="POST" class="form-horizontal">  
               <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">             
                <div class="form-group">
                   <label for="inputNome" class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-8">
                          <input type="text" class="form-control" name="inputNome" placeholder="Nome Completo" required="required"/>
                    </div>
                </div>                         
                <div class="form-group">
                    <label for="inputData" class="col-sm-2 control-label">Data</label>
                    <div class="col-sm-2">
                        <input type="text"  class="form-control" id="datepicker1" placeholder="01/01/2000" name="inputData" required="required"/>
                    </div>
                </div>               
                <div class="form-group">
                   <label for="inputTitulo" class="col-sm-2 control-label">Titulo</label>
                    <div class="col-sm-8">
                          <input type="text" class="form-control" name="inputTitulo" placeholder="Título da dissertação" required="required"/>
                    </div>
                </div>
                <div class="form-group">
                   <label for="inputOrientador" class="col-sm-2 control-label">Orientador</label>
                    <div class="col-sm-8">
                          <input type="text" class="form-control" name="inputOrientador" placeholder="Nome do Orientador" required="required"/>
                    </div>
                </div>
                <div class="form-group">
                   <label for="inputCoorientador" class="col-sm-2 control-label">Co-orientador</label>
                    <div class="col-sm-8">
                          <input type="text" class="form-control" name="inputCoorientador" placeholder="Nome do Co-orientador" required="required"/>
                    </div>
                </div>
                 <div class="form-group">
                   <label for="inputResumo" class="col-sm-2 control-label">Resumo</label>
                    <div class="col-sm-8">
                          <textarea class="form-control" name="inputResumo" rows="5" required="required"></textarea>                          
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                      <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </form>
<!--             <div class="btn-group" href="/" role="group" aria-label="...">
                <a href="/"  class="btn-group-justified ">Voltar</a>
            </div>  -->
</div>
    @stop

<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.zebra-datepicker.js"></script>