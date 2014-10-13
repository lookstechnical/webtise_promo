<?php

class Webtise_Absolutepearls_Block_Adminhtml_Promos_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'absolutepearls';
        $this->_controller = 'adminhtml_promos';
        
        $this->_updateButton('save', 'label', Mage::helper('cms')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('cms')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('promos_data') && Mage::registry('promos_data')->getId() ) {
            return Mage::helper('cms')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('promos_data')->getTitle()));
        } else {
            return Mage::helper('cms')->__('Add Item');
        }
    }
}