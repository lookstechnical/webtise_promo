<?php

class Webtise_Absolutepearls_Block_Promos_Collection extends Mage_Core_Block_Template
{

	private $collection;
	
	public function __construct()
	{
		parent::__construct();
		$this->setTemplate('promos/collection.phtml');
	}
	public function getCollection()
	{
		$collection = Mage::getModel('absolutepearls/promo')->getCollection()
			->addFieldToFilter('collection',array('like' => '%'.$this->collection.'%'))
			;//->sortBy('order','asc');
		
		return $collection;
	}
	
	
	
	public function setCollectionName($collectionName)
	{
		$this->collection = $collectionName;
	}
}