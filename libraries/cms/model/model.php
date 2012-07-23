<?php

abstract class JModelDatabaseCMS extends JModelDatabase
{
    public function __construct($config = array())
    {

    }
    
    public static function getInstance($type, $prefix = '', $config = array())
    {

    }

    public static function addIncludePath($path = '', $prefix = '')
    {

    }

    public static function addTablePath($path)
    {

    }

    public function getName()
    {

    }

    public function getTable($name = '', $prefix = 'Table', $options = array())
    {

    }
    
    protected static function _createFileName($type, $parts = array())
    {

    }

    protected function _createTable($name, $prefix = 'Table', $config = array())
    {

    }

    protected function populateState()
    {
        
    }

    protected function cleanCache($group = null, $client_id = 0)
    {

    }
    
    protected function getQuery()
    {
        
    }
    
    protected function getStoreId($id = '')
    {
        
    }
}