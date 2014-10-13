<?php

class Webtise_Promo_Model_Mysql4_Promo extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the web_id refers to the key field in your database table.
        $this->_init('promo/promo', 'promo_id');
    }
}