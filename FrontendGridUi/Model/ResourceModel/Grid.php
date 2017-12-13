<?php
/**
 *
 * Copyright © 2017 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
// MageConf/FrontendGridUi/Model/ResourceModel/Grid.php
namespace MageConf\FrontendGridUi\Model\ResourceModel;

class Grid extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * init
     */
    protected function _construct()
    {
        $this->_init('mageconf_grid', 'grid_id');
    }
}