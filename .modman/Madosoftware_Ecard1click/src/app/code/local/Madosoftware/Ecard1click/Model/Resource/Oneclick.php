<?php

class Madosoftware_Ecard1click_Model_Resource_Oneclick extends Mage_Core_Model_Resource_Db_Abstract
{
    /**
     * Resource initialization
     */
    protected function _construct()
    {
        $this->_init('ecard_oneclick', 'id');
    }
}
