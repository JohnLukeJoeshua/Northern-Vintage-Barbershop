<?php
class Employee{
// dbection
private $db;
// Table
private $db_table = "employee";
// Columns
public $id;
public $username;
public $password;
public $designation;
public $created;
public $result;


// Db dbection
public function __construct($db){
$this->db = $db;
}

// GET ALL
public function getEmployees(){
$sqlQuery = "SELECT id, username, password, designation, created FROM " . $this->db_table . "";
$this->result = $this->db->query($sqlQuery);
return $this->result;
}

// CREATE
public function createEmployee(){
// sanitize
$this->username=htmlspecialchars(strip_tags($this->username));
$this->password=htmlspecialchars(strip_tags($this->password));
$this->designation=htmlspecialchars(strip_tags($this->designation));
$this->created=htmlspecialchars(strip_tags($this->created));
$sqlQuery = "INSERT INTO
". $this->db_table ." SET username = '".$this->username."',
password = '".$this->password."',
designation = '".$this->designation."',created = '".$this->created."'";
$this->db->query($sqlQuery);
if($this->db->affected_rows > 0){
return true;
}
return false;
}

// UPDATE
public function getSingleEmployee(){
$sqlQuery = "SELECT id, username, password, designation, created FROM
". $this->db_table ." WHERE id = ".$this->id;
$record = $this->db->query($sqlQuery);
$dataRow=$record->fetch_assoc();
$this->username = $dataRow['username'];
$this->password = $dataRow['password'];
$this->designation = $dataRow['designation'];
$this->created = $dataRow['created'];
}

// UPDATE
public function updateEmployee(){
$this->username=htmlspecialchars(strip_tags($this->username));
$this->password=htmlspecialchars(strip_tags($this->password));
$this->designation=htmlspecialchars(strip_tags($this->designation));
$this->created=htmlspecialchars(strip_tags($this->created));
$this->id=htmlspecialchars(strip_tags($this->id));

$sqlQuery = "UPDATE ". $this->db_table ." SET username = '".$this->username."',
password = '".$this->password."',
designation = '".$this->designation."',created = '".$this->created."'
WHERE id = ".$this->id;

$this->db->query($sqlQuery);
if($this->db->affected_rows > 0){
return true;
}
return false;
}

// DELETE
function deleteEmployee(){
$sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ".$this->id;
$this->db->query($sqlQuery);
if($this->db->affected_rows > 0){
return true;
}
return false;
}
}
?>