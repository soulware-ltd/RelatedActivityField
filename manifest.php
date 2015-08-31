<?php
    $manifest =array(
        'acceptable_sugar_flavors' => array('CE','PRO','CORP','ENT','ULT'),
        'acceptable_sugar_versions' => array(
            'regex_matches' => array('6.5.*'),
	 ),
        'author' => 'Spendel Péter, Soulware Ltd.',
        'description' => '',
        'icon' => '',
        'is_uninstallable' => false,
        'name' => 'SoulwareDashboardHandler',
        'published_date' => '2015-08-31',
        'type' => 'module',
        'version' => '0.9.0',
    );
   
    $installdefs =array(
        'id' => 'SoulwareRelatedActivityField',
        'copy' => array(
	    array(
                "from" => "<basepath>/files/custom/Extension/modules/Accounts/Ext/Vardefs/activities_modification_date.field.php", 
                "to" => "custom/Extension/modules/Accounts/Ext/Vardefs/activities_modification_date.field.php"
            ),
            array(
                "from" => "<basepath>/files/custom/Extension/modules/Contacts/Ext/Vardefs/activities_modification_date.field.php", 
                "to" => "custom/Extension/modules/Contacts/Ext/Vardefs/activities_modification_date.field.php"
            ),
            array(
                "from" => "<basepath>/files/custom/Extension/modules/Leads/Ext/Vardefs/activities_modification_date.field.php", 
                "to" => "custom/Extension/modules/Leads/Ext/Vardefs/activities_modification_date.field.php"
            ),
            array(
                "from" => "<basepath>/files/custom/Extension/modules/Opportunities/Ext/Vardefs/activities_modification_date.field.php", 
                "to" => "custom/Extension/modules/Opportunities/Ext/Vardefs/activities_modification_date.field.php"
            ),
            array(
                "from" => "<basepath>/files/custom/modules/Calls/logic_hooks.php", 
                "to" => "custom/modules/Calls/logic_hooks.php"
            ),
            array(
                "from" => "<basepath>/files/custom/modules/Calls/activity_field_update.php", 
                "to" => "custom/modules/Calls/activity_field_update.php"
            ),
            array(
                "from" => "<basepath>/files/custom/modules/Emails/logic_hooks.php", 
                "to" => "custom/modules/Emails/logic_hooks.php"
            ),
            array(
                "from" => "<basepath>/files/custom/modules/Emails/activity_field_update.php", 
                "to" => "custom/modules/Emails/activity_field_update.php"
            ),
            array(
                "from" => "<basepath>/files/custom/modules/Meetings/logic_hooks.php", 
                "to" => "custom/modules/Meetings/logic_hooks.php"
            ),
            array(
                "from" => "<basepath>/files/custom/modules/Meetings/activity_field_update.php", 
                "to" => "custom/modules/Meetings/activity_field_update.php"
            ),
            array(
                "from" => "<basepath>/files/custom/modules/Notes/logic_hooks.php", 
                "to" => "custom/modules/Notes/logic_hooks.php"
            ),
            array(
                "from" => "<basepath>/files/custom/modules/Notes/activity_field_update.php", 
                "to" => "custom/modules/Notes/activity_field_update.php"
            ),
            array(
                "from" => "<basepath>/files/custom/modules/Tasks/logic_hooks.php", 
                "to" => "custom/modules/Tasks/logic_hooks.php"
            ),
            array(
                "from" => "<basepath>/files/custom/modules/Tasks/activity_field_update.php", 
                "to" => "custom/modules/Tasks/activity_field_update.php"
            ),
            
        ),
        'language'=> array (
            //Accounts
            array(
                'from'=> '<basepath>/files/custom/Extension/modules/Accounts/Ext/Language/en_us.activities_modifiaction_date.lang.php',
                'to_module'=> 'Accounts',
                'language'=>'en_us'
            ),
	    array(
                'from'=> '<basepath>/files/custom/Extension/modules/Accounts/Ext/hu_hu.activities_modifiaction_date.lang.php',
                'to_module'=> 'Accounts',
                'language'=>'hu_hu'
            ),
            //Contacts
            array(
                'from'=> '<basepath>/files/custom/Extension/modules/Contacts/Ext/Language/en_us.activities_modifiaction_date.lang.php',
                'to_module'=> 'Contacts',
                'language'=>'en_us'
            ),
	    array(
                'from'=> '<basepath>/files/custom/Extension/modules/Contacts/Ext/hu_hu.activities_modifiaction_date.lang.php',
                'to_module'=> 'Contacts',
                'language'=>'hu_hu'
            ),
            //Leads
            array(
                'from'=> '<basepath>/files/custom/Extension/modules/Leads/Ext/Language/en_us.activities_modifiaction_date.lang.php',
                'to_module'=> 'Leads',
                'language'=>'en_us'
            ),
	    array(
                'from'=> '<basepath>/files/custom/Extension/modules/Leads/Ext/hu_hu.activities_modifiaction_date.lang.php',
                'to_module'=> 'Leads',
                'language'=>'hu_hu'
            ),
            //Opportunities
            array(
                'from'=> '<basepath>/files/custom/Extension/modules/Opportunities/Ext/Language/en_us.activities_modifiaction_date.lang.php',
                'to_module'=> 'Opportunities',
                'language'=>'en_us'
            ),
	    array(
                'from'=> '<basepath>/files/custom/Extension/modules/Opportunities/Ext/hu_hu.activities_modifiaction_date.lang.php',
                'to_module'=> 'Opportunities',
                'language'=>'hu_hu'
            ),
        ),
        
        
    );
?>
