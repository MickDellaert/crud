<?php
declare(strict_types=1);

//include all your model files here
require 'Model/Dbconnection.php';
require 'Model/Student.php';
require 'Model/StudentLoader.php';
require 'Model/Classes.php';
require 'Model/ClassesLoader.php';
require 'Model/Teacher.php';
require 'Model/TeacherLoader.php';

//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/InfoController.php';
require 'Controller/ClassesController.php';
require 'Controller/StudentsController.php';
require 'Controller/TeachersController.php';



$controller = new HomepageController();
if(isset($_GET['page']) && $_GET['page'] === 'info') {
    $controller = new InfoController();
}
if(isset($_GET['page']) && $_GET['page'] === 'classes') {
    $controller = new ClassesController();
}
if(isset($_GET['page']) && $_GET['page'] === 'students') {
    $controller = new StudentsController();
}
if(isset($_GET['page']) && $_GET['page'] === 'teachers') {
    $controller = new TeachersController();
}


$controller->render($_GET, $_POST);