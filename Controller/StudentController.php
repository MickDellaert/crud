<?php
declare(strict_types=1);

class StudentController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        var_dump($GET);
        var_dump($POST);

        $studentLoader = new StudentLoader();
        $students = $studentLoader->getStudents();

        $classLoader = new ClassesLoader();
        $classes = $classLoader->getClasses();

        $teacherLoader = new TeacherLoader();
        $teachers = $teacherLoader->getTeachers();

        //load the view
        if (isset($_GET['page']) && $_GET['page'] === 'students' && empty($_POST)) {
            require 'View/students.php';
        }

        if (isset($_GET['page']) && $_GET['page'] === 'new-student' && empty($_POST)) {
            require 'View/new-student.php';
        }

        if (isset($_POST['submit-student'])) {

            if (isset($_POST['name']) && isset($_POST['email'])) {
                $studentLoader->addStudent($_POST['name'], $_POST['email'], $_POST['class_id']);
            }

            $studentLoader = new StudentLoader();
            $students = $studentLoader->getStudents();

            $classLoader = new ClassesLoader();
            $classes = $classLoader->getClasses();

            require 'View/students.php';
        }

        if (isset($_GET['delete-student'])) {

            $studentLoader->deleteStudent($_GET['delete-student']);

            $studentLoader = new StudentLoader();
            $students = $studentLoader->getStudents();

            require 'View/students.php';
        }

        if (isset($_GET['detail-student'])) {

            $selectedStudent = $studentLoader->getStudentById(intval($_GET['detail-student']));
            $selectedClass = ($classLoader->getClassById($selectedStudent->getClassId()));
            $selectedTeacher = ($teacherLoader->getTeacherById($selectedClass->getTeacherId()));

            require 'View/student-details.php';
        }
    }
}


