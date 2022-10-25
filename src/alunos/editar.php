<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar aluno</title>
</head>

<?php
    $RA = filter_input(INPUT_GET, "ra", FILTER_SANITIZE_STRING);

    include_once '../funcoes/bancoDeDados.php';

    $meuBanco = conexao();

    $sql = "select * from aluno where ra = '$RA' ";

    $resultado = $meuBanco->query($sql);

    $aluno = $resultado->fetch(PDO::FETCH_ASSOC);
    ?>

<body>
    <h1>Editar Aluno</h1>
    <form action="atualizaAluno.php" method="get">
    <table>
            <tr>
                <td><strong>RA:</strong></td>
                <td>
                    <input readonly type="text" name="txtRa" value="<?= $aluno['RA'];?>">
                </td>
            </tr>
            <tr>
                <td><strong>Nome:</strong></td>
                <td>
                    <input type="text" name="txtNome" value="<?= $aluno['nome'];?>">
                </td>
            </tr>
            <tr>
                <td><strong>Data de nascimento:</strong></td>
                <td>
                    <input type="date" name="data" value="<?= $aluno['nascimento'];?>">
                </td>
            </tr>
            <tr>
                <td><strong>RG:</strong></td>
                <td>
                    <input type="text" name="txtRg" value="<?= $aluno['rg'];?>">
                </td>
            </tr>
            <tr>
                <td><strong>CPF:</strong></td>
                <td>
                    <input type="text" name="txtCpf" value="<?= $aluno['cpf'];?>">
                </td>
            </tr>
            <tr>
                <td><strong>Sexo:</strong></td>
                <td>
                    <input type="text" name="txtSexo" value="<?= $aluno['sexo'];?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Alteral">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>