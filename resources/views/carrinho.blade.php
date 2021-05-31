@extends('layout')
@section('conteudo')
       <h2></h2><br>
        {{--estou verificando aqui se realmente existe a variavel para enviar esses dados--}}
       @if(isset($cart) && count($cart) > 0) {{--também está verificando se tem algum valor na mesma--}}
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                </tr>
            </thead><!--cabeçario da tabela-->
            <tbody>
                @foreach ($cart as $indice => $p){{--p: objeto de produto--}}
                    <tr>
                        <td>
                            <a href="{{ route ('carrinho_excluir', ['indice' =>$indice])}}" class="btn btn-danger btn-sm">
                                <!--<img  class="img01" src="img/lixeira.png">-->
                                <i class="fa fa-trash"></i> <strong>-</strong>
                                
                            </a>
                            

                             <input type="number" id="qtd" style="width:35px; height:25px;"><!--config a qtd dos produtos"-->
                            <a href="#" class="btn btn-success btn-sm">
                                <i class="fa fa-trash"></i> <strong>+</strong>
                                </a>
                            <!--<small>QTD:</small>-->
                           
                        </td>
                        <td><img src="{{asset($p->foto)}}" height="50"></td>
                        <td>{{$p->nome}}</td>
                        <td>{{$p->valor}}</td>
                        <td>{{$p->descricao}}</td>
                        
                    </tr>
                @endforeach
            </tbody>
            
        </table>  
        <input class="btn btn-success btn-sm" type="submit" value="Compra" href="#">   
        
       
       @else
            <img  class="img01" src="img/carrinhovazio.png">
            <br><p><strong>Nenhum item no carrinho!</strong></p>
       @endif
         

@endsection

