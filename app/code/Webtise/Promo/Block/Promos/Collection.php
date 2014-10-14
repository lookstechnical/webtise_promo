<?php

class Webtise_Promo_Block_Promos_Collection extends Mage_Core_Block_Template
{

	private $collection;
	
	public function __construct()
	{
		parent::__construct();
		$this->setTemplate('promo/collection.phtml');
	}
	public function getCollection()
	{
		
		$collection = Mage::getModel('promo/promo')->getCollection()
			->addFieldToFilter('collection',array('like' => '%'.$this->collection.'%'))
			;//->sortBy('order','asc');
		return $collection;
	}
	
	
	
	public function setCollectionName($collectionName)
	{
		$this->collection = $collectionName;
	}
}