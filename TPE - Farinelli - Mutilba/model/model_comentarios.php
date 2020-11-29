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
    }

    /*
  function getTabla()
    {
        $sentencia = $this->db->prepare('SELECT * FROM categoria');
        $sentencia->execute();

        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }


    


    function deleteCategoria($id)
    {
                
        $borrar = 'DELETE FROM categoria WHERE id_categoria=? ';
        $sentencia = $this->db->prepare($borrar);
        $sentencia->execute(array($id));
    }

    
    function actualizarCategoria($categoria, $id_categoria)
    {
        $update = 'UPDATE categoria SET nombre_categoria = ?  WHERE id_categoria=?';
        $sentencia = $this->db->prepare($update);
        $sentencia->execute(array($categoria, $id_categoria));
    }*/
}
