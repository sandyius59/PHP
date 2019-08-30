<?php

/***********************************************************************************
 * @Execution : default node : cmd> singleton.php
 *
 *
 * @Purpose :The purpose of the singleton class is to control object creation, limiting
 * the number of objects to only one. The singleton allows only one entry point to
 * create the new instance of the class.
 *
 * @description :A singleton is a class that allows only a single instance of itself
 * to be created and gives access to that created instance.
 *
 * @overview : singleton desing pattern
 * @author : sandeep kumar maurya <sandeepkumarraj58@gmail.com>
 * @version : 1.0
 * @since : 27-aug-2019
 *
 ***********************************************************************************/

class Teacher
{
    private $name;
    static $number_of_instances = 0;

    public function __construct()
    {
        //initialise the  object
        $this->name = 'James Hetfield';
        self::$number_of_instances++;
        echo "number of  teachers:" . self::$number_of_instances . "\n";
    }
    public function takeAttendance($studentName)
    {
        //mark the student  as present (insert to database)
        echo $studentName . " is present \n";
    }
}
class Student
{
    private $name;
    private $teacher;
    //the teacher of the student
    public function __construct($_name)
    {
        //create a student
        $this->name = $_name;
        $this->teacher = new Teacher();
    }
    public function shoutYourName()
    {
        $this->teacher->takeAttendance($this->name);
    }
}
$kirk = new Student('kirk');
$lars = new Student('Lars');
$robert = new Student('Robert');
$jason = new Student('Jason');
$deepu = new Student('deepu');
$kirk->shoutYourName();
$lars->shoutYourName();
$robert->shoutYourName();
$jason->shoutYourName();
$deepu->shoutyourName();
