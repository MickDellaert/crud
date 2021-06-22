<?php
declare(strict_types=1);

class Teacher
{
    private int $id;
    private string $name;
    private string $email;
    private int $class_id;

    public function __construct(int $id, string $name, string $email, int $class_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->class_id = $class_id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getClassId(): int
    {
        return $this->class_id;
    }
}