<?php

class Database {
    private $host = 'precise64';
    private $user = 'root';
    private $password = 'root';
    private $database= 'cytonn';
    private $sql = '';
    
    public function db_connect(){
        mysql_connect($this->host, $this->user,$this->password) or die(mysql_error());//('Cannot connect to the database');
        mysql_select_db($this->cytonn) or die('Database not Found');
    }
}

?>