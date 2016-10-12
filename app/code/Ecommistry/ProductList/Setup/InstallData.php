<?php 


namespace Ecommistry\ProductList\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory; 
 
class InstallData implements InstallDataInterface {

	private $eavSetupFactory;

	
	public function __construct(EavSetupFactory $eavSetupFactory){
		$this->eavSetupFactory = $eavSetupFactory;
	}

	
	public function install(
		ModuleDataSetupInterface $setup,
		ModuleContextInterface $context
	){
		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);

		$eavSetup->addAttribute(
		    \Magento\Catalog\Model\Product::ENTITY,
		    'handle_display',
		    [
		        'type' => 'int',
		        'backend' => '',
		        'frontend' => '',
		        'label' => 'Display handle',
		        'input' => 'boolean',
		        'class' => '',
		        'source' => '',
		        'global' => 2,
		        'visible' => true,
		        'required' => True,
		        'user_defined' => true,
		        'default' => null,
		        'searchable' => True,
		        'filterable' => False,
		        'comparable' => False,
		        'visible_on_front' => False,
		        'used_in_product_listing' => False,
		        'unique' => True,
		        'apply_to' => '',
		        'system' => 1,
		        'group' => 'General',
		        'option' => array('values' => array(""))
		    ]
		);
	}
}
