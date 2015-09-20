<?php

class IndexController extends Zend_Controller_Action
{
    /**
     *@var Zend_Log
     */
    private $logger;
    
    public function init()
    {
        /* Initialize action controller here */
        $this->logger = Zend_Registry::get('logger');
    }

    public function indexAction()
    {
        // action body
        $this->logger->log('Mensagem debug', Zend_Log::DEBUG);
    }


}

