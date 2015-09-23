<?php

class Application_Form_NewUsuario extends Zend_Form {

    public function init() {
        //nome do formulário
        $this->setName('new');
        //elemento para o campo username
        $nome = new Zend_Form_Element_Text('Nome');
        $login = new Zend_Form_Element_Text('Login');
        $pass = new Zend_Form_Element_Password('Password');

        $nome->setLabel('Login')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addValidator('NotEmpty');

        $login->setLabel('Login')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addValidator('NotEmpty');

        $pass->setLabel('Senha')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addValidator('NotEmpty');

        //botão de submit
        $submit = new Zend_Form_Element_Submit('submit');
        $submit->setLabel('Entrar');
        $submit->setAttrib('id', 'Entrar')->setIgnore(true);
        $submit->setAttrib('class', 'btn btn-success');

        //adicionar os campos ao formulário
        $this->addElements(array($nome, $login, $pass, $submit));
        
        //action e method
        $this->setAction('new')->setMethod('post');
    }

}
