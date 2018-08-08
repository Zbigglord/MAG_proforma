<?php

class Hellux_Proforma_Block_Adminhtml_Invoice extends Mage_Adminhtml_Block_Template
{

    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('hellux/proforma/invoice.phtml');
    }
	
	protected function _prepareLayout()
    {
	
    }
	
	protected function getOrder()
	{
		 return Mage::registry('sales_order');
	}
		
	
}