<?php
require_once "config/Conexao.php";

class Recado{
    private $conn;
    private $table = "recados";
    public $nome;
    public $mensagem;

    public function __construct(){
        $database = new Conexao();
        $this->conn = $database->conectar();
    }

    public function salvar(){
        $sql = "INSERT INTO {$this->table} (nome,mensagem) 
        VALUES (:nome,:mensagem)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":nome",$this->nome);
        $stmt->bindParam(":mensagem",$this->mensagem); 

        return $stmt->execute();       
    }

    public function listar(){
        $sql = "SELECT * FROM {$this->table}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt;
}

}

?>