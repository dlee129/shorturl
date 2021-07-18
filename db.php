<?php

class db{
  private $servername = "localhost";
  private $database = "url";
  private $username = "root";
  private $password = "root";
  private $table = "links ";
  private $conn;

  public function __construct($servername = 'localhost', $username = 'root', $password = 'root', $database = 'url'){
    $conn = new mysqli($servername, $username, $password);
    if($conn->connect_error){
      die("Connection Failed: ". $conn->connect_error);
    }
    //create database if it doesnt exist
    if($conn->select_db($database) === false){
      if($result = $conn->query("CREATE DATABASE url;")) {

      }
    }
    //select the database to work with
    $conn->select_db($database);
  }

  protected function execute_query($sql){
    $result = $conn->query($sql);
    return $result;
  }

  public function get_rows($url){
    $sql = "SELECT COUNT(*) FROM links WHERE url = $url";
    $results = $this->execute_query($sql);
    return $results;
  }


}//class bracket

?>
