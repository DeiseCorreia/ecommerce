@extends('layout')
@section('conteudo')
    <h2>Login</h2>
     <form action="#" method="POST">
            
            <div>
                Email:<br><input type="email">
            </div>
              <div>
                Senha:<br><input type="password">
            </div><br>
            <input style="text-align:center"value="Entrar" type="submit">
            <a style="color:gray;" href="#">Esqueceu a Senha?</a>
            <br>
            <br>
            <div>
                <label><strong>Novo na .Net Eletronics?</strong></label><br>
                <input type="submit" value="Crie sua conta aqui">
            </div>
            <br>
            <a href="{{ route('inicio')}}">
                <img  class="img01" src="img/voltar.png" style="width:20%;">
            </a>
        </form>
@endsection