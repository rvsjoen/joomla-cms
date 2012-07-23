<?php

class JModelDatabaseForm extends JModelDatabaseItem
{
    abstract public function getForm($data = array(), $loadData = true);
    
    public function checkin($pk = null)
    {
        
    }
    
    public function checkout($pk = null)
    {
        
    }
    
    public function validate($form, $data, $group = null)
    {
        
    }
    
    public function publish(&$pks, $value = 1)
    {
        
    }
    
    public function save($data)
    {
        
    }
    
    public function delete(&$pks)
    {
        
    }
    
    protected function loadForm($name, $source = null, $options = array(), $clear = false, $xpath = false)
    {
        
    }
    
    protected function preprocessForm(JForm $form, $data, $group = 'content')
    {
        
    }
    
    protected function loadFormData()
    {
        return array();
    }
    
    protected function canEdit($record)
    {
        
    }    
    
    protected function canDelete($record)
    {
        
    }
    
    protected function canEditState($record)
    {
        
    }
    
    protected function generateNewTitle($category_id, $alias, $title)
    {
        
    }
    
    protected function prepareTable($table)
    {
        
    }
}