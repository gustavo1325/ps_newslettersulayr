<?php

if(!defined('_PS_VERSION_')){
    exit;
}

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

class psnewslettersulayr extends Module implements WidgetInterface{

        public function __construct(){
            $this->name = psnewslettersulayr;
            $this->tab = 'sularyy';
            $this->version = '1.0.0';
            $this->author = 'sularyy';
            $this->nedd_instance = 0;

            $this->bootstrap = true;

            parent::__construct();

            $this->displayName = $this->trans('',array('module for newslatter'), 'newslettersularyy');
            $this->description = $this->trans('Module for inscription newsletter');
            $this->ps_versions_compliancy = array('min' => '1.7.0.0', 'max' => _PS_VERSION_);
        }

        public function install(){
            Configuration::updateValue('PSNEWSLETTERSULARY_LIVE_MODE', false);

            return parent::install() &&
                $this->registerHook('header') &&
                $this->registerHook('backOfficeHeader') &&
                $this->registerHook('displayHome') &&
                $this->registerHook('displayLeftColum') &&
                $this->registerHook('footer');
        }

        public function uninstall(){
            Configuration::deleteByName('psnewslettersulayr');
            return parent::uninstall();
        }

        public function renderWidget($hookName, array $configuration){

        }

        public function getWidgetVariables($hookName, array $configuration){

        }
}