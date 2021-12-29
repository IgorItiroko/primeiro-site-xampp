<?php
require '../config.php';
include '../src/cartazCompleto.php';
require '../src/redireciona.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cartaz = new cartazCompleto($mysql);
    $cartaz->editar($_POST['titulo'], $_POST['sinopse'], $_POST['genero'], $_POST['avaliacao'], $_POST['id']);
    redireciona('./index.php');
}

$cartazCompleto = new cartazCompleto($mysql);
$cartaz = $cartazCompleto->encontraPorId($_GET['id']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../style.css">
    <title>Editar Filme</title>
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
        <h3 class="titulo-function"> Editar Filme </h3>

        <form action="editar-filme.php" method="post" class="form-function">
            <div>
                <p>
                    <label for="titulo">Digite o novo titulo do filme</label>
                    <input class="campo-form" type="text" name="titulo" id="titulo" value="<?php echo $cartaz['titulo']; ?>" />
                </p>
                <p>
                    <label for="sinopse">Digite a nova sinopse do filme</label>
                    <textarea class="campo-form" type="text" name="sinopse" id="sinopse"> <?php echo $cartaz['sinopse']; ?> </textarea>
                </p>
                <p>
                    <label for="genero">Digite o novo gênero do filme</label>
                    <input class="campo-form" type="text" name="genero" id="genero" value="<?php echo $cartaz['genero']; ?>" />
                </p>
                <p>
                    <label for="avaliacao">Digite a nova avaliação</label>
                    <input class="campo-form" type="number" step="0.1" name="avaliacao" id="avaliacao" value="<?php echo $cartaz['avaliacao']; ?>" />
                </p>
                <p>
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
                </p>
                <p>
                    <button class="confirm-button"> Editar Filme </button>
                </p>
            </div>
        </form>

    </main>
</body>

</html>