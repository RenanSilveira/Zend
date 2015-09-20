<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initLogger(){
        $this->_bootstrap('log');
        Zend_Registry::set('logger', $this->getResource('log'));
    }

}

