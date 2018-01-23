<?php
class Teacher {
  public $con;
  public function __construct () {
    $this->con = new PDO('mysql:host=localhost;dbname=college', 'root', '');
  }
  public function allTeacher () {
    $statement = $this->con->prepare('select * from teachers');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_OBJ);
  }
  public function singleTeacher ($id) {
    $statement = $this->con->prepare("select * from teachers where id=:id");
    $statement->execute([
      ':id' => $id
    ]);
    return $statement->fetch(PDO::FETCH_OBJ);
  }
  public function deleteTeacher($id) {
    $statement = $this->con->prepare('delete from teachers where id=:id');
    $statement->execute([
      ":id" =>  $id
    ]);
    return true;
  }
}