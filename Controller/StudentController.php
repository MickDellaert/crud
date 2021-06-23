<?php
declare(strict_types=1);

class StudentController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.
        $studentLoader = new StudentLoader();
        $students = $studentLoader->getStudents();

        $classLoader = new ClassesLoader();
        $classes = $classLoader->getClasses();



        //load the view
        require 'View/students.php';
    }
}

class StudentCreateController

if (isset($_GET['new-student']) && $_GET['new-student'] === 'Add') {
    require 'View/student_create.php';
}