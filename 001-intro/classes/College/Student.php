<?php


namespace College;


class Student
{
    public string $name;
    public string $lastName;
    public string $faculty;
    public string $specialty;
    public string $course;
    public string $address;
    public string $phoneNumber;

    public function __construct(string $name, string $lastName, string $faculty, string $specialty, string $course, string $address, string $phoneNumber)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->faculty = $faculty;
        $this->specialty = $specialty;
        $this->course = $course;
        $this->address = $address;
        $this->phoneNumber = $phoneNumber;
    }

    public function showInfo():string
    {
        return (
            "<tr>
             <td>$this->name</td>
             <td>$this->lastName</td>
             <td>$this->faculty</td>
             <td>$this->specialty</td>
             <td>$this->course</td>
             <td>$this->address</td>
             <td>$this->phoneNumber</td>
             </tr>"
        );
    }

    public function changeCourse(string $newCourse): string
    {
        return $this->course = $newCourse;
    }
}