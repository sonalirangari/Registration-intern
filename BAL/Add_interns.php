<?php

include '../DAL/DBConnection.php';
$db=new DBconnect();


$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$aadhar_no=$_POST['aadhar_no'];
$mobile_no=$_POST['mobile_no'];
$alternaet_no=$_POST['alternaet_no'];
$gender=$_POST['gender'];

$date_of_birth=$_POST['date_of_birth'];
$timestamp = strtotime($date_of_birth);
$new_date = date("d-m-Y", $timestamp);

$collage_name=$_POST['collage_name'];
$degree=$_POST['degree'];
$stream=$_POST['stream'];
$year=$_POST['year'];
$city=$_POST['city'];
$address=$_POST['address'];



     
//Uploaded Image rename and store in database
        
    //$gettime= date("d-m-Y-H:i:s");
        $fileExtensions = ['JPEG','JPG','PNG','jpeg','jpg','png']; // Get all the file extensions
    
    if(!empty($_FILES['image']['name'])){
    $name = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size'];
    $fileTmpName  = $_FILES['image']['tmp_name'];
    $fileType = $_FILES['image']['type'];
    $fileExtension = strtolower(end(explode('.',$name)));
            
       if (!in_array($fileExtension,$fileExtensions)) {
            ?>
   
<?php
    }else
    {
       //......... upload file........
//        $gettime= date("d-m-Y-H:i:S");
//        $name=str_replace("$name","$gettime_$id.png","$name");
        $b= 'id-'.$mobile_no.'_'.$new_date;
        $name=str_replace("$name","$b.png","$name");
        
        $uploadPath ="../picture/".$name;
        $fileName= $name;
        move_uploaded_file($fileTmpName, $uploadPath);
      
         }
    }

 $res=$db->add_intern($first_name,$last_name,$email,$aadhar_no,$mobile_no,$alternaet_no,$gender,$new_date,$collage_name,$degree,$stream,$year,$city,$address,$fileName);
if($res==1)
{
    header("Location: ../s");
}
else
{
    header("Location: ../f");
}
