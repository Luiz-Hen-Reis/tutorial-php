<?php
    $id = (int) $_REQUEST['id'];
    $livro = (new DB())->livro($id);

    view("livro", [
        "livro" => $livro
     ]);
