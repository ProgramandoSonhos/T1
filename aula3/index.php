<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista gêneros musicais</title>
</head>
<body>
    <?php
        // realiza conexao com o banco de dados
        // mysqli_connect(host, user, password, database)
        $mysqli = mysqli_connect('localhost', 'root', '', 'aula4');
        if(!$mysqli) {
            echo 'Não foi possível conectar.<br>'.mysqli_connect_error()."<br>";
        } else {
            echo 'Conexão realizada com sucesso!<br>';

            $sql = "select * from genero";
            // realiza consulta no banco de dados
            $resultado = mysqli_query($mysqli, $sql);
            
            $dados = [];
            while($linha = mysqli_fetch_assoc($resultado)){
                array_push($dados, $linha);
            }


            var_dump($dados);

        }

    ?>


</body>
</html>