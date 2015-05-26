<?php

class Database {
    private $host = 'precise64';
    private $user = 'root';
    private $password = 'root';
    private $database= 'cytonn';
    private $sql = '';
    
    public function db_connect(){
        mysql_connect($this->host, $this->user,$this->password) or die(mysql_error);//('Cannot connect to the database');
        mysql_select_db(self::DB_NAME) or die('Database not Found');
    }
   public function addStaff($firstName, $lastName, $project, $spec){
        $sql = mysql_query("
            insert into staff
            (
                firstName,
                lastName,
                projects,
                spec,
            )
            values(
                '$fistName',
                '$lastName',
                '$project',
                '$spec'
            )
            ");
        if($sql){
            echo 'successs';
        }else{
            echo 'fail';
        }
    }
    function showStaff(){
        $sql = mysql_query("select * from staff");
        
    }
   
}

?>