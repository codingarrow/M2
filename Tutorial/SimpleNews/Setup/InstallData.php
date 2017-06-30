<?php

// - Create file: app/code/Tutorial/SimpleNews/Setup/UpgradeData.php (Purpose: This file will check the module version and insert some sample data into the custom table)

namespace Tutorial\SimpleNews\Setup;
 
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
 
class InstallData implements InstallDataInterface
{
    public function install(
        ModuleDataSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $setup->startSetup();
 
        //if (version_compare($context->getVersion(), '1.0.1') < 0) {
            // Get tutorial_simplenews table
            $tableName = $setup->getTable('tutorial_simplenews');
            // Check if the table already exists
            if ($setup->getConnection()->isTableExists($tableName) == true) {
                // Declare data
                $data = [
                    [
                        'title' => 'How to create a simple module',
                        'summary' => 'The summary',
                        'description' => 'The description',
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1
                    ],
                    [
                        'title' => 'Create a module with custom database table',
                        'summary' => 'The summary',
                        'description' => 'The description',
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1
                    ]
                ];
 
                // Insert data to table
                foreach ($data as $item) {
                    $setup->getConnection()->insert($tableName, $item);
                }
            }
        //}
 
        $setup->endSetup();
    }
}