<?php
namespace Factory\Models;

class Users extends Collection
{
    public function __construct(public ?array $users = null)
    {
        $users ??= [
            new User('dmitry.koterov@gmail.com', 'password', 'Дмитрий', 'Котеров'),
            new User('igorsimdyanov@gmail.com', 'password', 'Игорь', 'Симдянов'),
            new User('ivan.petrov@gmail.com', 'password', 'Иван', 'Петров'),
            new User('anna.sidorova@gmail.com', 'password', 'Анна', 'Сидорова'),
            new User('petr.smirnov@gmail.com', 'password', 'Пётр', 'Смирнов'),
        ];
        parent::__construct($users);
    }
}