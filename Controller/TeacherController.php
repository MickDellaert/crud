<?php
declare(strict_types=1);

//Code needs cleanup with conditional statements, lot's of repetition now

class TeacherController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.
        $teacherLoader = new TeacherLoader();
        $teachers = $teacherLoader->getTeachers();

        $classLoader = new ClassesLoader();
        $classes = $classLoader->getClasses();

        // Load the views
        if (isset($_GET['page']) && $_GET['page'] === 'teachers' && empty($POST)) {
            require 'View/teachers.php';
        }

        if (isset($_GET['page']) && $_GET['page'] === 'teacher-new' && empty($_POST)) {
            require 'View/teacher-new.php';
        }

        // Redirecting to create new entity view
        if (isset($_GET['teacher-new']) && empty($POST)) {
            $teachers = $teacherLoader->getTeachers();
            require 'View/teacher-new.php';
        }

        // Getting inputs by POST and submitting to make a new entity
        if (isset($_POST['submit-teacher']) && (isset($POST['name']) && isset($POST['email']))) {

            $teacherLoader->addTeacher($_POST['name'], $_POST['email'], $_POST['class_id']);

            $teacherLoader = new TeacherLoader();
            $teachers = $teacherLoader->getTeachers();

            $classLoader = new ClassesLoader();
            $classes = $classLoader->getClasses();

            require 'View/teachers.php';
        }

        // Deleting an entity and redirecting to the overview of all records
        if (isset($POST['delete-teacher'])) {

            $teacherLoader->deleteTeacher($POST['delete-teacher']);

            $teacherLoader = new TeacherLoader();
            $teachers = $teacherLoader->getTeachers();

            require 'View/teachers.php';
        }

        // Getting the details and view for a selected entity
        if (isset($POST['detail-teacher'])) {

            $selectedTeacher = $teacherLoader->getTeacherById(intval($POST['detail-teacher']));
            $selectedClass = ($classLoader->getClassById($selectedTeacher->getClassId()));
            $selectedTeacher = ($teacherLoader->getTeacherById($selectedClass->getTeacherId()));

            require 'View/teacher-details.php';
        }

        // Getting the details and view for a selected entity and adding a form to change and submit the entity
        if (isset($POST['update-teacher'])) {

            $selectedTeacher = $teacherLoader->getTeacherById(intval($POST['update-teacher']));
            $selectedClass = ($classLoader->getClassById($selectedTeacher->getClassId()));
            $selectedTeacher = ($teacherLoader->getTeacherById($selectedClass->getTeacherId()));

            require 'View/teacher-update.php';
        }

        // Getting the inputs from the to change and submit the entity
        if (isset($_POST['submit-update-teacher'])) {

            $teacherLoader->updateTeacher($POST['name'], $POST['email'], $POST['class_id'], $POST['id']);

            $teacherLoader = new TeacherLoader();
            $teachers = $teacherLoader->getTeachers();

            $classLoader = new ClassesLoader();
            $classes = $classLoader->getClasses();

            require 'View/teachers.php';
        }
    }
}