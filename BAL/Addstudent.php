<?php

include '../DAL/DBConnection.php';
$db=new DBconnect();

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$mobile_no=$_POST['mobile_no'];
$gender=$_POST['gender'];
$collage_name=$_POST['collage_name'];
$degree=$_POST['degree'];
$stream=$_POST['stream'];
$year=$_POST['year'];
$city=$_POST['city'];
$address=$_POST['address'];

 $res=$db->add($first_name,$last_name,$email,$mobile_no,$gender,$collage_name,$degree,$stream,$year,$city,$address);
if($res==1)
{
    header("Location: ../s");
}
else
{
    header("Location: ../f");
}