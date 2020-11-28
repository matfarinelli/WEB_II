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

    function registrarse($usuario, $mail, $contrasena)
    {
        $sentencia = $this->db->prepare('INSERT INTO users ( usuario, password, mail) VALUES ( ?,?,?);');
        $sentencia->execute(array($usuario, $contrasena, $mail));
    }

    function getUsuarios()
    {
        $sentencia = $this->db->prepare('SELECT * FROM users');
        $sentencia->execute(array());

        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }


    function borrarUsuario($id)
    {
        $borrar = 'DELETE FROM users WHERE id_user=? ';
        $sentencia = $this->db->prepare($borrar);
        $sentencia->execute(array($id));
    }


    function designar_administrador($nombre_usuario)
    {
        $usuario = $this->getUser($nombre_usuario);

        // datos consulta guardados en variables
        $id = $usuario->id_user;
        $nombre = $usuario->usuario;
        $password = $usuario->password;
        $mail = $usuario->mail;
        $administrador = $usuario->administrador;

        if ($administrador == 1) {
            $administrador = 0;
        } else {
            $administrador = 1;
        }

        $update = 'UPDATE users SET usuario = ? , password = ? , mail = ? , administrador = ?  WHERE id_user=?';
        $sentencia = $this->db->prepare($update);
        $sentencia->execute(array($nombre, $password, $mail, $administrador, $id));
    }
}
