<?php
declare(strict_types = 1);

class HomepageController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        $studentLoader = new StudentLoader();
        $students = $studentLoader->getStudents();
//        var_dump($students);

        $classLoader = new ClassesLoader();
        $classes = $classLoader->getClasses();
//        var_dump($classes);

        $teacherLoader = new TeacherLoader();
        $teachers = $teacherLoader->getTeachers();
//        var_dump($teachers);


        //load the view
        require 'View/homepage.php';
    }
}