<?php
    require 'conexao.php';

    // url
    $id = $_GET['id'];

    // form - POST
    $nome_novo = $_POST['nome_novo'];
    $preco_novo = $_POST['preco_novo'];
    $quantidade_novo = $_POST['quantidade_novo'];

    // preparando o update
    $sql = "UPDATE produtos SET nome = :nome_novo, preco = :preco_novo, quantidade = :quantidade_novo WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    // blindando os parametros 
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nome_novo', $nome_novo);
    $stmt->bindParam(':preco_novo', $preco_novo);
    $stmt->bindParam(':quantidade_novo', $quantidade_novo);

    if ($stmt->execute()) {
        // echo "Produto atualizado com sucesso!";
        header("location: listar_produtos.php");
    } else {
        echo "Erro ao atualizar produto.";
    }
?>