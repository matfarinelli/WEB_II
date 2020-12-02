<?php

class model_comentarios
{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_frutos;charset=utf8', 'root', '');
    }

    function addComentario($comentario, $puntaje, $id_user, $id_producto)
    {
        $insert = 'INSERT INTO comentarios ( comentario, puntaje, id_user, id_producto) VALUES ( ?,?,?,?);';
        $sentencia = $this->db->prepare($insert);
        $sentencia->execute(array($comentario, $puntaje, $id_user, $id_producto));

        $lastId = $this->db->lastInsertId();

        return  $lastId;
    }

    // por id de producto
    function getComentarios($id)
    {
        $sentencia = $this->db->prepare('SELECT * FROM comentarios INNER JOIN users ON comentarios.id_user = users.id_user WHERE id_producto=?');
        $sentencia->execute(array($id));

        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    // comentario especifico
    function getComentarioIndividual($id)
    {
        $sentencia = $this->db->prepare('SELECT * FROM comentarios  WHERE id=?');
        $sentencia->execute(array($id));

        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function borrarComentario($id)
    {
        $sentencia = $this->db->prepare('DELETE FROM comentarios WHERE id=?');
        $sentencia->execute(array($id));
    }

    function getAllComentarios()
    {
        $sentencia = $this->db->prepare('SELECT * FROM comentarios ');
        $sentencia->execute();

        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    // para borrar todos los comentarios del usuario
    function borrarComentarioPorUsuario($id)
    {
        $sentencia = $this->db->prepare('DELETE FROM comentarios WHERE id_user=?');
        $sentencia->execute(array($id));
    }
}
