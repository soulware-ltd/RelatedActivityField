<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class UpdateDate {
    
    
    function afterSaveUpdate($bean, $param1, $param2) {
        if (!empty($bean->parent_id)){
            $parent_bean = BeanFactory::getBean($bean->parent_type,$bean->parent_id);
        
        }else if (!empty ($bean->contact_id)){
            $parent_bean = BeanFactory::getBean("Contacts",$bean->contact_id);
        }
       
        if (isset($parent_bean->field_name_map['activities_modification_date'])) {
            $date = date("Y-m-d H:i:s");
            $parent_bean->activities_modification_date = new DateTime($date) ;
            $parent_bean->save();
        }
        
    }
}
