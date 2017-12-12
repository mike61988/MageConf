<?php
/**
 *
 * Copyright © 2017 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
// MageConf/FrontendGridUi/Model/ResourceModel/Grid/Collection.php
namespace MageConf\FrontendGridUi\Model\ResourceModel\Grid;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * init
     */
    protected function _construct()
    {
        $this->_init(
            'MageConf\FrontendGridUi\Model\Grid',
            'MageConf\FrontendGridUi\Model\ResourceModel\Grid'
        );
    }
}