<?php
/* Smarty version 3.1.33, created on 2018-09-30 00:16:01
  from '/opt/lampp/htdocs/tpespecialweb2/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5baff9a186e320_63051332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e4460ff7b76e27090023465c3fa95e715ed2514' => 
    array (
      0 => '/opt/lampp/htdocs/tpespecialweb2/templates/home.tpl',
      1 => 1538259359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 1,
    'file:header.tpl' => 1,
    'file:portada.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5baff9a186e320_63051332 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

  <body>
    <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:portada.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <div class="container-float">

      </div>
      <div id="main">
      </div>
      <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </body>

</html>
<?php }
}
