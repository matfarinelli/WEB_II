<?php

class model_productos
{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_frutos;charset=utf8', 'root', '');
    }

    function getTabla()
    {
        $sentencia = $this->db->prepare('SELECT * FROM producto INNER JOIN categoria ON producto.id_categoria = categoria.id_categoria ORDER BY nombre_categoria asc');
        $sentencia->execute();

        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function addProducto($producto, $precio_1kg, $precio_500g, $precio_250g, $categoria)
    {
        $insert = 'INSERT INTO producto ( nombre, precio_kilo, precio_medio, precio_cuarto, id_categoria) VALUES ( ?,?,?,?,?);';
        $sentencia = $this->db->prepare($insert);
        $sentencia->execute(array($producto, $precio_1kg, $precio_500g, $precio_250g, $categoria));
    }

    function borrarProducto($id)
    {
        $borrar = 'DELETE FROM producto WHERE id_producto=? ';
        $sentencia = $this->db->prepare($borrar);
        $sentencia->execute(array($id));
    }

    // para borrar productos cuando se borra la categoria
    function borrarProductoPorCategoria($id)
    {
        $borrar = 'DELETE FROM producto WHERE id_categoria=? ';
        $sentencia = $this->db->prepare($borrar);
        $sentencia->execute(array($id));
    }

    function actualizarProducto($nombre, $descripcion, $precio_1kg, $precio_500g, $precio_250g, $id_categoria, $id_producto)
    {
        $update = 'UPDATE producto SET nombre = ? , descripcion = ? , precio_kilo = ? , precio_medio = ? , precio_cuarto = ? , id_categoria = ?  WHERE id_producto=?';
        $sentencia = $this->db->prepare($update);
        $sentencia->execute(array($nombre, $descripcion, $precio_1kg, $precio_500g, $precio_250g, $id_categoria, $id_producto));
    }

    function verProducto($id)
    {
        $sentencia = $this->db->prepare('SELECT * FROM producto INNER JOIN categoria ON producto.id_categoria = categoria.id_categoria  WHERE id_producto= ?');
        $sentencia->execute(array($id));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    function verCategoria($id)
    {
        $sentencia = $this->db->prepare('SELECT * FROM producto  WHERE id_categoria= ?');
        $sentencia->execute(array($id));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    // busqueda

    function filtrar($nombre_producto, $descripcion, $precio_kilo, $precio_medio, $precio_cuarto)
    {
        $consulta = 'SELECT * FROM producto INNER JOIN categoria ON producto.id_categoria = categoria.id_categoria WHERE (( nombre LIKE "%"?"%" OR nombre IS NULL) AND 
        (descripcion LIKE "%"?"%") AND
        (((precio_kilo <=? OR precio_kilo IS NULL)  OR 
        (precio_medio <=? OR precio_medio IS NULL) OR
        (precio_cuarto <=? OR precio_cuarto IS NULL))))';

        $sentencia = $this->db->prepare($consulta);
        $sentencia->execute(array($nombre_producto, $descripcion, $precio_kilo, $precio_medio, $precio_cuarto));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
}
