<?php

if(!defined('_PS_VERSION_')){
    exit;
}

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;
   



class psnewslettersulayr extends Module implements WidgetInterface{

        //create arry for controls and for button
        public $controls = array();
        public $button = array();

        public function __construct(){
            $this->name = 'psnewslettersulayr';
            $this->tab = 'sularyy';
            $this->version = '1.0.0';
            $this->author = 'sularyy';
            $this->nedd_instance = 0;

            $this->bootstrap = true;

            parent::__construct();

            $this->displayName = $this->trans('',array('module for newslatter'), 'newslettersularyy');
            $this->description = $this->trans('Module for inscription newsletter');
            $this->ps_versions_compliancy = array('min' => '1.7.0.0', 'max' => _PS_VERSION_);
            $this->createControls();   
        }

        private function getDependencies(){
            require_once 'src/GetFormData.php';
        }

        protected function createControls(){
            $this->controls['PSNEWSLETTERSULAIR_NAME'] = array(
                'controlName' => 'PSNEWSLETTERSULAIR_NAME',
                'values' => null,
                'label' => $this->l('Name'),
                'desc' => $this->l('Enter your name')
 
            );
            $this->controls['PSNEWSLETTERSULAIR_EMAIL'] = array(
                'controlName' => 'PSNEWSLETTERSULAIR_EMAIL',
                'values' => null,
                'label' => $this->l('Email'),
                'desc' => $this->l('Enter your email')
 
            );
            $this->controls['PSNEWSLETTERSULAIR_CONDITIONS'] = array(
                'controlName' => 'PSNEWSLETTERSULAIR_CONDITIONS',
                'values' => null,
                'label' => $this->l('Acepto la política de privacidad de datos'),
                'desc' => $this->l('Enter for politics the privacity')
            );

            $this->button['PSNEWSLETTERSULAIR_SUBMIT'] = array(
                'controlName' => 'PSNEWSLETTERSULAIR_SUBMIT',
                'label' => 'enviar'
            );
        }
/*
        public function hookvalidateCustomerFormFields($params){
                print "hola dado";        
                //header('Location: http://www.google.com/');
                //Tools::redirect(<url>
            }
*/

        protected function getCustomValues(array $controler){
          $values=array();
            foreach($controler as $clave){
               //$values = $control['label'];
               $values[$clave['controlName']]['controlName']=$clave['controlName'];
               $values[$clave['controlName']]['label']=$clave['label'];
               $values[$clave['controlName']]['desc']=$clave['desc'];
              /* print $vaule['controlName'];
               print '<br>';
               print $clave['label'];
               print '<br>';
               print $clave['desc'];
               print '<br>';*/
            }
         /*  print $values['PSNEWSLETTERSULAIR_NAME']['controlName'];
            print '<br>';
            print $values['PSNEWSLETTERSULAIR_EMAIL']['controlName'];
            print '<br>';
            print $values['PSNEWSLETTERSULAIR_NAME']['label'];
            print '<br>';
            print $values['PSNEWSLETTERSULAIR_EMAIL']['label'];
            print '<br>';
            print $values['PSNEWSLETTERSULAIR_NAME']['desc'];
            print '<br>';
            print $values['PSNEWSLETTERSULAIR_EMAIL']['desc'];*/
            return $values;
        }


        public function getButtonForm($button){
            $values = array();
            foreach($button as $clave){
                $values[$clave['controlName']]['controlName']=$clave['controlName'];
                $values[$clave['controlName']]['label']=$clave['label'];
            }
          //  print $values['PSNEWSLETTERSULAIR_SUBMIT']['controlName'];
            return $values;
        }


        public function install(){
            Configuration::updateValue('PSNEWSLETTERSULARY_LIVE_MODE', false);

            return parent::install() &&
                $this->registerHook('header') &&
                $this->registerHook('backOfficeHeader') &&
                $this->registerHook('displayFooterBefore');
        }

        public function uninstall(){
            Configuration::deleteByName('psnewslettersulayr');
            return parent::uninstall();
        }

        //this function is backend
        public function getContent(){
            $this->context->smarty->assign($this->name, array(
                'path' => $this->_path,
                'customControls' => $this->controls
            ));

            //return $this->context->smarty->fetch($this->local_path.'views/templates/admin/configure.tpl');   
        }

        
        public function hookHeader(){
            $this->context->controller->registerJavascript('modules-psnewslettersulary',
            'modules/'.$this->name.'/views/js/newsletter.js',['position' => 'botton', 'priority' => 150]);
        }


       public function hookDisplayFooterBefore($params){
           
            $resultInput=$this->getCustomValues($this->controls);
            $resultButton=$this->getButtonForm($this->button);
            $this->context->smarty->assign($this->name, array(
                'path' => $this->_path,
                'customControls' => $resultInput,
                'button' => $resultButton
                //'postAction' => $url= $this->context->link->getModuleLink('psnewslettersulary', 'It should be a module front controller not a File', array('pps' => 1), Configuration::get('PS_SSL_ENABLED'));
            ));

        return $this->context->smarty->fetch($this->local_path.'views/templates/hook/displayFooterBefore.tpl');
    }
        

        public function renderWidget($hookName, array $configuration){

        }

        public function getWidgetVariables($hookName, array $configuration){

        }
       
}