<?php
    include 'pedaco.php';
?>

    <link rel="stylesheet" href="style.css">


    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Quatidade</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                
            <!-- listar.php -->
            <?php
                require 'conexao.php';

                $sql = "SELECT * FROM produtos";
                $stmt = $pdo->query($sql);

                while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . $produto['id'] . "</td>";
                    echo "<td>" . $produto['nome'] . "</td>";
                    echo "<td>" . $produto['preco'] . "</td>";
                    echo "<td>" . $produto['quantidade'] . "</td>";

                    // aspas duplas ---> aspas simples
                    echo "
                    <td>
                        <div class='btn-group' role='group'>
                            <a href='form_atualiza.php?id=" . $produto['id'] . "' type='button' class='btn btn-primary btn-lg custom-btn me-3'>Atualizar</a>
                            <a href='excluir.php' type='button' class='btn btn-secondary btn-lg custom-btn'>Apagar</a>
                        </div>
                    </td>
                    ";
                    echo "</tr>";
                }
            ?>
            </tbody>
        </table>
    </div>

    <!-- cdn - js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>