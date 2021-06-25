<?php

class TeacherLoader
{
    private array $teacherArr = [];

    public function getTeachers()
    {
        $connection = new Dbconnection();
        $pdo = $connection->openConnection();

        $handle = $pdo->prepare('SELECT id, name, email, class_id FROM teacher');
        $handle->execute();
        $teachers = $handle->fetchAll();


        foreach ($teachers as $teacher) {
            $this->teacherArr[] = new Teacher((int)$teacher['id'], (string)$teacher['name'], (string)$teacher['email'], (int)$teacher['class_id']);
        }

        return $this->teacherArr;
    }

    public function getTeacherById(int $id)
    {
        foreach ($this->teacherArr as $teacher) {
            if ($teacher->getId() === $id) {
                return $teacher;
            }
        }
    }

    public function addTeacher($name, $email, $class_id)
    {
        $connection = new Dbconnection();
        $pdo = $connection->openConnection();
        $handle = $pdo->prepare('INSERT INTO teacher (name, email, class_id) VALUES (:name, :email, :class_id)');
        $handle->bindValue(':name', $name);
        $handle->bindValue(':email', $email);
        $handle->bindValue(':class_id', $class_id);
        $handle->execute();
    }

    public function deleteTeacher($id)
    {
        $connection = new Dbconnection();
        $pdo = $connection->openConnection();
        $handle = $pdo->prepare('DELETE FROM teacher WHERE :id = id');
        $handle->bindValue(':id', $id);
        $handle->execute();
    }

    public function updateTeacher($name, $email, $class_id, $id)
    {
        $connection = new Dbconnection();
        $pdo = $connection->openConnection();
        $handle = $pdo->prepare('UPDATE teacher set name = :name, email = :email, class_id = :class_id WHERE id = :id');
        $handle->bindValue(':name', $name);
        $handle->bindValue(':email', $email);
        $handle->bindValue(':class_id', $class_id);
        $handle->bindValue(':id', $id);

        $handle->execute();
    }
}
