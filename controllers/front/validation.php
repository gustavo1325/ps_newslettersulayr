<?php

/**
 * <ModuleClassName> => Psnewslettersulayr
 * <FileName> validation.php
 */

class PsnewslettersulayrValidationModuleFrontController extends ModuleFrontController{

    public function __construc(){
        parent::construc();
    }

    public function init(){
        parent::init();
    }

    public function postProcess(){
        echo "patata";
    }
    /*public function validar(){
        echo "desde aqui se valida";
        dump($this->module);
    }*/

    public function initContent(){
        parent::initContent();
        $this->context->smarty->assign(
            array(
              'paymentId' => "id", // Retrieved from GET vars
              'paymentStatus' => "pago",
            ));

           
        $this->setTemplate('module:psnewslettersulayr/views/templates/front/validationNewsletter.tpl');
    }
}