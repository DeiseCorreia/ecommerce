
@extends('layout')
@section('conteudo')

        <div class="col-12">
            <h2 class="mb-3">Cadastro</h2>
        </div>
        <form action="{{ route('cadastro_cliente')}}" method="POST">
                @csrf
                <div class="row">
                {{-- dados do cliente que está fazendo seu cadastro --}}
                <div class="col-6">
                    <div class=" form-group">
                        Nome:<br><input name="nome" type="text" class="form-control" />
                    </div>
                </div>

                <div class="col-6">
                    <div class=" form-group">
                        E-mail:<br><input name="email"type="email" class="form-control"/>
                    </div>
                </div>

                <div class="col-6">
                    <div class=" form-group">
                        CPF:<br><input name="cpf" placeholder="09-999-999-90" type="text" class="form-control" required />
                    </div>
                </div>

                <div class="col-6">
                    <div class=" form-group">
                    Senha:<br><input name="senha" type="password" class="form-control" required/>
                    <h6 style="color:gray;"><strong>Senha tem que conter no minimo 8 caracteres</strong></h6>
                    </div>
                </div>

                <div class="col-6">
                    <div class=" form-group" >
                    Repita sua Senha:<br><input name="senha"type="password" class="form-control" required/>
                    </div>
                </div>

                <div class="col-4">
                    <div class=" form-group">

                        CEP:<br>
                        <input  name="cep"id="cep" type="text" class="form-control" /><br>
                        <button id="btn" class="btn btn-sm btn-secondary" type="button">Aperte</button> <br>
                        <a style="color:gray;"href="https://buscacepinter.correios.com.br/app/endereco/index.php?t" target="_blank">Não sabe seu CEP?</a>
                        {{-- linha 49 troquei para direcionar para outra janela, tipo página 1 tem um link e esse link vai ser redirecionado
                        para a pagina 2 ou seja outra aba do navegador! --}}
                    </div>
                </div>

                <div class="col-8">
                    <div class=" form-group">
                    Endereço:<br><input name="bairro"id="bairro"type="text" class="form-control"/>
                    </div>
                </div>

                <div class="col-2">
                    <div class=" form-group">
                   Número:<br><input name="numero"id="numero"type="text" class="form-control"/>
                    </div>
                </div>

                <div  class="col-4">
                    <div class=" form-group">
                    Cidade:<br><input name="cidade" id="cidade" type="text" class="form-control"/>
                    </div>
                </div>

                <div class="col-4">
                    <div class=" form-group">
                        Estado:<br><select name="estado"
                         id="estado">
                            <option>-</option>
                            <option>BA</option>
                            <option>SP</option>
                            <option>AC</option>
                            <option>AM</option>
                            <option>AP</option>
                            <option>CE</option>
                            <option>DF</option>
                        </select>
                    <!--<input id="uf"type="text" class="form-control"/>-->
                    </div>
                </div>

                <div class="col-6">
                    <div class=" form-group">
                     <input type="submit" value="Cadastrar" class="btn btn-success btn-sm">
                    </div>
                </div>
            </div>
            </form>
@endsection


{{-- </script> --}}
{{-- <input type="submit" value="Cadastrar"> --}}
                {{-- <input type="submit" value="Enviar"> --}}
