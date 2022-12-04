<?php

use LDAP\Result;

require_once("nconfig.php");
class Database
{
  public $conn;

  function __construct()
  {
    $this->open_db_connection();
  }



  public function open_db_connection()
  {
    $this->conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if (mysqli_connect_errno()) {
      die("Error connecting to the database" . mysqli_error($this->conn));
    }
  }
  public function query($sql)
  {
    $result = mysqli_query($this->conn, $sql);

    return $result;
  }
  private function confirm_query($result)
  {
    if (!$result) {
      die("Query Failed");
    }
  }
  public function escape_string($string)
  {
    $escape_string = mysqli_real_escape_string($this->conn, $string);
    return $escape_string;
  }
}
$database = new Database;
// $database->open_db_connection();
