<?php

class Webtise_Absolutepearls_Block_Adminhtml_Promos_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('promos_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('cms')->__('Promo Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('cms')->__('Promo Information'),
          'title'     => Mage::helper('cms')->__('Promo Information'),
          'content'   => $this->getLayout()->createBlock('absolutepearls/adminhtml_promos_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}