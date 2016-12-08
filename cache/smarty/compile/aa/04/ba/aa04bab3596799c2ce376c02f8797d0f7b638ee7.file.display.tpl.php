<?php /* Smarty version Smarty-3.1.19, created on 2016-12-08 14:41:53
         compiled from "/var/www/html/prestashop/modules/dicton/views/templates/front/display.tpl" */ ?>
<?php /*%%SmartyHeaderCode:693184517584963212fe8d7-38137238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa04bab3596799c2ce376c02f8797d0f7b638ee7' => 
    array (
      0 => '/var/www/html/prestashop/modules/dicton/views/templates/front/display.tpl',
      1 => 1481182474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '693184517584963212fe8d7-38137238',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row_dicton' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_584963212ff3c3_08666981',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584963212ff3c3_08666981')) {function content_584963212ff3c3_08666981($_smarty_tpl) {?><p id="titreDicton">Dicton du jour :</p><br><br>
<span id="Dicton"><?php echo $_smarty_tpl->tpl_vars['row_dicton']->value;?>
</span>   

<?php }} ?>
