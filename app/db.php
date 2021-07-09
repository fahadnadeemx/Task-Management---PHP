<?php
class DB
{
  private $servername = "localhost";
  private $username = "root";
  private $password = "";
  private $database = "fahad";
  public $db;

  /**
   * Connect with database
   * __construct
   */
  function __construct()
  {
    $this->db = new mysqli($this->servername, $this->username, $this->password, $this->database);
    if ($this->db->connect_error) {
      die("Connection failed: " . $this->db->connect_error);
      exit();
    }
  }
}
