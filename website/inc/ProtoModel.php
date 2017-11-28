<?php
class ProtoModel extends Database
{

    private $con;

    public function __construct(){
        parent::__construct($con);
    }

    public function update($value,$db=null){
        $stmt = $this->con->prepare($value);
        $result = $stmt->execute();
        return $result;
    }

    public function insert($value,$db=null){
        $stmt = $this->con->prepare($value);
        $result = $stmt->execute();
        return $result;
    }

    public function save($value,$db=null){
        $stmt = $this->con->prepare($value);
        $result = $stmt->execute();
        return $result;
    }
}

$proto = new ProtoModel();
$proto->update("UPDATE users SET username = 'byebye' WHERE id = '2'");
