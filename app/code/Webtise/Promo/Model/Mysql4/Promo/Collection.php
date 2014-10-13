<?php

class Webtise_Absolutepearls_Model_Mysql4_Promo_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('absolutepearls/promo');
    }
}