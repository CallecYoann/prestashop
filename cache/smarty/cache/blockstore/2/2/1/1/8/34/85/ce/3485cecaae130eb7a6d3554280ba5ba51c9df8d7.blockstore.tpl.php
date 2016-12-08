<?php /*%%SmartyHeaderCode:14686850855846df02b80d75-29895417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3485cecaae130eb7a6d3554280ba5ba51c9df8d7' => 
    array (
      0 => '/var/www/html/prestashop/themes/jarditou/modules/blockstore/blockstore.tpl',
      1 => 1478514348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14686850855846df02b80d75-29895417',
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
    'store_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5846df02b8b372_25092612',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846df02b8b372_25092612')) {function content_5846df02b8b372_25092612($_smarty_tpl) {?>
<!-- Block stores module -->
<div id="stores_block_left" class="block">
	<p class="title_block">
		<a href="http://localhost/prestashop/index.php?controller=stores" title="Nos magasins">
			Nos magasins
		</a>
	</p>
	<div class="block_content blockstore">
		<p class="store_image">
			<a href="http://localhost/prestashop/index.php?controller=stores" title="Nos magasins">
				<img class="img-responsive" src="http://localhost/prestashop/modules/blockstore/store.jpg" alt="Nos magasins" />
			</a>
		</p>
				<div>
			<a 
			class="btn btn-default button button-small" 
			href="http://localhost/prestashop/index.php?controller=stores" 
			title="Nos magasins">
				<span>Découvrez nos magasins<i class="icon-chevron-right right"></i></span>
			</a>
		</div>
	</div>
</div>
<!-- /Block stores module -->
<?php }} ?>
