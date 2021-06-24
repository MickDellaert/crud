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
        if (isset($_GET['page']) && $_GET['page'] === 'students' && empty($POST)) {
            require 'View/students.php';
        }

        if (isset($_POST['new-student'])) {
            $students = $studentLoader->getStudents();
            require 'View/new-student.php';
        }

        if (isset($_POST['submit-student']) && (isset($POST['name']) && isset($POST['email']))) {

            $studentLoader->addStudent($_POST['name'], $_POST['email'], $_POST['class_id']);

            $studentLoader = new StudentLoader();
            $students = $studentLoader->getStudents();

            $classLoader = new ClassesLoader();
            $classes = $classLoader->getClasses();

            require 'View/students.php';
        }

        if (isset($POST['delete-student'])) {

            $studentLoader->deleteStudent($POST['delete-student']);

            $studentLoader = new StudentLoader();
            $students = $studentLoader->getStudents();

            require 'View/students.php';
        }

        if (isset($POST['detail-student'])) {

            $selectedStudent = $studentLoader->getStudentById(intval($POST['detail-student']));
            $selectedClass = ($classLoader->getClassById($selectedStudent->getClassId()));
            $selectedTeacher = ($teacherLoader->getTeacherById($selectedClass->getTeacherId()));

            require 'View/student-details.php';
        }

        if (isset($POST['update-student'])) {

            $selectedStudent = $studentLoader->getStudentById(intval($POST['update-student']));
            $selectedClass = ($classLoader->getClassById($selectedStudent->getClassId()));
            $selectedTeacher = ($teacherLoader->getTeacherById($selectedClass->getTeacherId()));

            require 'View/student-update.php';

        }

        if (isset($_POST['submit-update-student'])) {

            $studentLoader->updateStudent($POST['name'], $POST['email'], $POST['class_id'], $POST['id']);

            $studentLoader = new StudentLoader();
            $students = $studentLoader->getStudents();

            $classLoader = new ClassesLoader();
            $classes = $classLoader->getClasses();

            require 'View/students.php';
        }
    }
}


