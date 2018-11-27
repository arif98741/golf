<?php

class Database {

    public $link;
    private $username = 'root';
    private $password = '';
    private $host     = 'localhost';
    private $database = 'pouro';

     /*
    @ initial load at the time of creating object
    @ no return job
    */
    function __construct() {
        $this->link = $this->connection();
    }


     /*
    @ database connection
    @ return as connection object
    */
    public function connection() {
        $link = new mysqli($this->host, $this->username, $this->password, $this->database);
        $link->set_charset('utf8');
        
        if (!$link) {
            $this->error = "Connection fail" . $this->link->connect_error;
            return false;
        } else {
            return $link;
        }
    }

    /*
    @ select data from database
    @ return as object
    */
    public function select($query) {
        $stmt = $this->link->query($query);
        if($stmt)
        {
            if ($stmt->num_rows > 0) {
                return $stmt;
            } else {
                return false;
            }
        }
        
    }
    

    /*
    @ select data from database
    @ return as associative array
    */
    public function selectFetchAssoc($query) {
        $stmt = $this->link->query($query) or die($this->link->error . __LINE__);;
        if ($stmt->num_rows > 0) {
            return $stmt->fetch_assoc();
        } else {
            return false;
        }
    }

    /*
    @ insert data into database
    @ return as object
    @ true/false
    */
    // Insert data
    public function insert($query) {
        $insert_row = $this->link->query($query) or die($this->link->error . __LINE__);
        if ($insert_row) {
            return true;
        } else {
            die("Error :(" . $this->link->errno . ")" . $this->link->error);
        }
    }


    /*
    @ update data in database
    @ return as object
    @ true/false
    */
    // Update data
    public function update($query) {
        $update_row = $this->link->query($query) or die($this->link->error . __LINE__);
        if ($update_row) {
            return true;
        } else {
            die("Error :(" . $this->link->errno . ")" . $this->link->error);
        }
    }

    /*
    @ delete data from database
    @ return as object
    @ true/false
    */
    public function delete($query) {
        $stmt = $this->link->query($query);
        if ($stmt) {
            return true;
        } else {
            die("Error :(" . $this->link->errno . ")" . $this->link->error);
        }
    }


    /*
    @ count row of table in database
    @ return as number
    
    */
    public function rowCount($query) {
        $stmt = $this->link->query($query) or die($this->link->error . __LINE__);;
        if ($stmt->num_rows > 0) {
            return $stmt->num_rows;
        } else {
            return false;
        }
    }

}
