@extends('layout')
@section('conteudo')
        <h2>Contato</h2><br>
        
        <form action="#" method="POST">
            <div>
                Nome:<br><input type="text">
            </div>
            
            <div>
                Email:<br><input type="email">
            </div>
        
            <div>
                Selecione:<br><select>
                    <option>-</option>
                </select><br>
            </div>
            
            <div>

                Mensagem:<br><textarea placeholder="informe sua mensagem aqui"></textarea>
            </div>
            
            
            <input value="enviar" type="submit">
        </form>
@endsection