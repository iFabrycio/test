@extends('Layout.principal')

@section('content')



<div class="poscentralized">
    
    <div class="forma" style="">
<form action="/agenda/add" method="post">
   
    <div class="panel panel-default">
    
        <div class="panel-heading">
        Adicionar evento
        </div>
        <div class="panel-body">
    <input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
  <div class="form-group">
    <label for="titulo">Titulo</label>

    <input  id="titulo" name="Titulo" type="text" class="form-control" placeholder="Titulo" required>
  </div>
    
        <div class="form-group">
    <label for="Descricao">Descrição</label>

    <input  id="Descricao" name="Descricao" type="text" class="form-control" placeholder="Descricao" required>
  </div>
    
        <div class="form-group">
    <label for="DataInicio">Data de Inicio do evento</label>

    <input  id="DataInicio" type="date" name="DataInicio" class="form-control" placeholder="DataInicio" required>
  </div>
    
       <div class="form-group">
    <label for="DataFim">Data de término do evento</label>

    <input  id="DataFim" type="date" name="DataFim" class="form-control" placeholder="DataFim" required>
  </div>
        <input class="btn btn-success" type="submit"/>
        
    </div>
    </div>
        
</form>
        </div>
</div>
@stop