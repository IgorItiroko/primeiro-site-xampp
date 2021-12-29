<?php
    require './config.php';
    include './src/cartazCompleto.php';
    $cartaz = new cartazCompleto($mysql);
    $cartazes = $cartaz->exibirTodos();

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
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <title>Projeto FirstWEB</title>
</head>
<body>
    <header>
        <div class = "logo-container">
            <a href="index.php">
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
        <h3 class="titulo-da-pagina">Lista de Filmes FirstWeb</h3>
        <?php foreach($cartazes as $cartaz): ?>
            <section class="imgList">
                <div>
                    <a href="cartaz.php?id=<?php echo $cartaz['id'] ?>">
                        <img src='<?php echo $cartaz['imagem'];?>' class="id-imagens">
                    </a>
                    <p class="legenda"> <?php echo $cartaz['titulo']; ?> </p>
                </div>
            </section>
        <?php endforeach; ?>
    </main>

    
</body>

</html>