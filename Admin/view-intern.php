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
              <li><a class="treeview-item" href="view-enquiry"><i class="icon fa fa-circle-o"></i>View Enquiry</a></li>
              <li><a class="treeview-item active" href="view-intern"><i class="icon fa fa-circle-o"></i>View Intern</a></li>
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
<!--          <li class="breadcrumb-item">View Info</li>-->
          <li class="breadcrumb-item active"><a href="#">View Intern</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
                <div class="table-responsive">
                <table class="table table-hover table-bordered" id="dataTable">
                  <thead>
                    <tr>
                      <th>Student ID</th>
                      <th>Created Date</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile No</th>
                      <th>Collage Name</th>
                      <th>View</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include './DAL/database_connection.php';
                    $dbconnect=new dbconnect();
                    $d=$dbconnect->view_intern();
                    while ($row= mysqli_fetch_array($d)){
                    ?>
                      <tr>
                        <td><?php echo $row['id']; ?> </td>
                        <td><?php echo $row['created_date']; ?> </td>
                        <td><?php echo $row['first_name']." ".$row['last_name']; ?></td>
                        <td><?php echo $row['email']; ?> </td>
                        <td><?php echo $row['mobile_no']; ?> </td>
                        <td><?php echo $row['collage_name']; ?></td>  
                     <td><a  href="view-intern-page?id=<?php echo $row['id']; ?>"  class="btn btn-info btn-sm" title="View Detail"  data-placement="top" data-toggle="tooltip"><i class="fa fa-eye" aria-hidden="true" ></i></a></td>

                      
                      </tr>
                      
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
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
    
     <!-- Data table Order by Descending -->
    <script type="text/javascript">
    $('#dataTable').DataTable({"order": [[0, "desc"]]});
    </script>
    
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
  