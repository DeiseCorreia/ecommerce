<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/favicon.ico" >
    <title>.Net Eletronics</title>
    <style>
        .img01{
            width: 56px;
        }
        .img{
            width: 102px;
        }

    </style>
</head>
<body >
    <nav class="navbar navbar-light navbar-expand-md bg-light p1-5 pr-5 mb-5">
        <a href="/" class="navbar-brand"><img class="img"src="img/logo01.png"></a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('inicio')}}"> HOME</a>
                <a class="nav-link" href="{{ route('categoria')}}">CATEGORIA</a>
                <a class="nav-link" href="{{ route('contato')}}">CONTATO</a>
                <a class="nav-link" href="{{ route('cadastro')}}">CLIENTE</a>
            </div>
        </div>
        
        <a href="#"class="btn btn-sm">
            <i class="fa fa-shopping-cart"></i>
            <img class="img01"src="img/carrinho.png">
        </a>                                  
    </nav>

    <div class="container">
        <div class="row">
           <!--neste div teremos uma area que os outros arquivos irão adicionar o conteudo-->
            @yield("conteudo")
        </div>
    </div>
            
               

</body>
</html>
