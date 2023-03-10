<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade AJAX</title>
    <script>
    function procurarCidade() {
        let nome = document.getElementById("estadoID").value;
        $.ajax({
            url: "retornacidade.php",
            type: "POST",
            data: "estado=" + nome,
            dataType: "html"
        }).done(function(resposta) {
            console.log(resposta);
            $('#cidadeID').html(resposta);
        }).fail(function(jqXHR, textStatus) {
            console.log("Request failed: " + textStatus);
        }).always(function() {
            console.log("completou");
        });
    }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <form id="formDadastroDeAluno" method="POST" action="ajax.php">
        <select id="estadoID" onchange="procurarCidade()" name="estado" class="form-control">
            <option value="0" selected>Escolher...</option>
            <option value="sp">São Paulo</option>
            <option value="ms">Mato Grosso do Sul</option>
        </select>
    </form>
    <select id="cidadeID" name="cidade" class="form-control">
       
    </select>

</body>

</html>