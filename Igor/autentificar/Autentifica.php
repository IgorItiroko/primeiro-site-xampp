<?php
    require "../config.php";
    class Autentifica{
        private $mysql;
        private $usuario;
        private $senha;

        public function __construct(mysqli $mysql)
        {
            $this->mysql = $mysql;
            $resultado = $this->mysql->prepare('SELECT login, senha FROM autenticar WHERE login="igorshinji"');
            $resultado->execute();
            $cadastro = $resultado->get_result()->fetch_assoc();
            $this->usuario = $cadastro['login'];
            $this->senha = $cadastro['senha'];
        }

        public function autentificar(string $usuario, string $senha): bool
        {
            if($this->usuario != $usuario || $this->senha != $senha)
                return false;
            return true;
        }
    }

?>