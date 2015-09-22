<?php

class UsuarioController extends Zend_Controller_Action
{

    /**
     * @var Zend_Log
     */
    private $logger = null;

    public function init()
    {
        /* Initialize action controller here */
        $this->logger = Zend_Registry::get('logger');
    }

    public function indexAction()
    {
        // action body
        $this->logger->log('Mensagem debug', Zend_Log::DEBUG);
        $dbUsuario = new Application_Model_DbTable_Usuario();
        $this->view->lista = $dbUsuario->fetchAll();
    }

    public function newAction()
    {
        // action body
    }

    public function deleteAction()
    {
        // action body
    }


}





