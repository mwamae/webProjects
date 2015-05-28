<?php
include 'connect\connection.php';
class Staff {
    
    private $firstName = '';
    private $lastName ='';
    private $project = '';
    private $spec ='';
    private $connection;
    
    function __construct($firstname, $lastname, $pro, $spc){
        
        $this->firstName = $firstname;
        $this->lastName = $lastname;
        $this->project = $pro;
        $this->spec = $spc;
        $this->connection= new Database();
    }
    public function addDatabase(){
        
        $this->connection->db_connect(); 
        $this->connection->addStaff($this->firstName, $this->lastName, $this->project, $this->spec);
        
    }
    public function getStaff(){
        $connection->showStaff();
    }
    public function addStaff(){
        
    }
    public function editStaff(){
        
    }
    public function deleteStaff(){
        
    }
    
}

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $project = $_POST['projects'];
    $spec = $_POST['spec'];
    
    $staff = new Staff($fistName, $lastName, $project, $spec);
    $staff->add();
?>