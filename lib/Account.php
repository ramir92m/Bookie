<?php

class Account {
    
    private $_db;
    
    public function __construct() 
    {
        $this->_db = null;
    }
    
    public function getDatabase($dbObj)
    {
        /*
         * It gets the instantiated object from a Database Class
         * 
         */
        
        if($dbObj instanceof Database)
        {
            return $this->_db = $dbObj;
        }
        else
        {
            throw new Exception("Arguement Values is not a Database Object");
        }
    }
    
    public function getLastUID()
    {
        echo mysql_query("SELECT * FROM user_account");
    }
    
    
}

?>
