<?php


namespace App\Controllers;


use App\Support\Database;

/**
 * Class Student
 * @package App\Controllers
 */
class Student extends Database {

    /**
     * @param $name
     * @param $email
     * @param $cell
     * @param $uname
     */
    public function createStudent($name, $email, $cell, $uname)
    {

        $this ->create("INSERT INTO users (name, email, cell, uname) VALUES ('$name','$email','$cell','$uname')");

    }


    /**
     * Get all student data
     */
    public function allStudents()
    {
        $data = $this ->all('users');

        return $data;
    }




}

