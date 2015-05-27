<?php
include 'connect\connection.php';
class Staff {
    
    private $firstName = '';
    private $lastName ='';
    private $project = '';
    private $spec ='';
    
    function __construct($firstname, $lastname, $pro, $spc){
        
        $this->firstName = $firstname;
        $this->lastName = $lastname;
        $this->project = $pro;
        $this->spec = $spc;
    }
    public function add(){
        
        $connection = new Database();
        $this->connection->db_connect(); 
        $this->connection->addStaff($this->fistName, $this->lastName, $this->project, $this->spec);
        
    }
    public function get(){
        $connection->showStaff();
    }
    
}

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $project = $_POST['projects'];
    $spec = $_POST['spec'];
    
    $staff = new Staff($fistName, $lastName, $project, $spec);
    $staff->add();
?>