<?php
    include 'pedaco.php';
    $id = $_GET['id'];
?>

    <link rel="stylesheet" href="style.css">

    <div class="container py-5 text-center">
        <div class="intro-box p-5 rounded-3 shadow">
            <h3 class="mb-4">Formulário - atualizar produtos</h3>

            <form action="atualizar.php?id= <?php echo $id; ?>" method="POST">

                <?php
        
                    // echo "valor passado: $id";

                    // listar.php ⬇

                    require 'conexao.php';

                    // pegar o valor do id e colocar aqui
                    $sql = "SELECT * FROM produtos WHERE id = $id";
                    $stmt = $pdo->query($sql);
                    $produto = $stmt->fetch(PDO::FETCH_ASSOC);
        
                ?>
                
                <div class="mb-3 text-start">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" value="<?php echo $produto['nome']; ?>" class="form-control" name="nome_novo" id="nome">
                </div>

                <div class="mb-3 text-start">
                    <label for="preco" class="form-label">Preço:</label>
                    <input type="text" value="<?php echo $produto['preco']; ?>" class="form-control" name="preco_novo" id="preco">
                </div>

                <div class="mb-4 text-start">
                    <label for="quantidade" class="form-label">Quantidade:</label>
                    <input type="text" value="<?php echo $produto['quantidade']; ?>" class="form-control" name="quantidade_novo" id="quantidade">
                </div>

                <button type="submit" class="btn btn-primary btn-lg custom-btn">Atualizar</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>