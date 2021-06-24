<?php

class StudentLoader
{
    private array $studentArr = [];

    public function getStudents()
    {
        $connection = new Dbconnection();
        $pdo = $connection->openConnection();

        $handle = $pdo->prepare('SELECT id, name, email, class_id FROM student');
        $handle->execute();
        $students = $handle->fetchAll();

        foreach ($students as $student) {
            $this->studentArr[] = new Student((int)$student['id'], (string)$student['name'], (string)$student['email'], (int)$student['class_id']);
        }
        return $this->studentArr;
    }

    public function getStudentById(int $id)
    {
        foreach ($this->studentArr as $student) {
            if ($student->getId() === $id) {
                return $student;
            }
        }
    }

    public function addStudent($name, $email, $class_id)
    {
        $connection = new Dbconnection();
        $pdo = $connection->openConnection();
        $handle = $pdo->prepare('INSERT INTO student (name, email, class_id) VALUES (:name, :email, :class_id)');
        $handle->bindValue(':name', $name);
        $handle->bindValue(':email', $email);
        $handle->bindValue(':class_id', $class_id);
        $handle->execute();
    }
}





