<?php
require '../config.php';
include '../src/cartazCompleto.php';
require '../src/redireciona.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cartaz = new cartazCompleto($mysql);
    $cartaz->adicionar($_POST['titulo'], $_POST['sinopse'], $_POST['genero'], $_POST['avaliacao'], $_POST['imagem']);
    redireciona('./index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../style.css">
    <title>Adicionar Filme</title>
</head>

<body>
    <header>
        <div class="logo-container">
            <a href="../index.php">
                <h1><img src="../img/logo-firstweb.png"></h1>
            </a>
            <h2>FirstWEB</h2>
            <nav>
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="../index.php">Sair do Admin</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <h3 class="titulo-function">Adicionar Filme</h3>
        <form action="adicionar-filme.php" method="post" class="form-function">
            <p>
                <label for="titulo">Digite o título do filme</label>
                <input class="campo-form" type="text" name="titulo" id="titulo" />
            </p>
            <p>
                <label for="sinopse">Digite a sinopse do filme</label>
                <textarea class="campo-form" type="text" name="sinopse" id="sinopse"></textarea>
            </p>
            <p>
                <label for="genero">Digite o gênero do filme</label>
                <input class="campo-form" type="text" name="genero" id="genero" />
            </p>
            <p>
                <label for="avaliacao">Digite a avaliacao do filme</label>
                <input class="campo-form" type="number" step="0.1" name="avaliacao" id="avaliacao" value="0.0" />
            </p>
            <p>
                <label for="imagem">Copie a URL da imagem de cartaz do filme</label>
                <input class="campo-form" type="url" name="imagem" id="imagem">
            </p>
            <p>
                <button class="confirm-button"> Adicionar </button>
            </p>
        </form>

    </main>
</body>

</html>