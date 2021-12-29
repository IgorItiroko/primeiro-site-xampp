<?php
require '../config.php';
include '../src/cartazCompleto.php';
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
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../style.css">
    <title>Página administhativa</title>
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
        <h3 class="admin-titulo"> Página Administhativa </h3>

        <table>
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Gênero</th>
                    <th>Sinopse</th>
                    <th>Avaliação</th>
                    <th>Editar</th>
                    <th>Deletar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cartazes as $cartaz) : ?>
                    <tr>
                        <td><?php echo $cartaz['titulo'] ?></td>
                        <td><?php echo $cartaz['genero'] ?></td>
                        <td><?php echo $cartaz['sinopse'] ?></td>
                        <td><?php echo $cartaz['avaliacao'] ?></td>
                        <td><a href="editar-filme.php?id=<?php echo $cartaz['id']; ?>" class="botao"> Editar </a></td>
                        <td><a href="excluir-filme.php?id=<?php echo $cartaz['id']; ?>" class="botao"> Excluir </a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <div class="container-botao">
            <a href="adicionar-filme.php" class="botao-adicionar">Adicionar Filme</a>
        </div>
    </main>


</body>

</html>