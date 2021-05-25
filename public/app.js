//refazzer tudo!!!!!!!
//pelo menos dessa parte!
$(document).ready(function () {
    $("#btn").on("click", function () {
        console.log('test');
        var ncep = $("#cep").val()
        url = "http://viacep.com.br/ws/"+ncep+"/json";


        $.ajax({
            url: url,
            type: "get",
            dataType: "json",

            success: function (dados) {
                console.log(dados);
                // $("#uf").val(dados.uf);

                // $("#localidade").val(dados.localidade);

                // $("#bairro").val(dados.bairro);
            }
        });

    })
});


