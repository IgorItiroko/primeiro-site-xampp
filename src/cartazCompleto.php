<?php

    class cartazCompleto
    {
        private $mysql;

        public function __construct(mysqli $mysql)
        {
            $this->mysql = $mysql;
        }

        public function exibirTodos(): array
        {
            $resultado = $this->mysql->query('SELECT id, titulo, sinopse, avaliacao, genero, imagem from filmes;');

            $artigos = $resultado->fetch_all(MYSQLI_ASSOC);
            return $artigos;
        }

        public function encontraPorId(string $id): array
        {
            $selecionaCartaz = $this->mysql->prepare("SELECT id, titulo, sinopse, avaliacao, genero, imagem FROM filmes WHERE id = ?");
            $selecionaCartaz->bind_param('s',$id);
            $selecionaCartaz->execute();
            $cartaz = $selecionaCartaz->get_result()->fetch_assoc();
            return $cartaz;
        }

        public function editar(string $titulo, string $sinopse, string $genero, float $avaliacao, string $id): void 
        {
            $editaCartaz = $this->mysql->prepare('UPDATE filmes SET titulo=?, sinopse=?, genero=?, avaliacao=? WHERE id = ?');
            $editaCartaz->bind_param('sssss', $titulo, $sinopse, $genero, $avaliacao, $id);
            $editaCartaz->execute();
        }

        public function remover(string $id): void
        {
            $removerFilme = $this->mysql->prepare('DELETE FROM filmes WHERE id=?');
            $removerFilme->bind_param('s',$id);
            $removerFilme->execute();
        }

        public function adicionar(string $titulo, string $sinopse, string $genero, float $avaliacao, string $imagem){
            $insereFilme = $this->mysql->prepare('INSERT INTO filmes (titulo,sinopse,genero,avaliacao,imagem) VALUES (?,?,?,?,?)');
            $insereFilme->bind_param('sssss', $titulo, $sinopse, $genero, $avaliacao, $imagem);
            $insereFilme->execute();
        }
    }

?>