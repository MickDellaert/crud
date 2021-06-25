<?php
declare(strict_types=1);

//Code needs cleanup with conditional statements, lot's of repetition now

class ClassesController
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

        $teacherLoader = new TeacherLoader();
        $teachers = $teacherLoader->getTeachers();

        //load the view
        if (isset($_GET['page']) && $_GET['page'] === 'classes' && empty($POST)) {
            require 'View/classes.php';
        }

        if (isset($_GET['page']) && $_GET['page'] === 'class-new' && empty($_POST)) {
            require 'View/class-new.php';
        }

        if (isset($_GET['class-new']) && empty($POST)) {
            $classes = $classLoader->getClasses();

            require 'View/class-new.php';
        }

        if (isset($_POST['submit-class']) && (isset($POST['name']) && isset($POST['location']))) {

            $classLoader->addClass($_POST['name'], $_POST['location'], $_POST['teacher_id']);

            $classLoader = new ClassesLoader();
            $classes = $classLoader->getClasses();

            $teacherLoader = new TeacherLoader();
            $teachers = $teacherLoader->getTeachers();

            require 'View/classes.php';
        }

        if (isset($POST['delete-class'])) {

            $classLoader->deleteClass($POST['delete-class']);

            $classLoader = new ClassesLoader();
            $classes = $classLoader->getClasses();

            require 'View/classes.php';
        }

        if (isset($POST['detail-class'])) {

            $selectedClass = $classLoader->getClassById(intval($POST['detail-class']));
            $selectedStudent = ($studentLoader->getStudentById($selectedClass->getId()));
            $selectedTeacher = ($teacherLoader->getTeacherById($selectedClass->getTeacherId()));

            require 'View/class-details.php';
        }

        if (isset($POST['update-class'])) {

            $selectedClass = $classLoader->getClassById(intval($POST['update-class']));
//          $selectedStudent = ($studentLoader->getStudentById($selectedClass->getId()));
            $selectedTeacher = ($teacherLoader->getTeacherById($selectedClass->getTeacherId()));

            require 'View/class-update.php';

        }

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
