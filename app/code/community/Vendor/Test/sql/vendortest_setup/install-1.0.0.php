<?php

/** @var $installer Mage_Catalog_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

$installer->addAttribute(Mage_Catalog_Model_Product::ENTITY, 'test_attribute', array(
    'type'                      => 'varchar',
    'backend'                   => '',
    'frontend'                  => '',
    'label'                     => 'test_backend_attribute',
    'input'                     => 'text',
    'class'                     => '',
    'source'                    => '',
    'global'                    => true,
    'visible'                   => true,
    'required'                  => false,
    'user_defined'              => true,
    'default'                   => '0',
    'searchable'                => false,
    'filterable'                => false,
    'comparable'                => false,
    'visible_on_front'          => true,
    'unique'                    => false,
    'apply_to'                  => 'simple,configurable,bundle',
    'is_configurable'           => false,
    'used_in_product_listing'   => 1,
    'group'                     => 'General'

));

$installer->endSetup();