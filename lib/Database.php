<?php

class Database {
    
    private  $_host;
    private  $_user;
    private  $_password;
    private  $_db;
    
    public function __construct($host = "localhost", $user = "root", $password = "", $database = null) {
        $this->_host = $host;
        $this->_user = $user;
        $this->_password = $password;
        $this->_db = $database;
     
    }
    
    public function connect()
    {
        $conn = mysql_connect($this->_host,$this->_user,$this->_password);
        if($conn)
        {
            $db = mysql_select_db("bookie");
            if($db)
            {
                return true;
            }
            else 
            {
                throw new Exception("DB Cannot Found");
            }
        }
        else
        {
            throw new Exception("Cannot Connect to Database");
        }
    }
    
    public function close()
    {
        return mysql_close();
    }
    
    public function insertQuery($dataAsocArr,$table,$condition = null)
    {
        
        if(is_array($dataAsocArr))
        {
            try
            {
                
                foreach($dataAsocArr as $key => $val)
                {
                    $columnKey[] = $key;
                    $columnVal[] = "'".$val."'";
                }
                
                if(!isset($condition))
                {
                    $statement = " INSERT INTO $table(".implode(",",$columnKey).") VALUES(".implode(",",$columnVal).") ";
                }
                else
                {
                    $statement = " INSERT INTO $table(".implode(",",$columnKey).") VALUES(".implode(",",$columnVal).") WHERE $condition ";
                }
                
                mysql_query($statement);
                
                
            }
            catch(Exception $Error)
            {
                echo $Error->getMessage();
            }
            
            
            
        }
         
        return true;
    }
    
    public function deleteQuery($table, $condition)
    {
        return mysql_query();
    }
    
    public function selectQuery($column, $table,$condition)
    {
        if(isset($condition))
        {
            return mysql_query("SELECT $column FROM $table WHERE $condition");
        }
        else
        {
            return mysql_query("SELECT $column FROM $table");
        }
        
    }
    
    public function generate_uid()
    {
        
    }
    
    
    
    
    
    
}

?>
