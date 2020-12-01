<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-29 23:02:30
  from 'D:\xampp\htdocs\web2\TPE-parteII\WEB_II\TPE - Farinelli - Mutilba\templates\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc41a769dc8a0_12563898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee35f334db05804d37dead6edf1c1b331b7b8ef1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2\\TPE-parteII\\WEB_II\\TPE - Farinelli - Mutilba\\templates\\comentarios.tpl',
      1 => 1606687105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc41a769dc8a0_12563898 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <form  action="agregar_comentarios" method="POST">
    

    <textarea name="comentarios" rows="5" cols="120">Escribe aquí tus comentarios</textarea>
     <label for="puntaje">Que puntaje le das???</label>
    <select name="puntaje" id="puntaje" form="puntajeform">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        </select>
       
         <button type="submit">Agregar</a></button></td>
    </form>
<?php }
}
