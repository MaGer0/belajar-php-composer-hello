<?php

namespace Mager\Belajar;

class Costumer
{
    public function __construct(private string $name) {}

    public function sayHello(string $name = "Guest"): string
    {
        return "Hello {$name}, my name is $this->name";
    }

    public function sayBye(string $name): string
    {
        return "Bye {$name}";
    }
}
