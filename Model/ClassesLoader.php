<?php

class ClassesLoader
{
    private array $classArr=[];

    public function getClasses() {
        $connection = new Dbconnection();
        $pdo = $connection->openConnection();

        $handle = $pdo->prepare('SELECT id, name, location, teacher_id FROM classes');
        $handle->execute();
        $classes = $handle->fetchAll();

        foreach ($classes as $class) {
            $this->classArr[] = new Classes((int) $class['id'], (string) $class['name'], (string) $class['location'], (int) $class['teacher_id']);
        }
        return $this->classArr;
    }

    public function getClassById(int $id)
    {
        foreach ($this->classArr as $class) {
            if ($class->getId() === $id) {
                return $class;
            }
        }
    }

    public function addClass($name, $location, $teacher_id)
    {
        $connection = new Dbconnection();
        $pdo = $connection->openConnection();
        $handle = $pdo->prepare('INSERT INTO classes (name, location, teacher_id) VALUES (:name, :location, :teacher_id)');
        $handle->bindValue(':name', $name);
        $handle->bindValue(':location', $location);
        $handle->bindValue(':teacher_id', $teacher_id);
        $handle->execute();
    }

    public function deleteClass($id)
    {
        $connection = new Dbconnection();
        $pdo = $connection->openConnection();
        $handle = $pdo->prepare('DELETE FROM classes WHERE :id = id');
        $handle->bindValue(':id', $id);
        $handle->execute();
    }

    public function updateClass($name, $location, $teacher_id, $id)
    {
        $connection = new Dbconnection();
        $pdo = $connection->openConnection();
        $handle = $pdo->prepare('UPDATE classes set name = :name, location = :location, teacher_id = :teacher_id WHERE id = :id');
        $handle->bindValue(':name', $name);
        $handle->bindValue(':location', $location);
        $handle->bindValue(':teacher_id', $teacher_id);
        $handle->bindValue(':id', $id);

        $handle->execute();
    }
}
