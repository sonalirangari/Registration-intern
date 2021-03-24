<!DOCTYPE html>
<html lang="en">
  <?php
 include './Include/head.php';
 ?>
  <body class="app sidebar-mini">
   
<?php
include './Include/header.php';
?>
      
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" style="width: 50px; height: 50px;" src="images/logo.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Axiom Admin</p>
<!--          <p class="app-sidebar__user-designation">Frontend Developer</p>-->
        </div>
      </div>
      <ul class="app-menu">
          <li><a class="app-menu__item" href="dashboard"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">View Info</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
              <li><a class="treeview-item active" href="view-enquiry"><i class="icon fa fa-circle-o"></i>View Enquiry</a></li>
              <li><a class="treeview-item" href="view-intern"><i class="icon fa fa-circle-o"></i>View Intern</a></li>
          </ul>
        </li>
     </ul>
    </aside>


 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i>View Intern</h1>
<!--          <p>Table to display analytical data effectively</p>-->
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><a href="dashboard"><i class="fa fa-home fa-lg"></i></a></li>
            <li class="breadcrumb-item"><a href="view-intern">View Intern</a></li>
          <li class="breadcrumb-item active"><a href="#">Intern</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="tile">
              <h3 class="tile-title">View Intern Information</h3>
            <div class="tile-body">

            <form class="row" method="post">
    
                  <?php
                    include './DAL/database_connection.php';
                    $dbconnect=new dbconnect();
                    $id = $_REQUEST['id'];
                    $select=$dbconnect->view_single_intern($id);
                    while ($row = mysqli_fetch_array($select)){
                    ?>

                <div class="form-group col-md-6">
                  <label class="control-label"><span style="color:red;">*</span>Name</label>
                  <input class="form-control" type="text" name="first_name" id="first_name" value="<?php echo $row['first_name']." ".$row['last_name']; ?>" readonly="" >
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label"><span style="color:red;">*</span>Email</label>
                  <input class="form-control" type="text" name="email" id="email" value="<?php echo $row['email'] ?>" readonly="" >
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label"><span style="color:red;">*</span>Aadhaar Card No</label>
                  <input class="form-control" type="text" name="aadhar_no" id="aadhar_no" value="<?php echo $row['aadhar_no'] ?>" readonly="" >
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label"><span style="color:red;">*</span>Mobile No</label>
                  <input class="form-control" type="text" name="mobile_no" id="mobile_no" value="<?php echo $row['mobile_no'] ?>" readonly="" >
                </div>
                 <div class="form-group col-md-6">
                  <label class="control-label">Alternate No</label>
                  <input class="form-control" type="text" name="alternaet_no" id="alternaet_no" value="<?php echo $row['alternaet_no'] ?>" readonly="" >
                </div>
                 
                <div class="form-group col-md-6">
                 <label class="control-label"><span style="color:red;">*</span>Gender</label>
                  <input class="form-control" type="text" name="gender" id="gender" value="<?php echo $row['gender'] ?>" readonly="">
                 </div> 
                <div class="form-group col-md-6">
                 <label class="control-label"><span style="color:red;">*</span>Date of Birth</label>
                  <input class="form-control" type="text" name="date_of_birth" id="date_of_birth" value="<?php echo $row['date_of_birth'] ?>" readonly="">
                 </div>
                <div class="form-group col-md-6">
                  <label class="control-label"><span style="color:red;">*</span>Collage Name</label>
                  <input class="form-control" type="text" name="collage_name" id="collage_name" value="<?php echo $row['collage_name'] ?>" readonly="">
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label"><span style="color:red;">*</span>Degree</label>
                  <input class="form-control" type="text" name="degree" id="degree" value="<?php echo $row['degree'] ?>" readonly="" >
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label"><span style="color:red;">*</span>Stream</label>
                  <input class="form-control" type="text" name="stream" id="stream" value="<?php echo $row['stream'] ?>" readonly="">
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label"><span style="color:red;">*</span>Year</label>
                  <input class="form-control" type="text" name="year" id="year" value="<?php echo $row['year'] ?>" readonly="">
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label"><span style="color:red;">*</span>City</label>
                  <input class="form-control" type="text" name="city" id="city" value="<?php echo $row['city'] ?>" readonly="">
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label"><span style="color:red;">*</span>Address</label>
                  <input style ="height:100px;" class="form-control" type="text" name="address" id="address" value="<?php echo $row['address'] ?>" readonly="">
                </div>
                
                <div class="form-group col-md-6">
                <label for="image"><span style="color:red;">*</span>Aadhaar Image</label><br>
                <img src="../picture/<?= $row['img']; ?>" alt="" style="width: 500px; height: 250px"><br><br>
                </div>
                
        <?php
          }
          ?>
                   
                <div class="form-group col-md-4 align-self-end">
                    <button formaction="view-intern?id=<?php echo $id; ?>" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i> Back </button>
                </div>
              </form>  
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>