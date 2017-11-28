<?php
class Database
{
    private $DbHost = 'localhost';
    private $DbName = 'test';
    private $DbUser = 'root';
    private $DbPass = '';
    private $table = 'users';

    private $con;

    function __construct(){
        $this->con = $dbh = new PDO("mysql:host=$this->DbHost;dbname=$this->DbName", $this->DbUser, $this->DbPass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function insert($value,$db=null){
        $stmt = $this->con->prepare($value);
        $result = $stmt->execute();
        return $result;
    }
}

$db = new Database();
