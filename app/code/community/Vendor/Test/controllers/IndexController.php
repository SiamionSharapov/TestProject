<?php

class Vendor_Test_IndexController extends Mage_Core_Controller_Front_Action


{
    public function TesttaskAction()
    {
        echo 'hello';
    }

    public function indexAction()
    {
        $this->TesttaskAction();

    }


}