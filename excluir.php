<?php
    require 'conexao.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM produtos WHERE id = :id";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    
    if ($stmt->execute()) {
        header("Location: acao_confirmada.php");
    } else {
        header("Location: acao_falha.php");    
    }

?>