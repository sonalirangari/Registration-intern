<?php
require_once '../DAL/database_connection.php';

$c=new dbconnect();

$username = $_POST['username'];
$password = $_POST['password'];


 $select = $c->Alogin($username,$password);
while ($row = mysqli_fetch_array($select)) {
    $admin_username = $row['admin_username'];
    $admin_password = $row['admin_password'];
    $id = $row['id'];
}

//if(isset($_POST['submit'])){
if ($username == $admin_username && $password == $admin_password ) 
   {
       ?>
    <script>
        //alert("Login Successfully");
        window.location.href = '../dashboard';
    </script>
   
    <?php
   } else { 
            ?>
    <script>
        alert('Login Failed');
        window.location.href = '../index';
    </script>
    
    <?php
   }
//}
?>

