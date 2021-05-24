@extends('layout')
@section('conteudo')
 
    @if(isset($lista))
            @foreach ($lista as $prod)

                        <div class="col-3 mb-3">
                            <div class="card">
                                <img src="{{ asset($prod->foto)}}"class="card-img-top"alt="produto">
                                <div class="card-body">
                                    <h6 class="card-title">{{$prod->nome}} - R$: {{$prod->valor}}</h6>
                                    <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                                </div>
                            </div>
                        </div>
            @endforeach
    @endif
@endsection