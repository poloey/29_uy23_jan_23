<?php

class Teacher {
  public $con;
  public function __construct () {
    $this->con = new PDO('mysql:dbname=college;host=localhost', 'root', '');
  }
  public function allTeacher() {
     $statement = $this->con->prepare('select * from teachers');
     $statement->execute();
     return $statement->fetchAll(PDO::FETCH_OBJ);
  }
}