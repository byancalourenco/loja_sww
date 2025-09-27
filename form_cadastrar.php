<?php
    include 'pedaco.php';
?>

    <div class="d-flex justify-content-center align-items-center">
        <a href="index.php" class="btn btn-secondary btn-sm">
            <i class="fa-solid fa-arrow-left me-2"></i> Voltar à página anterior
        </a>
    </div>

    <link rel="stylesheet" href="style.css">

    <div class="container py-5 text-center">
        <div class="intro-box p-5 rounded-3 shadow">
            <h3 class="mb-4">Formulário - cadastrar produtos</h3>
            <form action="inserir.php" method="POST">
                <div class="mb-3 text-start">
                    <label for="nome" class="form-label">Nome do Produto</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do produto">
                </div>

                <div class="mb-3 text-start">
                    <label for="preco" class="form-label">Preço</label>
                    <input type="text" class="form-control" id="preco" name="preco" placeholder="Digite o preço">
                </div>

                <div class="mb-4 text-start">
                    <label for="quantidade" class="form-label">Quantidade</label>
                    <input type="text" class="form-control" id="quantidade" name="quantidade" placeholder="Digite a quantidade">
                </div>
                <button type="submit" class="btn btn-primary btn-lg custom-btn">Cadastrar</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>