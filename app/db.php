<?php
class DB
{
  private $servername = "localhost";
  private $username = "root";
  private $password = "";
  private $database = "fahad";
  public $db;
  public $query;

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

  public function query($query)
  {
    return mysqli_query($this->db, $query);
  }

  public function count($result)
  {
    return mysqli_num_rows($result);
  }

  public function toArray($result)
  {
    $return = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $return[] = $row;
    }
    return $return;
  }
}
