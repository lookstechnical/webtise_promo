<?php

$this->startSetup();

$this->run("CREATE TABLE `webtise_promos` (
  `promo_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `style` varchar(255) DEFAULT NULL,
  `collection` varchar(255) DEFAULT NULL,
  `button` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`promo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
");


$this->endSetup();