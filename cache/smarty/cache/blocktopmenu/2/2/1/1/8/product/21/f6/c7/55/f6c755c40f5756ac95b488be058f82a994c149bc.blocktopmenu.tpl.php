<?php /*%%SmartyHeaderCode:11864018385846df02a715c2-52628201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6c755c40f5756ac95b488be058f82a994c149bc' => 
    array (
      0 => '/var/www/html/prestashop/themes/jarditou/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1478514348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11864018385846df02a715c2-52628201',
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5846df02a79077_94105491',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846df02a79077_94105491')) {function content_5846df02a79077_94105491($_smarty_tpl) {?>	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
		<div class="cat-title">Menu</div>
		<ul class="sf-menu clearfix menu-content">
			<li><a href="http://localhost/prestashop/index.php?id_category=12&amp;controller=category&amp;id_lang=1" title="Outillage">Outillage</a><ul><li><a href="http://localhost/prestashop/index.php?id_category=13&amp;controller=category&amp;id_lang=1" title="Outillage manuel">Outillage manuel</a></li><li><a href="http://localhost/prestashop/index.php?id_category=14&amp;controller=category&amp;id_lang=1" title="Outillage à moteur">Outillage à moteur</a></li></ul></li><li><a href="http://localhost/prestashop/index.php?id_category=15&amp;controller=category&amp;id_lang=1" title="Plants et semis ">Plants et semis </a></li><li><a href="http://localhost/prestashop/index.php?id_category=16&amp;controller=category&amp;id_lang=1" title="Arbres et Arbustes ">Arbres et Arbustes </a></li><li><a href="http://localhost/prestashop/index.php?id_category=17&amp;controller=category&amp;id_lang=1" title="Pots et accessoires">Pots et accessoires</a></li><li><a href="http://localhost/prestashop/index.php?id_category=18&amp;controller=category&amp;id_lang=1" title="Mobilier et Equipement de jardin ">Mobilier et Equipement de jardin </a></li><li><a href="http://localhost/prestashop/index.php?id_category=19&amp;controller=category&amp;id_lang=1" title="Matériaux ">Matériaux </a></li>
							<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="http://localhost/prestashop/index.php?controller=search" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="" />
						</p>
					</form>
				</li>
					</ul>
	</div>
	<!--/ Menu -->
<?php }} ?>
