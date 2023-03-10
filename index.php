<!DOCTYPE html>
<html lang="en">

<head>
    <title>Atividade Web 2</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstra
p.min.css" integrity="sha384-
MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script>
    function mudarCorInput() {
        document.getElementById("nomeID").style.background = '#000000';
    }
    </script>
</head>

<body>
    <div class="form-group col-md-6">
        <label for="nomeID">Nome</label>
        <input type="text" class="formcontrol" onclick="mudarCorInput()" name="nome" id="nomeID"
            placeholder="Fulano de tal">
    </div>
</body>

</html>