<?php

class Application_Model_Tipo extends Zend_Db_Table_Abstract {

    /**
     * The default table name
     */
    protected $_name = 'tipo';
    protected $_primary = "id";
    protected $_dependentTables = array('Application_Model_Usuario');

}
