<?php
   include 'koneksi.php';
      $no = $_REQUEST['no'];    
        $sql = "DELETE FROM registrasi  WHERE registrasi no = ?";
        if ( !empty($_POST)) {
          header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

   
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> CRUD </title>

    <!-- Bootstrap Core CSS -->
    <link   href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
      body {
         padding-top: 150px;
         overflow-x: hidden;
      }
      img {
        display: block;
        max-width:80px;
        max-height:80px;
        width: auto;
        height: auto;
      }
    </style>
</head>

  <body>
    <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
               <ul class="nav navbar-nav">
                    <li>
                       <a class="brand" href="#"><img src="img/logo_ket.png" /></a>
                       <a href="#"> === DATA KARYAWAN PT ABALABAL === </a>
                    </li>
                    <li style="margin-top:20px;">
                    </li>
                </ul>
            </div>
    </nav>

    <!-- Page Content -->
   <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Delete</h3>
                    </div>
                     
                    <form class="form-horizontal" action="delete.php" method="post">
                      <input type="hidden" name="no" value="<?php echo $no;?>"/>
                      <p class="alert alert-error">Apakah yakin anda ingin mendelete data tersebut?</p>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-danger">YA</button>
                          <a class="btn btn-default" href="index.php">TIDAK</a>
                        </div>
                    </form>
                </div>   
    </div> <!-- /container -->
    <hr>
    <!-- Footer -->
    <footer>
       <div class="row">
         <div class="col-lg-12">
          <ul class="nav nav-pills nav-justified">
            <li></li>
            <li><a href="#"><i class="glyphicon glyphicon-copyright-mark"> SAS_2015470056</i></a></li> 
            <li></li>
           </ul>
          </div>
        </div> 
    </footer>
    <!-- Footer -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
