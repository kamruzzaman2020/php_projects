
<?php 
   include ('./session_check.php');
   include('./config/connection.php');
   $id = $_GET['id'];
   $error = '';
   $category_query = "select * from category ";
   $category_data = mysqli_query($con,$category_query);
   $author_query = "select * from  author ";
   $author_data = mysqli_query($con,$author_query);
   
   $book_query = "select books.*,category.category_name,author.author_name from books inner join category on books.category_id = category.id inner join author on books.author_id = author.id where books.id = '$id'";
   $book_data = mysqli_query($con,$book_query);
   $book_data = mysqli_fetch_array($book_data);

   if(isset($_POST['update_book'])){
     $book_name = $_POST['book_name'];
     $category_id = (int)$_POST['category_id'];
     $author_id = (int)$_POST['author_id'];
     $isbn = (int)$_POST['isbn'];
     $price = (float)$_POST['price'];

     $query = "update books set book_name = '".$book_name."',category_id = '".$category_id."' ,author_id = '".$author_id."',isbn = '".$isbn."' ,price = '".$price."' where id = '$id'";
      if(mysqli_query($con,$query)){
       header("Location: book.php");
    }
    else{ $error = 'Error occurred..Try again!!';}
   }

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
  <div class="col-md-4 col-md-offset-3">
      <form role="form" method="post">
                <div class="form-group">
                  <label ><?php echo $error; ?></label>
                </div>
                <div class="form-group">
                  <label for="book">Book Name</label>
                  <input type="text" class="form-control" id="book" required name="book_name" value="<?php echo $book_data['book_name']; ?>">
                </div>

                  <div class="form-group">
                  <label for="category"> Category</label>
                 <select class="form-control" id="sel1" name="category_id">
                 <option value="<?php echo $book_data['category_id']; ?>"><?php echo $book_data['category_name'] ;?></option>
                     <?php 
                       while($row = mysqli_fetch_array($category_data)){
                         echo '<option value="'.$row['id'].'">'.$row['category_name'].'</option>';
                       }
                     ?>
              </select>
                </div>

                 <div class="form-group">
                  <label for="category"> Author</label>
                 <select class="form-control" id="sel1" name="author_id">
                 <option value="<?php echo $book_data['author_id']; ?>"><?php echo $book_data['author_name'] ;?></option>
                  <?php 
                       while($row = mysqli_fetch_array($author_data)){
                         echo '<option value="'.$row['id'].'">'.$row['author_name'].'</option>';
                       }
                     ?>
              </select>
                </div>

                   <div class="form-group">
                  <label for="isbn">ISBN</label>
                  <input type="number" class="form-control" id="isbn" name="isbn" required value="<?php echo $book_data['isbn']; ?>">
                </div>

                   <div class="form-group">
                  <label for="pr">Price</label>
                  <input type="number" class="form-control" id="pr" required name="price" value="<?php echo $book_data['price']; ?>">
                </div>



                <button type="submit" class="btn btn-primary" name="update_book">Save</button>
            </form>

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