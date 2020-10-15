<?php

class model_login
{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_frutos;charset=utf8', 'root', '');
    }

    function getUser($usuario)
    {
        $sentencia = $this->db->prepare('SELECT * FROM users WHERE usuario = ?');
        $sentencia->execute(array($usuario));

        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
}
