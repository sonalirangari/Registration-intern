
<?php

include '../DAL/DBConnection.php';
 session_start();
    $c=new DBConnection();

if(isset($_POST['Upload_LD']))
{
   $tailor_id= $_SESSION['tailor_id'];
   
    $LD_title=$_POST['txt_dtitle'];
    $LD_gender=$_POST['rd_gender'];
    $LD_price=$_POST['txt_tprice'];
 $date=date('m/d/Y' );
    $home_status=0;
   
    $gettime= date("Y-m-d");
    
        $fileExtensions = ['JPEG','JPG','PNG','jpeg','jpg','png']; // Get all the file extensions
    
            if(!empty($_FILES['file_updress']['name'])){
             
     $name = $_FILES['file_updress']['name'];
    $fileSize = $_FILES['file_updress']['size'];
    $fileTmpName  = $_FILES['file_updress']['tmp_name'];
    $fileType = $_FILES['file_updress']['type'];
    $fileExtension = strtolower(end(explode('.',$name)));


    if (!in_array($fileExtension,$fileExtensions)) {
            ?>
     <script>
      alert("This file extension is not allowed. Please upload a JPEG, jpg or PNG file");
       window.location.href='../LD_ViewAll?Id=<?php echo $_SESSION['tailor_id']; ?>&type=<?php echo $_SESSION['tailor_type']; ?>';
      </script>
     
<?php
    }else
    {
       //......... upload file........
        $gettime= date("Y-m-d-H");
        $name=str_replace("$name","$gettime _ $tailor_id.png","$name");
        
        $uploadPath ="../../images/LatestDesign_Img/".$name;
        $fileName= $name;
        move_uploaded_file($fileTmpName, $uploadPath);
        
        //..... insert Record......
 
             $res_LD=$c->LD_Add($tailor_id, $date, $LD_title, $LD_gender, $LD_price, $fileName, $home_status);
       // $res_dress=$c->add_dressVS($tailor_id, $title,$desc,$d_category,$price,$disc,$netprice,$gender,$fileName,$total_qty,$total_qty,$status);

   
     if($res_LD)
     {

         ?>
<script>
  alert ("Latest Design inserted Successfully");
    window.location.href='../LD_ViewAll?Id=<?php echo $_SESSION['tailor_id']; ?>&type=<?php echo $_SESSION['tailor_type']; ?>';
    
    
</script>
<?php
     }
     
     
      else 
     { ?>
         <script>
  alert ("Sorry! Latest Design Not Upload.");
    window.location.href='../LD_ViewAll?Id=<?php echo $_SESSION['tailor_id']; ?>&type=<?php echo $_SESSION['tailor_type']; ?>';
    
    
</script>
   <?php      
     }

         }
    }
    
    
    
 
     
   
}

?>










