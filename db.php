<?php

class db{

  public $conn;
  private $host;
  private $user;
  private $pass;
  private $database;

  public function __construct(){
    $this->db_connect();
  }

  private function db_connect(){
    $this->host = 'localhost';
    $this->user = "root";
    $this->pass = "root";
    $this->database = 'url';
    $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->database);
    if($this->conn->connect_error){
      die("Connection Failed: ". $this->conn->connect_error);
    }
    $this->conn->select_db("links");
    return $this->conn;
  }

  public function db_num($sql){
    $result = $this->conn->query($sql);
    return $result->num_rows;
  }


}//class bracket

?>
