<?php
declare(strict_types=1);

class Classes
{
    private int $id;
    private string $name;
    private string $location;
    private int $teacher_id;

    public function __construct(int $id, string $name, string $location,int $teacher_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->location = $location;
        $this->teacher_id = $teacher_id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function getTeacherId(): int
    {
        return $this->teacher_id;
    }

}



