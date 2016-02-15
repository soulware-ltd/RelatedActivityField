<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class UpdateDateEmails {
    
    
    function afterSaveUpdate($bean, $param1, $param2) {
        
        if (!empty($bean->parent_id)){
            $parent_bean = BeanFactory::getBean($bean->parent_type,$bean->parent_id);
        }
        
        if (isset($parent_bean->field_name_map['activities_modification_date'])) {
            $parent_bean->activities_modification_date = $bean->date_modified;
            $parent_bean->save();
        }
    }
}
