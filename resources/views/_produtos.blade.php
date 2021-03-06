
    @if(isset($lista))
        <div class="row">
            @foreach ($lista as $prod)
                
                        <div class="col-3 mb-3">
                            <div class="card">
                                <img src="{{ asset($prod->foto)}}"class="card-img-top"alt="produto">
                                <div class="card-body">
                                    <h6 class="card-title">{{$prod->nome}} - R$: {{$prod->valor}}</h6>
                                    <h6 class="card-text">{{$prod->descricao}} </h6>
                                    <a href="{{ route('adicionar_carrinho',['idproduto' => $prod->id ])}}" class="btn btn-sm btn-secondary">Adicionar ao Carrinho</a>
                                </div>
                            </div>
                        </div>
            @endforeach
        </div>
    @endif
