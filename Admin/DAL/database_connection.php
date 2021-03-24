<?php

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'student-1');

class dbconnect {

    public $conn;

    
    public function __construct() {
        $conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    
        $this->conn = $conn;
    }
    
  /* View All Registration*/
    
     public function view_student_reg() {
        try {
            $con = $this->conn;
            $query = "SELECT * FROM `tbl_student_registration`";
           $res = $con->query($query);
            return $res;
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }
    
    //    View  Single Registration
      public function view_single($myid){
            try {
             $con=$this->conn;
             $query="SELECT * FROM `tbl_student_registration` WHERE `stud_id` = '$myid'";
             $result=$con->query($query);
             return $result;
            } 
            catch (Exception $exc) {
               echo $exc->getMessage(); 
            }
        }
    
    //    View Intern Registration
    public function view_intern() {
        try {
            $con = $this->conn;
            $query = "SELECT * FROM `tbl_intern`";
           $res = $con->query($query);
            return $res;
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }
    
    //    View  Single Intern Registration
      public function view_single_intern($id){
            try {
             $con=$this->conn;
             $query="SELECT * FROM `tbl_intern` WHERE `id` = '$id'";
             $result=$con->query($query);
             return $result;
            } 
            catch (Exception $exc) {
               echo $exc->getMessage(); 
            }
        }

    
     public function Alogin($username, $password) {
        try {
            $con = $this->conn;
            $query = "SELECT * FROM `tbl_login` WHERE `admin_username`='$username' AND `admin_password`='$password'";
            $res = $con->query($query);
            return $res;
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }
    

    
}
