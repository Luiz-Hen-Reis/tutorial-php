<?php

    class DB {

        private $sql = "select * from livros";
        private $db;

        public function __construct() 
        {
            $this->db = new PDO('sqlite:database.sqlite');
        }
        
        public function livros() {
            $query = $this->db->query($this->sql);
            $items =  $query->fetchAll();

            $retorno = [];

            foreach ($items as $item) {
                $livro = new Livro(
                $item['id'], 
                $item['titulo'], 
                $item['autor'], 
                $item['descricao']
            );
                $retorno[] = $livro;
            }

            return $retorno;
        }

        public function livro($id) {
            $db = $this->db;
            $sql = $this->sql .= " where id = " . $id;

            $query = $db->query($sql);
            $item = $query->fetch();
            
            if ($item) {
                return new Livro(
                    $item['id'], 
                    $item['titulo'], 
                    $item['autor'], 
                    $item['descricao']
                );
            }

            return null;
        }
    }