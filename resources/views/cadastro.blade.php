
@extends('layout')
@section('conteudo')

        <div class="col-12">
            <h2 class="mb-3">Cadastro</h2>
        </div>
        <form action="" method="POST">
                <div class="row">
                {{-- dados do cliente que está fazendo seu cadastro --}}
                <div class="col-6">
                    <div class=" form-group">
                        Nome:<br><input type="text" class="form-control" />
                    </div>
                </div>

                <div class="col-6">
                    <div class=" form-group">
                        E-mail:<br><input type="email" class="form-control"/>
                    </div>
                </div>

                <div class="col-6">
                    <div class=" form-group">
                        CPF:<br><input placeholder="09-999-999-90" type="text" class="form-control" required/>
                    </div>
                </div>

                <div class="col-6">
                    <div class=" form-group">
                    Senha:<br><input type="password" class="form-control" required/>
                    <h6 style="color:gray;"><strong>Senha tem que conter no minimo 8 caracteres</strong></h6>
                    </div>
                </div>

                <div class="col-6">
                    <div class=" form-group" required>
                    Repita sua Senha:<br><input type="password" class="form-control"/>
                    </div>
                </div>

                <div class="col-4">
                    <div class=" form-group">

                    CEP:<br>
                        <input  id="cep" type="text" class="form-control" required/>
                        <button id="btn" class="btn btn-sm btn-secondary" type="button">Não sabe seu cep?</button> 
                    </div>
                </div>

                <div class="col-12">
                    <div class=" form-group">
                    Endereço:<br><input id="bairro"type="text" class="form-control"/>
                    </div>
                </div>

                <div  class="col-4">
                    <div class=" form-group">
                    Cidade:<br><input id="localidade" type="text" class="form-control"/>
                    </div>
                </div>

                <div class="col-4">
                    <div class=" form-group">
                    Estado:<br><input id="uf"type="text" class="form-control"/>
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
