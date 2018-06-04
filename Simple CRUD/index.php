<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tugas Besar PBW SAS_CRUD </title>

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
                       <a href="#"> === DATA KARYAWAN PT ABALABAL=== </a>
                    </li>
                    <li style="margin-top:20px;">
                    </li>
                </ul>
            </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
                <h2>
                    Karyawan :  <a href="create.php" class="btn btn-success"> Pendaftaran</a>
                </h2>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Karyawan</th>
                      <th>Nama Karyawan</th>
                      <th>Alamat</th>
                      <th>Jenis Kelamin</th>
                      <th>Umur</th>
                      <th>Telepon</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php
                   include('koneksi.php');
                   $query = mysql_query("SELECT * FROM registrasi ORDER BY kd_karyawan DESC") or die(mysql_error());
                   $no = 1;
                   while($data = mysql_fetch_assoc($query)){ 
                            echo '<tr>';
                            echo '<td>'.$no.'</td>';
                            echo '<td>'. $data['kd_karyawan'] . '</td>';
                            echo '<td>'. $data['nm_karyawan'] . '</td>';
                            echo '<td>'. $data['alamat'] . '</td>';
                            echo '<td>'. $data['jk'] . '</td>';
                            echo '<td>'. $data['umur'] . '</td>';
                            echo '<td>'. $data['telp'] . '</td>';
                            echo '<td width=250>';
                            echo'<a class="btn btn-success" href="update.php?no='.$data['no'].'">EDIT</a>';
                            echo '<a class="btn btn-danger" href="delete.php?no='.$data['no'].'">DELETE</a>';
                            echo '</td>';
                            echo '</tr>';
                  $no++;
                   }
                  ?>
                  </tbody>
            </table>
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
