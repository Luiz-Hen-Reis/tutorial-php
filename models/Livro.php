<?php

    class Livro {
        private $id;
        private $titulo;
        private $autor;
        private $descricao;

        public function __construct($id, $titulo, $autor, $descricao)
        {  
            $this->id = $id;
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->descricao = $descricao;
        }

        public function getId() {
            return $this->id;
        }
    
        public function getTitulo() {
            return $this->titulo;
        }
    
        public function getAutor() {
            return $this->autor;
        }
    
        public function getDescricao() {
            return $this->descricao;
        }
    }