<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>

<?php

    $codigo = $_GET['codigo'];
    $nome   = $_GET['nome'  ];
    $cidade = $_GET['cidade'];
    $estado = $_GET['estado'];
    echo("código enviado: {$codigo} <br>");
    echo("nome enviado: {$nome} <br>");
    echo("cidade enviada: {$cidade} <br>");
    echo("estado enviado: {$estado} <br>");

    
?> 
<form>
    <table>
        <tr>
            <td>Código:</td>
            <td><input type="text" name="codigo" value="<?=$codigo?>"></td>
        </tr>
        <tr>
            <td>Nome:</td>
            <td><input type="text" name="nome" value="<?=$nome?>"><br/></td>
        </tr>
        <tr>
            <td>Cidade</td>
            <td><input type="text" name="cidade" value="<?=$cidade?>"><br/></td>
        </tr>
        <tr>
            <td>Estado:</td>
            <td><input type="text" name="estado" value="<?=$estado?>"><br/></td>
        </tr>
        <tr>
            <td><input type="submit"></td>
        </tr>
    </table>
</form>

<hr/>

<?php
    if (isset($_POST['enviar'])) {
        $codigo = $_POST['codigo'];
        $nome   = $_POST['nome'  ];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
    }

?>

<form method="post">
    <table>
        <tr>
            <td>Código:</td>
            <td><input type="text" name="codigo" value="<?=$codigo?>"></td>
        </tr>
        <tr>
            <td>Nome:</td>
            <td><input type="text" name="nome" value="<?=$nome?>"><br/></td>
        </tr>
        <tr>
            <td>Cidade</td>
            <td><input type="text" name="cidade" value="<?=$cidade?>"><br/></td>
        </tr>
        <tr>
            <td>Estado:</td>
            <td><input type="text" name="estado" value="<?=$estado?>"><br/></td>
        </tr>
        <tr>
            <td><input type="submit" name="enviar"></td>
        </tr>
    </table>
</form>