<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo aluno</title>
</head>
<body>
    <h1>Cadastrar Novo Aluno</h1>

    <form action="./insereAluno.php" method="get">
        <table>
            <tr>
                <td><strong>RA:</strong></td>
                <td>
                    <input type="text" name="txtRa">
                </td>
            </tr>
            <tr>
                <td><strong>Nome:</strong></td>
                <td>
                    <input type="text" name="txtNome">
                </td>
            </tr>
            <tr>
                <td><strong>Data de nascimento:</strong></td>
                <td>
                    <input type="date" name="data">
                </td>
            </tr>
            <tr>
                <td><strong>RG:</strong></td>
                <td>
                    <input type="text" name="txtRg">
                </td>
            </tr>
            <tr>
                <td><strong>CPF:</strong></td>
                <td>
                    <input type="text" name="txtCpf">
                </td>
            </tr>
            <tr>
                <td><strong>Sexo:</strong></td>
                <td>
                    <input type="text" name="txtSexo">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Cadastrar">
                </td>
            </tr>
        </table>
    </form>
    <?php
    
    ?>
</body>
</html>