<?php

class Vendor_Test_Model_Api2_Product_Rest_Guest_V1 extends Mage_Api2_Model_Resource
{
    public function dispatch()
    {

        $productIdList = explode(',', $this->getRequest()->getParam('id'));
        $value = $this->getRequest()->getParam('value');

        foreach ($productIdList as $productId) {
            /** @var Mage_Catalog_Model_Product $product */
            $product = Mage::getModel('catalog/product')->load($productId);
            if ($product->getId() === null) {
                continue;
            }
            $product->setData('test_attribute', $value);
            $product->save();
        }

    }


}