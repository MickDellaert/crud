<?php
declare(strict_types=1);

//Code needs cleanup with conditional statements, lot's of repetition now

class ClassesController
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

        // Load the views
        if (isset($_GET['page']) && $_GET['page'] === 'classes' && empty($POST)) {
            require 'View/classes.php';
        }

        if (isset($_GET['page']) && $_GET['page'] === 'class-new' && empty($_POST)) {
            require 'View/class-new.php';
        }

        // Redirecting to create new entity view
        if (isset($_GET['class-new']) && empty($POST)) {
            $classes = $classLoader->getClasses();

            require 'View/class-new.php';
        }

        // Getting inputs by POST and submitting to make a new entity
        if (isset($_POST['submit-class']) && (isset($POST['name']) && isset($POST['location']))) {

            $classLoader->addClass($_POST['name'], $_POST['location'], $_POST['teacher_id']);

            $classLoader = new ClassesLoader();
            $classes = $classLoader->getClasses();

            $teacherLoader = new TeacherLoader();
            $teachers = $teacherLoader->getTeachers();

            require 'View/classes.php';
        }

        // Deleting an entity and redirecting to the overview of all records
        if (isset($POST['delete-class'])) {

            $classLoader->deleteClass($POST['delete-class']);

            $classLoader = new ClassesLoader();
            $classes = $classLoader->getClasses();

            require 'View/classes.php';
        }

        // Getting the details and view for a selected entity
        if (isset($POST['detail-class'])) {

            $selectedClass = $classLoader->getClassById(intval($POST['detail-class']));
            $selectedStudent = ($studentLoader->getStudentById($selectedClass->getId()));
            $selectedTeacher = ($teacherLoader->getTeacherById($selectedClass->getTeacherId()));

            require 'View/class-details.php';
        }

        // Getting the details and view for a selected entity and adding a form to change and submit the entity
        if (isset($POST['update-class'])) {

            $selectedClass = $classLoader->getClassById(intval($POST['update-class']));
//          $selectedStudent = ($studentLoader->getStudentById($selectedClass->getId()));
            $selectedTeacher = ($teacherLoader->getTeacherById($selectedClass->getTeacherId()));

            require 'View/class-update.php';

        }

        // Getting the inputs from the to change and submit the entity
        if (isset($_POST['submit-update-class'])) {

            $classLoader->updateClass($POST['name'], $POST['location'], $POST['teacher_id'], $POST['id']);

            $classLoader = new ClassesLoader();
            $classes = $classLoader->getClasses();

            $teacherLoader = new TeacherLoader();
            $teachers = $teacherLoader->getTeachers();

            require 'View/classes.php';
        }
    }
}
