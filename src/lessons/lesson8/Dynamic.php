<?php

namespace lesson8;
class Dynamic
{
    /*
       *
       * ['fullName' => 'John Doe', 'age' => 25]
       *
       */
    private array $data = [];

    public function __set(string $name, mixed $value): void
    {
        $this->data[$name] = $value;
    }

    public function __get(string $name): mixed
    {
//        isset($this->data[$name]) ? $this->data[$name] : null;
        return $this->data[$name] ?? null;
    }

    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    public function __unset(string $name): void
    {
        unset($this->data[$name]);
    }

    public function __call(string $name, array $arguments)
    {
        $string = match ($name) {
            'sayHello' => 'Hello ' . $arguments[0] ?? '',
        };

        echo $string . PHP_EOL;
    }
}