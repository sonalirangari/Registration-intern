<?php

class DBconnect{
    
    public $db;
    
    public function __construct() {
        try {
            $db= new mysqli("localhost","root","","student-1");
            $this->db=$db;
            
        } catch (Exception $ex) {
            echo 'An Error Occure';
            
        }
        
    }
    
      public function add($first_name,$last_name,$email,$mobile_no,$gender,$collage_name,$degree,$stream,$year,$city,$address){
            try {
                $con=$this->db;
                $query="INSERT INTO `tbl_student_registration`(`first_name`, `last_name`, `email`, `mobile_no`, `gender`, `collage_name`, `degree`, `stream`, `year`, `city`, `address`) VALUES ('$first_name','$last_name','$email','$mobile_no','$gender','$collage_name','$degree','$stream','$year','$city','$address')";
                $result=$con->query($query);
                return $result;
                 } 
            catch (Exception $exc) {
                 echo $exc->getMessage();
            }
                    
        }
        
       public function add_intern($first_name,$last_name,$email,$aadhar_no,$mobile_no,$alternaet_no,$gender,$new_date,$collage_name,$degree,$stream,$year,$city,$address,$fileName){
            try {
                $con=$this->db;
                $query="INSERT INTO `tbl_intern`(`first_name`, `last_name`,`email`,`aadhar_no`,`mobile_no`,`alternaet_no`,`gender`,`date_of_birth`,`collage_name`, `degree`, `stream`, `year`, `city`, `address`,`img`) VALUES ('$first_name','$last_name','$email','$aadhar_no','$mobile_no','$alternaet_no','$gender','$new_date','$collage_name','$degree','$stream','$year','$city','$address','$fileName')";
                $result=$con->query($query);
                return $result;
                 } 
            catch (Exception $exc) {
                 echo $exc->getMessage();
            }
                    
        }
}
?>
