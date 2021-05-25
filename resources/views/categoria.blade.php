@extends('layout')
@section('conteudo')
        <!-- se ligue nessas variáveis-->
        <div class="col-2">
            @if(isset($listaCategoria) && (count($listaCategoria) > 0))
                    <div class="list-group">
                            <a href="{{ route('categoria')}}" class="list-group-item list-group-item-action 
                            @if(0 == $idcategoria) active @endif">Todas</a>
                            @foreach ($listaCategoria as $cate)
                                 <a href="{{ route('categoria_id' ,['idcategoria' => $cate->id])}}" class="list-group-item list-group-item-action 
                                    @if($cate->id == $idcategoria) active @endif"> 
                                    {{$cate->categoria}}</a>
                            @endforeach
                    </div>
            @endif
        </div>       
        
        <div class="col-10">
            
            @include("_produtos", [ 'lista' => $lista])
        </div>
        
      {{-- @if(isset($lista) && count($lista) > 0)
            <ul>
                @foreach ($lista as $prod)
                    <li>{{ $prod->nome}}</li> 
                @endforeach
            </ul>
            
        @endif--}}

@endsection

