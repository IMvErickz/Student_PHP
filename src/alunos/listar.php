<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body>
    <a href="./novoAluno.php">Novo Aluno</a>
    <table border = "4">
        
        <tr>
            <th>Ação</th>
            <th>RA</th>
            <th>Nome</th>
        </tr>
    <?php
    include_once '../funcoes/bancoDeDados.php';
    $meuBanco = conexao();

    $sql = "select * from aluno";

    $resultado = $meuBanco->query($sql);

    while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
$ra = $linha["RA"];

         echo "<tr>";
         echo "<td>";
         echo $linha["RA"];
         echo "</td>";
         echo "<td>";
         echo $linha["nome"], "<br>";
         echo "</td>";
         echo "<td>";
         echo "<a href='editar.php?=$ra'>editar</a>";
         echo "</td>";

         echo "</tr>";
    }

    $meuBanco = null;
    ?>
    </table>
</body>
</html>