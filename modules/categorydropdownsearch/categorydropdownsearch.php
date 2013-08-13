<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if (!defined('_PS_VERSION_'))
    exit;
error_reporting(0);
class CategoryDropdownsearch extends Module {

    public function __construct() {
        $this->name = 'categorydropdownsearch';
        $this->tab = 'categorydropdownsearch';
        $this->version = '0.5';
        $this->author = 'Anant Thakur';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('Category Dropdown Search Modules');
        $this->description = $this->l('Categories Wise Search Products.');

//		$this->initialize();
    }

    // function work on the install 
    public function install() {
        Configuration::updateValue('MANUFACTURER_DISPLAY_TEXT_NB', 5);
        if (parent::install() == false || !$this->registerHook('leftColumn') || !$this->registerHook('header') || !$this->registerHook('top'))
            ;
        return false;
        return true;
    }

    // uninstall the module

    public function uninstall() {
        if (!parent::uninstall())
            Db::getInstance()->Execute('DELETE FROM `' . _DB_PREFIX_ . 'module`');
        parent::uninstall();
    }

    //defining the block to show the content in the prestoshop
    public function hookHeader($params)
	{
		
//		$this->context->controller->addCSS(($this->_path).'blockdropdowncategories.css', 'all');
                Tools::addCSS(($this->_path).'categorydropdownsearch.css', 'all');
//                $this->context->controller->addCSS('categorydropdownsearch.css', 'all'); 
	}

    public function hookRightColumn($params) {

        $this->smarty->assign(array(
            'manufacturers' => Category::getCategories(),
            'text_list_nb' => Configuration::get('MANUFACTURER_DISPLAY_TEXT_NB'),
            'display_link_manufacturer' => Configuration::get('PS_DISPLAY_SUPPLIERS'),
        ));


        return $this->display(__FILE__, 'categorydropdownsearch.tpl');
    }

    // assinging the specific hook to the module
    public function hookLeftColumn($params) {

        return $this->hookRightColumn($params);
    }

    public function hookTop($params) {
        return $this->hookRightColumn($params);
    }

    //for getting the content form the module form

//    public function getContent() {
//        $output = '<h2>' . $this->displayName . '</h2>';
//        if (Tools::isSubmit('submitCustomModule')) {
//            $number_logos = (int) (Tools::getValue('text_nb'));
//            if (!Validate::isUnsignedInt($number_logos))
//                $errors[] = $this->l('Invalid number of elements');
//            else {
//                Configuration::updateValue('MANUFACTURER_DISPLAY_TEXT_NB', $number_logos);
//            }
//            if (isset($errors) && count($errors))
//                $output .= $this->displayError(implode('<br />', $errors));
//            else
//                $output .= $this->displayConfirmation($this->l('Settings updated'));
//        }
//        return $output . $this->displayForm();
//    }
//
//    //display form in the admin side
//    public function displayForm() {
//        $output = '
//		<form action="' . Tools::safeOutput($_SERVER['REQUEST_URI']) . '" method="post">
//			<fieldset><legend><img src="' . $this->_path . 'logo.gif" alt="" title="" />' . $this->l('Settings') . '</legend>
//				<label>' . $this->l('Show maximum number of logo') . '</label>
//				<div class="margin-form">
//					
//					&nbsp;&nbsp;&nbsp;' . $this->l('Display') . ' <input type="text" size="2" name="text_nb" value="' . (int) (Tools::getValue('text_nb', Configuration::get('MANUFACTURER_DISPLAY_TEXT_NB'))) . '" /> ' . $this->l('elements') . '
//					
//				</div>
//				
//				
//				<center><input type="submit" name="submitCustomModule" value="' . $this->l('Save') . '" class="button" /></center>
//			</fieldset>
//		</form>';
//        return $output;
//    }

}

?>
