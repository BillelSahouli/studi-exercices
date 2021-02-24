<?php
require_once 'Person.php';
require_once 'Course.php';

class Teacher extends Person
{
    public Course $course;

    public function __construct(string $firstName, string $lastName, Course $course)
    {
        parent::__construct($firstName, $lastName);
        $this->course =$course;
    }

    public function getFullName()
    {
        return 'Professeur '.parent::getFullName();
    }

    public function getDescription(): string
    {
        return 'Enseigne '.$this->course->title;
    }


}