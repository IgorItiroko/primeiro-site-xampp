<?php
require '../config.php';
require '../src/cartazCompleto.php';
include '../src/redireciona.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cartaz = new cartazCompleto($mysql);
    $cartaz->remover($_POST['id']);
    redireciona("./index.php");
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
        <h3 class="titulo-function"> Você realmente deseja excluir o filme? </h3>
        <div class="delete-form">
            <form action="excluir-filme.php" method="post">
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" />
                <button class="confirm-button" id="confirm-excluir">Excluir</button>
            </form>
            <button id="botao-cancelar"> Cancelar</button>
            <script type="text/javascript">
                document.getElementById("botao-cancelar").onclick = function() {
                    location.href = "./index.php"
                }
            </script>
        </div>

    </main>
</body>

</html>