<?php
$installer = $this;
$installer->startSetup();

$setup = Mage::getModel('customer/entity_setup', 'core_setup');

$setup->addAttribute('customer', 'note', array(
    'type'             => 'text',
    'input'            => 'textarea',
    'label'            => 'Customer Notes',
    'global'           => 1,
    'visible'          => 1,
    'required'         => 0,
    'user_defined'     => 0,
    'default'          => '',
    'visible_on_front' => 0,
    'sort_order'       => 900
));

Mage::getSingleton('eav/config')
    ->getAttribute('customer', 'note')
    ->setData('used_in_forms', array('adminhtml_customer'))
    ->save();

$installer->endSetup();

