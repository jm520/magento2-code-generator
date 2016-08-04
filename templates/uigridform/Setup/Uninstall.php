<?php

/**
 * Uninstall.php
 *
 * @copyright Copyright (c) ${generator.time.year} ${comments.company.name}
 * @author    ${comments.user.mail}
 */
namespace ${Vendorname}\${Modulename}\Setup;

use Magento\Framework\Setup\UninstallInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class Uninstall implements UninstallInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     * @codingStandardsIgnoreStart
     */
    public function uninstall(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        //@codingStandardsIgnoreEnd
        $setup->startSetup();

        if ($setup->tableExists('${vendorname}_${modulename}_${modelname}')) {
            $setup->getConnection()->dropTable($setup->getTable('${vendorname}_${modulename}_${modelname}'));
        }

        $setup->endSetup();
    }
}