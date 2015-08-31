<?php

function post_install(){
    
        require_once (__DIR__.'/../vendor/autoload.php');
        
        require_once (__DIR__.'/accounts_metadata_merge.config.php');
        require_once (__DIR__.'/contacts_metadata_merge.config.php');
        require_once (__DIR__.'/leads_metadata_merge.config.php');
        require_once (__DIR__.'/opportunities_metadata_merge.config.php');
        
        $metadata = new Soulware\EditMetadataOnInstall\metadataMerge();
        $metadata->setMergeConfig($config_array);
        $metadata->install();
} 