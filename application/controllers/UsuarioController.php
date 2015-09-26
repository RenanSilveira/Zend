<?php

class UsuarioController extends Zend_Controller_Action {

    /**
     * @var Zend_Log
     */
    private $logger = null;

    public function init() {
        /* Initialize action controller here */
        $this->logger = Zend_Registry::get('logger');
        $this->dbUsuario = new Application_Model_DbTable_Usuario();
        $this->dbTipo = new Application_Model_DbTable_Tipo();
    }

    public function indexAction() {
        
        $this->logger->log('Mensagem debug', Zend_Log::DEBUG);
        $this->view->lista = $this->dbUsuario->fetchAll();
    }

    public function newAction() {
        /* cria um novo formulário
          $form = new Application_Form_NewUsuario();
          $this->view->form = $form;
          $data = $this->_request->getPost();
          $this->view->nome = $data;
         */

        $form = new Application_Form_NewUsuario();
        $this->view->form = $form;
        // Verifica se foram enviados dados via post.              
        if ($this->_request->isPost()) {
            // Pega os dados enviados via POST.                 
            $data = $this->_request->getPost();
            // Caso os dados sejam válidos.                 
            if ($form->isValid($data)) {
                $dados = array(
                    'nome' => $data['Nome'],
                    'login' => $data['Login'],
                    'senha' => $data['Password'],
                    'ativo' => 1,
                    'tipo' => 1,
                );
                $result = $this->dbUsuario->insert($dados);
                if ($result > 0) {
                    $this->view->result = $result;
                    // redirecionando para lista de usuários
                    $this->_helper->redirector('index', 'usuario');
                }
            }
        } else {
            $this->view->form = $form;
        }
    }

    public function deleteAction() {
        $this->logger->log('Mensagem debug', Zend_Log::DEBUG);
        $dbUsuario = new Application_Model_DbTable_Usuario();
        $this->view->lista = $dbUsuario->fetchAll();
    }

}
