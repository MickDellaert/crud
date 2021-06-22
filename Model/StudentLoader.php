<?php

class StudentLoader
{
    private array $studentArr=[];

    public function getStudents() {
        $connection = new Dbconnection();
        $pdo = $connection->openConnection();

        $handle = $pdo->prepare('SELECT id, name, email, class_id FROM student');
        $handle->execute();
        $students = $handle->fetchAll();

        foreach ($students as $student) {
            $this->studentArr[] = new Student((int) $student['id'], (string) $student['name'], (string) $student['email'], (int) $student['class_id']);
        }
        return $this->studentArr;
    }
}





