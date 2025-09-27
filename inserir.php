<?php
    // conexao
    require 'conexao.php';

    // pegando os dados
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    // cod em sql - ainda é uma string
    $sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES (:nome, :preco, :quantidade)";

    // preparando os dados para o sql
    $stmt = $pdo->prepare($sql);

    // comparar
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':quantidade', $quantidade);

    // mensagens 
    if ($stmt->execute()) {
        header("Location: acao_confirmada.php");
    } else {
        header("Location: acao_falha.php");    
    }
?>