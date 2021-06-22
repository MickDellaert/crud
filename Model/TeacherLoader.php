<?php

class TeacherLoader
{
    private array $teacherArr=[];

    public function getTeachers() {
        $connection = new Dbconnection();
        $pdo = $connection->openConnection();

        $handle = $pdo->prepare('SELECT id, name, email, class_id FROM teacher');
        $handle->execute();
        $teachers = $handle->fetchAll();
        var_dump($teachers);


        foreach ($teachers as $teacher) {
            $this->teacherArr[] = new Teacher((int) $teacher['id'], (string) $teacher['name'], (string) $teacher['email'], (int) $teacher['class_id']);
        }

        return $this->teacherArr;
    }
}
