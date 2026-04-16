<?php
require_once "classes/Recado.php";
$recado = new Recado();
$lista = $recado->listar();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar Doc</title>
</head>
<body>
    <h2>Novo Recado</h2>
    <form action="actions/salvar.php" method="post">
        <input type="text" name="nome" required>
        <textarea name="mensagem" required></textarea>
        <button type="submit">Enviar</button>
    </form>
    <h2>Listar Mensagens</h2>
    <?php
        while($row=$lista->fetch(PDO::FETCH_ASSOC)){
            echo "<p><b>";
            echo $row['nome'];
            echo " | ";
            echo $row['mensagem'];
            echo "</p></b>";
        }
    ?>
</body>
</html>