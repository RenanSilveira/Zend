<?php

class Application_Model_Usuario extends Zend_Db_Table_Abstract {

    /**
     * The default table name
     */
    protected $_name = 'usuario';
    protected $_primary = 'id';
    protected $_referenceMap = array(
        "refTableClass" => "Application_Models_Tipo",
        "refColumns" => "id",
        "columns" => "tipo",
        'onDelete' => self::CASCADE,
        'onUpdate' => self::RESTRICT
    );

}
