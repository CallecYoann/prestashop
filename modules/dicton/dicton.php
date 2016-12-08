<?php

if (!defined('_PS_VERSION_'))
    exit;

class dicton extends Module {

    public function __construct() { //Cette ligne déclare la fonction constructeur de la classe.
        $this->name = 'dicton';
        $this->tab = 'front_office_features';
        $this->version = '1.0';
        $this->author = 'Yoann Callec';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.5', 'max' => '1.6');
        $this->dependencies = array('blockcart');

        parent::__construct(); //Appel du parent du constructeur.

        $this->displayName = $this->l('Dicton du jour');
        $this->description = $this->l('Module affichant un dicton chaque jour.');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!Configuration::get('MYMODULE_NAME'))
            $this->warning = $this->l('No name provided');
    }

    public function install() {
        if (Shop::isFeatureActive())
            Shop::setContext(Shop::CONTEXT_ALL);

        return parent::install() &&
                $this->registerHook('leftColumn') &&
                $this->registerHook('header') &&
                Configuration::updateValue('MYMODULE_NAME', 'cher client');
    }

    public function uninstall() {
        return parent::uninstall() && Configuration::deleteByName('MYMODULE_NAME');
    }

    public function hookDisplayLeftColumn($params) { 
        $this->context->controller->addCSS($this->_path.'css/dicton.css', 'all');
        $sql = 'SELECT * FROM jt_dicton WHERE jour= '.date("d").' AND mois= '.date("m");
            
        if ($db = Db::getInstance()->getRow($sql)) {
        $this->context->smarty->assign(
                array(
                    'my_module_name' => Configuration::get('MYMODULE_NAME'),
                    'my_module_link' => $this->context->link->getModuleLink('dicton', 'display'),
                    'my_module_message' => $this->l('Citation Du Jour: '),
                    'firstname_customer' => $this->context->customer->firstname,
                    'lastname_customer' => $this->context->customer->lastname,
                    'row_jour' => $db['jour'],
                    'row_mois' => $db['mois'],
                    'row_saint' => $db['saint'],
                    'row_dicton' => $db['dicton'],
                )
        );
        }
        return $this->display(__FILE__, 'dicton.tpl');
    }

    public function hookDisplayRightColumn($params) {
        return $this->hookDisplayLeftColumn($params);
    }

    public function hookDisplayHeader() {
        $this->context->controller->addCSS($this->_path . 'css/mymodule.css', 'all');
    }

}

?>
