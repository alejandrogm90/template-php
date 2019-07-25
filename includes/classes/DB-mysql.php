<?php

namespace classes;

class DB {
    private $connection;
    private $result;	
    private static $instance = NULL;
    
    private function __construct(){}

    # To open a new connection
    public function open_Connetion (){
		//(Server IP,username,password,database)
        $this->connection = mysqli_connect('localhost', 'user', 'password', 'database');
        if ($this->connection->connect_errno) { return true; } else { return false; }
    }

    # To close the current connection
    public function close_Connetion () { $this->connection->close(); }
    
    # To send a new query 
    public function set_Query ($consulta) { if($this->result = $this->connection->query($consulta)) { return true; } else { return false; } }
    
    # To obtain all data from the last query
    public function get_Data () { return $this->result->fetch_array(); }

    # To obtain all data from the last query
	public function get_Data_Raw () { return $this->result; }
    
    # To obtain the number of all rows from the last query
    public function get_Num_Rows () { return mysqli_num_rows($this->result); }

    # To open an static connection
    public static function get_Connetion () {
        if (self::$instance == NULL) { self::$instance = new DB(); }
        return self::$instance;
    }
    
}

?>