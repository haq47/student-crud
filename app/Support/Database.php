<?php

namespace  App\Support;

use mysqli;

/**
 * Class Database
 * @package App\Support
 */
abstract class Database {

    // Attributes
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db   = "crud";

    private $connection ;


    /**
     * database connection
     * @return mysqli
     */
    private function connection()
    {
      return $this -> connection = new mysqli($this ->host, $this ->user, $this ->pass, $this ->db );
    }

    /**
     * Insert data to database table
     * @param $sql
     */
    protected function create($sql){
        return $this ->connection() -> query($sql);
    }


    /**
     * Select  all data form any table
     * @param $table
     */
    protected function all($table, $order = 'DESC'){
        return $this ->connection() -> query("SELECT * FROM $table ORDER BY id $order");
    }


    /**
     *
     * @param $table
     * @param $id
     */
    protected function find($table, $id){

    }

    /**
     * Update any data from any table
     * @param $sql
     */
    protected function update($sql){

    }

    /**
     * Delete any data from any table
     * @param $table
     * @param $id
     */
    protected function delete($table, $id){

    }


}