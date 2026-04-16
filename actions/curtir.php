<?php
require_once "../classes/Recado.php";

$id = $_GET['id'];
$recado = new Recado();
$recado->curtir($id);

header("Location: ../template/index.php");



?>