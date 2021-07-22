<?php
/* Smarty version 3.1.39, created on 2021-07-22 16:14:27
  from 'C:\xampp\htdocs\ExamenBimIII\MVC5toDiver\templates\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f97d43d1ff67_33060137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '002de168477f657cc6761809dde714abc9e08495' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ExamenBimIII\\MVC5toDiver\\templates\\Home.tpl',
      1 => 1626963259,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/header.tpl' => 1,
    'file:templates/Cabeceras/footer.tpl' => 1,
  ),
),false)) {
function content_60f97d43d1ff67_33060137 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
 <div class="fondo light-blue darken-4">

    <div class="container">
        <div class="row">
            <div class="input-field col s12 teal lighten-2">

                <h1 class="center-align black-text">REGISTRO</h1>
            </div>
        </div>
        <form method="post" action="?class=user&method=login">
            <div class="row acento azul claro-4">
                <div class="input-field col s4">
                    <input name="nombre" id="first_name2" type="text" class="validate">
                    <label class="active" for="first_name2">Nombre</label>
                </div>
                <div class="input-field col s4">
                    <input name="pass" id="first_name3" type="password" class="validate">
                    <label class="active" for="first_name3">Password</label>
                </div>
                </div>
                <div class="row orange darken-4">
                    <div class="input-field col s4">
                        <input class="waves-effect waves-light btn" type="submit" value="Enviar"/>
                    </div>
                </div>
            </div>
        </form>
</div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
