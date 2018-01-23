<?php
require 'models/Teacher.php';

$obj = new Teacher();
$teachers = $obj->allTeacher();

require 'views/indexView.php';

