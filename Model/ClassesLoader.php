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
}
