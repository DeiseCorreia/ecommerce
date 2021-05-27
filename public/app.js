$( document ).ready(function(){
    console.log( "ready!" );
    $("#btn").on("click",function(){

        var ncep = $("#cep").val()//o valor desse campo vai ser atribuido a essa variavel que foi criada!
        
        
     
        var url =  "https://viacep.com.br/ws/"+ncep+"/json/"
     
        $.ajax({
            url: url,
            type:"get",
             dataType:"json",
     
             success:function(dados){//lembra do sucess -> é com 2 cc
                 console.log(dados)
     
                 $("#uf").val(dados.uf)
                 $("#bairro").val(dados.bairro)
                 $("#cidade").val(dados.cidade)
             }
        })
     })
})
