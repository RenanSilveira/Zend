<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initLogger(){
        $this->bootstrap('log');
        Zend_Registry::setClassName('logger', $this->getResource('log'));
    }

}

