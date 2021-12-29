<?php
require '../config.php';
require '../src/redireciona.php';
require './Autentifica.php';
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
    <title>Autentificação</title>
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
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="">Logar Admin</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="login-box">
            <h3 class="titulo-function">Autenficação de Administrador</h3>
            <img src="../img/logo-firstweb.png" alt="logo-first-web" class="logo-login">
            <p class="login-pass">Entre com usuario e senha:</p>
            <form action="autenticar.php" method="post" class="acess">
                <ul>
                    <li> <input class="login-form" type="text" name="login" id="login" placeholder="Usuario administrador" /> </li>
                    <li> <input class="password-form" type="password" name="senha" id="senha" placeholder="Senha de acesso" /> </li>
                </ul>
                <p>
                    <button class="login-button">Entrar</button>
                </p>
            </form>
        </div>
    </main>
</body>

</html>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $aut = new Autentifica($mysql);
    if ($aut->autentificar($_POST['login'], $_POST['senha']))
        redireciona('../admin/index.php');
    else {
        echo "<script> 
        Swal.fire({
            text: 'Senha Incorreta!',
            icon: 'error',
            showCancelButton: true,
            cancelButtonText:'Tentar Novamente',
            cancelButtonColor: '#ff4040',
            showConfirmButton: false
          })
          </script>";
    }
}
?>