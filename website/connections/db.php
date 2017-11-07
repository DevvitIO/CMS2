<?php
session_start();

class db{
    private static $connection;

    public function connect(){
        $config = parse_ini_file("config.ini");

        if(!isset(self::$connection)){
            self::$connection = new Mysqli($config['host'], $config['username'], $config['password'], $config['dbname']);
        }
        if (self::$connection == false){
            return false;
        }
        return self::$connection;
    }

    public function query($query){
        $connection = $this->connect();
        $result = $connection->query($query);
        return $result;
    }

    public function select($query){
        $rows = array();
        $connection = $this->connect();
        $result = $connection->query($query);
        while ($row = mysqli_fetch_array($result)){
            $rows = $row;
        }
        return $rows;
    }

}

include_once("class.user.php");
$db = new db();
$db->connect();





/* Example of how to select queries, this varies depending on the way public function is setup
$select = $db->select("SELECT username FROM users WHERE id = '1'");
echo $select['username'];

but...
On Line 30, if $rows is changed to $rows[] = $row;
Then, to access the array; you will need to do it like
foreach($select as $val){
  echo $val['username']
}
*/


/* This is how you insert new queries
$db->query("INSERT INTO users(username, password)
VALUES('example','123')"); */
?>
