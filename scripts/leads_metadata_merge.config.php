<?php

if (isset($config_array)){
    $config_array= array();
}

$content =  array ("Leads" => 
                array("DetailView" => 
                    array("panels"=> 
                        array("LBL_CONTACT_INFORMATION" => 
                            array(
                                array(
                                    0 => array('name'=>'activities_modification_date','rname'=>'LBL_ACTIVITIES_MODIFICATION_DATE')
                                )
                            )
                        )
                    )
                )
            );

$merge = new Soulware\EditMetadataOnInstall\metadataMergeConfig("Leads","detailviewdefs.php","metadata","viewdefs",$content);
$config_array [] = $merge;

$content =  array("Leads"=>
                array("ACTIVITIES_MODIFICATION_DATE"=> 
                    array (
                        'width' => '20%',
                        'label' => 'LBL_ACTIVITIES_MODIFICATION_DATE',
                        'link' => true,
                        'default' => true,
                    )
                )
            );

$merge = new Soulware\EditMetadataOnInstall\metadataMergeConfig("Leads","listviewdefs.php","metadata","listViewDefs",$content);
$config_array[] = $merge;

$content =  array("list_fields"=>
                array('activities_modification_date' => 
                    array (
                        'vname' => 'LBL_ACTIVITIES_MODIFICATION_DATE',
                        'widget_class' => 'SubPanelDetailViewLink',
                        'width' => '45%',
                        'default' => true,
                    ),
                )
            );

$merge = new Soulware\EditMetadataOnInstall\metadataMergeConfig("Leads","default.php","metadata/subpanels","subpanel_layout",$content);
$config_array[] = $merge;

