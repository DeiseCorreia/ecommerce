@extends('layout')
@section('conteudo')
       <h2>Carrinho</h2>
        {{--estou verificando aqui se realmente existe a variavel para enviar esses dados--}}
       @if(isset($cart) && count($cart) > 0) {{--também está verificando se tem algum valor na mesma--}}
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>Foto</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                </tr>
            </thead><!--cabeçario da tabela-->
            <tbody>
                @foreach ($cart as $p){{--p: objeto de produto--}}
                    <tr>
                        <td>
                            <a href="#" class="btn btn-danger btn-sm">
                                <img  class="img01" src="img/lixeira.png">
                                <i class="fa fa-remove"></i> 
                            </a>
                        </td>
                        <td>{{$p->nome}}</td>
                        <td><img src="{{asset($p->foto)}}" height="50"></td>
                        <td>{{$p->valor}}</td>
                        <td>{{$p->descricao}}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>  
        <input type="submit" value="Compra" href="#"> 
       @else
            <p>Nenhum item no carrinho!</p>
       @endif
           
       

@endsection

