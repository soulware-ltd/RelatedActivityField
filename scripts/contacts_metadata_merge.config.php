<?php

if (!isset($config_array)){
    $config_array= array();
}

$content =  array ("Contacts" => 
                array("DetailView" => 
                    array("panels"=> 
                        array("lbl_contact_information" => 
                            array(
                                array(
                                    0 => array('name'=>'activities_modification_date','rname'=>'LBL_ACTIVITIES_MODIFICATION_DATE')
                                )
                            )
                        )
                    )
                )
            );

$merge = new Soulware\EditMetadataOnInstall\metadataMergeConfig("Contacts","detailviewdefs.php","metadata","viewdefs",$content);
$config_array [] = $merge;

$content =  array("Contacts"=>
                array("ACTIVITIES_MODIFICATION_DATE"=> 
                    array (
                        'width' => '20%',
                        'label' => 'LBL_ACTIVITIES_MODIFICATION_DATE',
                        'link' => true,
                        'default' => true,
                    )
                )
            );

$merge = new Soulware\EditMetadataOnInstall\metadataMergeConfig("Contacts","listviewdefs.php","metadata","listViewDefs",$content);
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

$merge = new Soulware\EditMetadataOnInstall\metadataMergeConfig("Contacts","default.php","metadata/subpanels","subpanel_layout",$content);
$config_array[] = $merge;

