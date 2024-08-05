<?php

class Person
{
    private string $name;
    private int $age;

    public static int $oldAge = 65;

    public function __construct(string $name, int $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        if ($age <= 0) {
            throw new Exception("Age must be greater than 0");
        }
        $this->age = $age;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        if (strlen($name) < 2) {
            throw new Exception("Name must be at least 2 characters");
        }
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function calculateOldAge(): int
    {
        if ($this->age >= self::$oldAge) {
            return 0;
        }

        return self::$oldAge - $this->age;
    }

    public static function showOldAge(): void
    {
//        $this->calculateOldAge();
        echo self::$oldAge . PHP_EOL;
    }

//    public static function storageWrite(string $file): bool
//    {
//        $file = new File($file);
//        $file->validate();
//
//        $storage = new Storage();
//        $storage->putFile($file);
//    }
}