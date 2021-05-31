@extends('layout')
@section('conteudo')
    <div class="container">
        <img class="img01" src="img/user1.png" style="width:16%;">
        <header>
            <small>
               
                <h2>Login Usuário</h2>
            </small>
            
        </header>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="nome.sobrenome@inst.gov.ba.br" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          
         
          
          
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="nome.sobrenome" aria-label="Username">
            <span class="input-group-text">@</span>
            
            <input type="text" class="form-control" placeholder="Server" aria-label="Server">
            <span class="input-group-text">#</span>
          </div>
          
          <div>
                <button type="button" class="btn btn-success">Entrar</button>
          </div>
@endsection