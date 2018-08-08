<?php
class Hellux_Proforma_Adminhtml_Proforma_PrintController extends Mage_Adminhtml_Controller_Action
{

	protected function _initOrder()
    {

		$id = $this->getRequest()->getParam('order_id');
        $order = Mage::getModel('sales/order')->load($id);

        if (!$order->getId()) {
            $this->_getSession()->addError($this->__('To zamówienie już nie istnieje.'));
            $this->_redirect('*/*/');
            $this->setFlag('', self::FLAG_NO_DISPATCH, true);
            return false;
        }
        Mage::register('sales_order', $order);
        Mage::register('current_order', $order);
        return $order;
    }


	public function invoiceAction(){

		if ($order = $this->_initOrder()) {
			echo $this->getLayout()->createBlock('proforma/adminhtml_invoice')->toHtml();
		}

	}

	protected function _isAllowed()
	{
	    return true;
	}	


}
