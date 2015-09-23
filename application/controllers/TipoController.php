<?php

class TipoController extends Zend_Controller_Action
{
    /**
     * @var Zend_Log
     */
    private $logger = null;

    public function init() {
        /* Initialize action controller here */
        $this->logger = Zend_Registry::get('logger');
    }

    public function indexAction()
    {

    }
}

