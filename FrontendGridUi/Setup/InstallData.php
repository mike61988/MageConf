<?php
/**
 *
 * Copyright © 2017 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
// MageConf/FrontendGridUi/Setup/InstallData.php
namespace MageConf\FrontendGridUi\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallData implements InstallDataInterface
{
    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '0.0.1')) {
            $data = array(
                array
                (
                    'name'   => 'Joust Duffle Bag',
                    'qty'    => 100,
                    'price'  => 34.00
                ),
                array
                (
                    'name'   => 'Strive Shoulder Pack',
                    'qty'    => 101,
                    'price'  => 32.00
                ),
                array
                (
                    'name'   => 'Crown Summit Backpack',
                    'qty'    => 102,
                    'price'  => 38.00
                ),
                array
                (
                    'name'   => 'Rival Field Messenger',
                    'qty'    => 98,
                    'price'  => 45.949
                )
            );
            foreach ($data as $bind) {
                $setup->getConnection()->insertForce($setup->getTable('mageconf_grid'), $bind);
            }
        }
    }
}