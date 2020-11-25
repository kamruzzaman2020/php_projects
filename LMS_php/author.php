

<?php 
   include ('./session_check.php');
   include('./config/connection.php');
   $i =1;
   $query = "select * from author";
   $data = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Library Management System </title>
  <link rel="stylesheet" href="asset/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="asset/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="index.php" class="logo">
      <span class="logo-mini"><b>A</b>LT</span>
     
      <span class="logo-lg"><b>Library Management System </b>LMS</span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
        
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

     <?php include('./side_bar.php'); ?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  

    <!-- Main content -->
    <section class="content container-fluid">


   <div class="row">
        <div class="col-md-8 col-md-offset-2">

   <table class="table">
    <thead>
      <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php 
       while($row = mysqli_fetch_array($data))
            {
              $edit = 'edit_author.php?id='.$row['id'];
              $delete = 'delete_author.php?id='.$row['id'];
        echo ' <tr>
              <td>'.$i++.'.</td>
              <td>'.$row['author_name'].'</td>
              <td> <a href="'.$edit.'">Edit</a> | <a href="'.$delete.'">Delete</a> </td>
            </tr> ';
      }
      ?>

    </tbody>
  </table>
          
        </div>
        
      </div>







    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
   </footer>


  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="asset/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="asset/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>