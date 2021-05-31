
@extends('layout')

@section("scriptjs")
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(function(){//mascara
            //jquery -- onload -- ao carregar a pagina
            $("#cpf").mask("000.000.000-00")
            $("#cep").mask("00000-000")
        })

    </script>
@endsection
    

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
                        CPF:<br><input name="cpf" id="cpf"  type="text" class="form-control" required />
                    </div>
                </div>

                <div class="col-6">
                    <div class=" form-group">

                    Senha:<br><input name="senha" type="password" class="form-control" required/>
                    <h6 style="color:gray;"><span id="passwordHelpInline" class="form-text"> Must be 8-20 characters long.</h6>
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
                   Número:<br><input name="numero"id="numero"type="number" class="form-control"/>
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
