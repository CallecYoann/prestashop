<?php /* Smarty version Smarty-3.1.19, created on 2016-12-08 15:04:03
         compiled from "/var/www/html/prestashop/modules/dicton/views/templates/hook/dicton.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48655198658496853c099c2-61670914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a314f23be093093717500e629046d8ba1992fbba' => 
    array (
      0 => '/var/www/html/prestashop/modules/dicton/views/templates/hook/dicton.tpl',
      1 => 1481182571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48655198658496853c099c2-61670914',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'firstname_customer' => 0,
    'lastname_customer' => 0,
    'row_saint' => 0,
    'my_module_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58496853c0d357_39908671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58496853c0d357_39908671')) {function content_58496853c0d357_39908671($_smarty_tpl) {?><!-- Block mymodule -->
<div id="mymodule_block_left" class="block">
  <h4>Souhaite lui sa fête !</h4>
  <div class="block_content">
    <p>Bonjour,
       <?php if (isset($_smarty_tpl->tpl_vars['firstname_customer']->value)&&$_smarty_tpl->tpl_vars['firstname_customer']->value) {?>
           <?php echo $_smarty_tpl->tpl_vars['firstname_customer']->value;?>

           <?php if (isset($_smarty_tpl->tpl_vars['lastname_customer']->value)&&$_smarty_tpl->tpl_vars['lastname_customer']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['lastname_customer']->value;?>

           <?php }?>
       <?php } else { ?>
           World
       <?php }?>
       ! <br><br>
    </p>   
    
    <p>Nous sommes le <?php echo date("d M Y");?>
<br>
    <p>Nous fêtons la <?php echo $_smarty_tpl->tpl_vars['row_saint']->value;?>
<br><br>
    
        
        
        
    <ul>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['my_module_link']->value;?>
" title="Click this link">Click moi pour voir le dicton du jour !</a></li>
    </ul>
  </div>
</div>
<!-- /Block mymodule --><?php }} ?>
