<?php

namespace Company;


class Collaborator implements \MyInterface
{
    public string $name;
    public string $lastName;
    public string $position;
    public int $salary;
    public static int $allSalary = 0;
    public static int $countCollaborators = 0;

    public function __construct(string $name, string $lastName, string $position, int $salary)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->position = $position;
        $this->salary = $salary;
        self::$allSalary += $this->salary;
        self::$countCollaborators++;
    }

    public function setRolle($rolle)
    {
        $this->rolle = $rolle;
    }

    public function getRolle()
    {
        return $this->rolle;
    }

    public function getHtml()
    {
        return "<p>{$this->name} {$this->lastName}, позиция: {$this->position}, зарплата: {$this->salary} попугаев», может заниматься разработкой приложения: " . $this->getRolle() ."</p>";
    }

    public static function getInfo()
    {
        echo 'Общее количество сотрудников: ' . self::$countCollaborators . '.<br>' . 'Общая сумма зарплат: ' . self::$allSalary . ' попугаев.';
    }
}