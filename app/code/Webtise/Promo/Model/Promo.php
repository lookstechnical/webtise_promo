<?php

class Webtise_Promo_Model_Promo extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('promo/promo');
    }
}