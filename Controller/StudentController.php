<?php
declare(strict_types=1);

class StudentController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        $studentLoader = new StudentLoader();
        $students = $studentLoader->getStudents();

        $classLoader = new ClassesLoader();
        $classes = $classLoader->getClasses();

        $teacherLoader = new TeacherLoader();
        $teachers = $teacherLoader->getTeachers();


        //load the view
        if (isset($_GET['page']) && $_GET['page'] === 'students') {
            require 'View/students.php';
        }

        if (isset($_GET['students']) && $_GET['students'] === 'new-student') {
            require 'View/new-student.php';
        }

        if (isset($_GET['submit-student']) && $_GET['submit-student'] === 'submit-student') {
            require 'View/students.php';
        }

        if (isset($_GET['detail-student'])) {

            $selectedStudent = $studentLoader->getStudentById(intval($_GET['detail-student'])) ;
            $selectedClass = ($classLoader->getClassById($selectedStudent->getClassId()));
            $selectedTeacher = ($teacherLoader->getTeacherById($selectedClass->getTeacherId()));


            require 'View/student-details.php';

        }
    }
}


