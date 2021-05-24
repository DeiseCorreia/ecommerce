@extends('layout')
@section('conteudo')
        <h2>Categoria</h2>
        <!-- se ligue nessas variáveis-->
        <br> 
        @if(isset($listaCategoria) && (count($listaCategoria) > 0))
                <ul>
                    <li><a href="{{ route('categoria')}}">Todas</a></li>
                    @foreach ($listaCategoria as $cate)
                        <li> <a href="{{ route('categoria_id' ,['idcategoria' => $cate->id])}}"> 
                        {{$cate->categoria}}</li></a>
                    @endforeach
                
                </ul>
        @endif
  
        
         @include("_produtos", [ 'lista' => $lista])
      
        
      {{-- @if(isset($lista) && count($lista) > 0)
            <ul>
                @foreach ($lista as $prod)
                    <li>{{ $prod->nome}}</li> 
                @endforeach
            </ul>
            
        @endif--}}

@endsection

