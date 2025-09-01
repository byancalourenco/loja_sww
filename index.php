<?php
    include 'pedaco.php';
?>

    <link rel="stylesheet" href="style.css">

    <div class="container py-5 text-center">            
        <div class="intro-box p-5 rounded-3 shadow">
            <h2 class="mb-4">Gerencie seu estoque com facilidade</h2>
            <p class="lead mb-5">
                Bem-vindo(a) ao sistema de loja. Use os botões abaixo para gerenciar seus produtos.
            </p>
            <div class="btn-group" role="group">
                <a href="form_cadastrar.php" type="button" class="btn btn-primary btn-lg custom-btn me-3">
                    <i class="fas fa-plus-circle"></i> Cadastrar produtos
                </a>
                <a href="listar_produtos.php" type="button" class="btn btn-secondary btn-lg custom-btn">
                    <i class="fas fa-list"></i> Listar produtos
                </a>
            </div>
        </div>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    </body>
</html>