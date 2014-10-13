<?php
class Webtise_Absolutepearls_Block_Adminhtml_Promos extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	
	protected $_addButtonLabel = 'Add New Promo';
 
    public function __construct()
    {
        parent::__construct();
        $this->_controller = 'adminhtml_promos';
        $this->_blockGroup = 'absolutepearls';
        $this->_headerText = Mage::helper('cms')->__('Promos');
    }    
     public function getPromos()     
     { 
        if (!$this->hasData('promos')) {
            $this->setData('promos', Mage::registry('promos'));
        }
        return $this->getData('promos');
        
    }
}