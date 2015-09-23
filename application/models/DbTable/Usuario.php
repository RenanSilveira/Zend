<?php

class Application_Model_DbTable_Usuario extends Zend_Db_Table_Abstract {

    protected $_name = 'usuario';
    protected $_id = 'id';
    protected $_dependentTables = array('Application_Model_DbTable_Tipo');
    protected $_referenceMap = array(
        //Array das tabelas relacionadas
        'tipo' => array(
            //Nome da Tabela relacionada
            'refTableClass' => 'Application_Model_DbTable_Tipo',
            //Campo de relacionamento da tabela pai
            'refColumns' => array('id'),
            //Campo de relacionamento da tabela filha
            'columns' => array('id'),
            //Opcionais
            'onDelete' => self::CASCADE,
            'onUpdate' => self::RESTRICT
        )
    );

}
