<!DOCTYPE html>
<html lang="pt-br">

<?php
    require 'config.php';
    include './src/cartazCompleto.php';
    $obj_cartaz = new cartazCompleto($mysql);
    $cartaz = $obj_cartaz->encontraPorId($_GET['id']);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $cartaz['titulo'] ?></title>
</head>
<body>
    <header>
        <div class = "logo-container">
            <a href="../index.php">
            <h1><img src="./img/logo-firstweb.png"></h1>
            </a>
            <h2>FirstWEB</h2>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="./autentificar/autenticar.php">Logar Admin</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="area-cartaz">
            <h3><?php echo $cartaz['titulo']; ?></h3>
            <img src="<?php echo $cartaz['imagem'];?>" alt="Cartaz do filme" class="img-cartaz">
            <div class="sinopse">
                <h4>Sinopse</h4>
                <p><?php echo nl2br($cartaz['sinopse']); ?></p>
            </div>
        </div>
        <p class = "genero">Gênero: <?php echo $cartaz['genero']; ?></p>
        <p class="aval">Avaliação: <?php echo $cartaz['avaliacao'] ?></p>

    </main>

    <footer>

    </footer>

</body>
</html>