<?php
require_once "../classes/Recado.php";

$recado = new Recado();
$recado->nome = $_POST['nome'];
$recado->mensagem = $_POST['mensagem'];

if($recado->salvar()){
    header("Location:../template/index.php");
}else{
    echo "deu ruim";
}
?>