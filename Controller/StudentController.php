<?php
declare(strict_types=1);

//Code needs cleanup with conditional statements, lot's of repetition now

class StudentController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        // Load the views
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

        if (isset($_GET['page']) && $_GET['page'] === 'new-student' && empty($_POST)) {
            require 'View/new-student.php';
        }

        // Redirecting to create new entity view
        if (isset($_GET['new-student']) && empty($POST)) {
            $students = $studentLoader->getStudents();
            require 'View/new-student.php';
        }

        // Getting inputs by POST and submitting to make a new entity
        if (isset($_POST['submit-student']) && (isset($POST['name']) && isset($POST['email']))) {

            $studentLoader->addStudent($_POST['name'], $_POST['email'], $_POST['class_id']);

            $studentLoader = new StudentLoader();
            $students = $studentLoader->getStudents();

            $classLoader = new ClassesLoader();
            $classes = $classLoader->getClasses();

            require 'View/students.php';
        }

        // Deleting an entity and redirecting to the overview of all records
        if (isset($POST['delete-student'])) {

            $studentLoader->deleteStudent($POST['delete-student']);

            $studentLoader = new StudentLoader();
            $students = $studentLoader->getStudents();

            require 'View/students.php';
        }

        // Getting the details and view for a selected entity
        if (isset($POST['detail-student'])) {

            $selectedStudent = $studentLoader->getStudentById(intval($POST['detail-student']));
            $selectedClass = ($classLoader->getClassById($selectedStudent->getClassId()));
            $selectedTeacher = ($teacherLoader->getTeacherById($selectedClass->getTeacherId()));

            require 'View/student-details.php';
        }

        // Getting the details and view for a selected entity and adding a form to change and submit the entity
        if (isset($POST['update-student'])) {

            $selectedStudent = $studentLoader->getStudentById(intval($POST['update-student']));
            $selectedClass = ($classLoader->getClassById($selectedStudent->getClassId()));
            $selectedTeacher = ($teacherLoader->getTeacherById($selectedClass->getTeacherId()));

            require 'View/student-update.php';

        }

        // Getting the inputs from the to change and submit the entity
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


