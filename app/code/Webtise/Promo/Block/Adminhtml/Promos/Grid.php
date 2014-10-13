<?php

class Webtise_Absolutepearls_Block_Adminhtml_Promos_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
  public function __construct()
  {
      parent::__construct();
      $this->setId('promoGrid');
      $this->setDefaultSort('promo_id');
      $this->setDefaultDir('ASC');
      $this->setSaveParametersInSession(true);
  }

  protected function _prepareCollection()
  {
      $collection = Mage::getModel('absolutepearls/promo')->getCollection();
      $this->setCollection($collection);
      return parent::_prepareCollection();
  }

  protected function _prepareColumns()
  {
      $this->addColumn('promo_id', array(
          'header'    => Mage::helper('cms')->__('ID'),
          'align'     =>'right',
          'width'     => '50px',
          'index'     => 'promo_id',
      ));

      $this->addColumn('collection', array(
          'header'    => Mage::helper('cms')->__('Collection'),
          'align'     =>'left',
          'index'     => 'collection',
      ));
      
      
      $this->addColumn('title', array(
          'header'    => Mage::helper('cms')->__('Title'),
          'align'     =>'left',
          'index'     => 'title',
      ));
      
      $this->addColumn('sub_title', array(
          'header'    => Mage::helper('cms')->__('Sub Title'),
          'align'     =>'left',
          'index'     => 'sub_title',
      ));


	  
	  
     return parent::_prepareColumns();
  }

    

  public function getRowUrl($row)
  {
      return $this->getUrl('*/*/edit', array('id' => $row->getId()));
  }

}