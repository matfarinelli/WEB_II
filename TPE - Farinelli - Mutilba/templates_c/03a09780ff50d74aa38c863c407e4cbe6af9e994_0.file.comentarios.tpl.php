<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-01 02:54:47
  from 'C:\xampp\htdocs\matias\!! WEB II\TPE - Repositorio\WEB_II\TPE - Farinelli - Mutilba\templates\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc5a267189260_75732143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03a09780ff50d74aa38c863c407e4cbe6af9e994' => 
    array (
      0 => 'C:\\xampp\\htdocs\\matias\\!! WEB II\\TPE - Repositorio\\WEB_II\\TPE - Farinelli - Mutilba\\templates\\comentarios.tpl',
      1 => 1606787675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc5a267189260_75732143 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="div_tabla" id="div_comentarios">
    <form action="eliminar_comentarios" method="POST">
        <table>
            <thead>
                <th>Usuario</th>
                <th>Comentario</th>
                <th>Puntaje</th>
                <th> </th>
            </thead>



            <tbody class=".comentarios_tabla">

            </tbody>

            
        </table>
    </form>
</div>

<a class="volver" href='productos'> Volver </a><?php }
}
