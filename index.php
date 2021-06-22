<?php
declare(strict_types=1);

//include all your model files here
require 'Model/Dbconnection.php';
require 'Model/Student.php';
//require 'Model/StudentLoader.php';
//require 'Model/Classes.php';
//require 'Model/ClassLoader.php';
//require 'Model/Student.php';
//require 'Model/TeacherLoader.php';

//include all your controllers here
require 'Controller/HomepageController.php';

$controller = new HomepageController();
if(isset($_GET['page']) && $_GET['page'] === 'info') {
    $controller = new InfoController();
}


$controller->render($_GET, $_POST);