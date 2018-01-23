<?php

class Person {
  public $name = 'nur';
  public $email = 'nur@gmal.com';
  public function run () {
    echo 'nuruddin running his car';
  }
}

function hello () {
  echo 'hello world';
}

(new Person)->run();

hello();