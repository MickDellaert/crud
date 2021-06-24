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
require 'Controller/ClassesController.php';
require 'Controller/StudentController.php';
require 'Controller/TeacherController.php';



$controller = new HomepageController();

if(isset($_GET['page']) && $_GET['page'] === 'classes') {
    $controller = new ClassesController();
}

if(isset($_GET['page']) && $_GET['page'] === 'students' || isset($_GET['page']) && $_GET['page'] === 'new-student' || isset($_GET['submit-student']) && $_GET['submit-student'] === 'submit-student' || isset($_GET['detail-student'])){
    $controller = new StudentController();
}

if(isset($_GET['page']) && $_GET['page'] === 'teachers') {
    $controller = new TeacherController();
}


//$controller = new StudentController();
//
//if (isset($_GET['new-student']) && $_GET['new-student'] === 'Add') {
//    $controller = new StudentCreateController();
//
//}



$controller->render($_GET, $_POST);