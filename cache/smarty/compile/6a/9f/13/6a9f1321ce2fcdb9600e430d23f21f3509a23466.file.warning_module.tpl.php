<?php /* Smarty version Smarty-3.1.19, created on 2016-12-08 14:54:45
         compiled from "/var/www/html/prestashop/admin641utormg/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40205144058496625d14214-10557398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a9f1321ce2fcdb9600e430d23f21f3509a23466' => 
    array (
      0 => '/var/www/html/prestashop/admin641utormg/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1478514344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40205144058496625d14214-10557398',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58496625d16b55_01780517',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58496625d16b55_01780517')) {function content_58496625d16b55_01780517($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
