<?php

class Webtise_Absolutepearls_Block_Adminhtml_Promos_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('promos_form', array('legend'=>Mage::helper('cms')->__('Promo information')));
     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('cms')->__('Title'),
          'class'     => '',
          'required'  => false,
          'name'      => 'title',
      ));
      
     /* $fieldset->addField('sub_title', 'textarea', array(
          'label'     => Mage::helper('cms')->__('Sub Title'),
          'class'     => '',
          'required'  => false,
          'name'      => 'sub_title',
      ));*/
      
      $fieldset->addField('link', 'text', array(
          'label'     => Mage::helper('cms')->__('Link'),
          'class'     => '',
          'required'  => false,
          'name'      => 'link',
      ));
      
      $fieldset->addField('collection', 'text', array(
          'label'     => Mage::helper('cms')->__('Collection'),
          'class'     => '',
          'required'  => true,
          'name'      => 'collection',
      ));
      
      $fieldset->addField('style', 'text', array(
          'label'     => Mage::helper('cms')->__('Style'),
          'class'     => '',
          'required'  => true,
          'name'      => 'style',
      ));


      $fieldset->addField('filename', 'file', array(
          'label'     => Mage::helper('cms')->__('Image'),
          'required'  => false,
          'name'      => 'filename',
	  ));
	  
	  $fieldset->addField('button', 'text', array(
          'label'     => Mage::helper('cms')->__('Button text'),
          'required'  => false,
          'name'      => 'button',
	  ));
	  
	  $fieldset->addField('order', 'text', array(
          'label'     => Mage::helper('cms')->__('Order'),
          'required'  => true,
          'name'      => 'order',
	  ));
		
      
      if ( Mage::getSingleton('adminhtml/session')->getPromosData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getPromosData());
          Mage::getSingleton('adminhtml/session')->getPromosData(null);
      } elseif ( Mage::registry('promos_data') ) {
          $form->setValues(Mage::registry('promos_data')->getData());
      }
      return parent::_prepareForm();
  }
}