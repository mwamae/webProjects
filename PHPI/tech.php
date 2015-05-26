<?php
include 'connect\connection.php';
class Staff {
    
    private $firstName = '';
    private $lastName ='';
    private $project = '';
    private $spec ='';
    public $connection = '';
    
    function __construct($firstname, $lastname, $pro, $spc){
        
        $this->firstName = $firstname;
        $this->lastName = $lastname;
        $this->project = $pro;
        $this->spec = $spc;
    }
    public function add(){
        
        $this->connection = new Database(); echo $this->connection();
        $this->connection->db_connect(); echo 'add Called';
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