<?php
    if ( !empty($_POST)) {
        $kd_karyawanError = null;
        $nm_karyawanError = null;
        $alamatError = null;
        $jkError = null;
        $umurError = null;
        $telpError = null;
         
        $kd_karyawan = $_POST['kd_karyawan'];
        $nm_karyawan = $_POST['nm_karyawan'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jk'];
        $umur = $_POST['umur'];
        $telp = $_POST['telp'];
         
        // Validasi Data
        $valid = true;
        if (empty($kd_karyawan)) {
            $kd_karyawanError = 'Wajib di isi.';
            $valid = false;
        }
        if (empty($nm_karyawan)) {
            $nm_karyawanError = 'Wajib di isi.';
            $valid = false;
        }
        if (empty($alamat)) {
            $alamatError = 'Wajib di isi.';
            $valid = false;
        }
        if (empty($jk)) {
            $jkError = 'Wajib di isi.';
            $valid = false;
        }
        if (empty($umur)) {
            $umurError= 'Wajib di isi.';
            $valid = false;
        }
         
        if (empty($telp)) {
            $telpError = 'Wajib di isi.';
            $valid = false;
        }
         
        // insert data
     if ($valid) {
            include ('koneksi.php');
            $sql = mysql_query ("INSERT INTO registrasi VALUES (NULL, '$kd_karyawan', '$nm_karyawan', '$alamat', '$jk', '$umur', '$telp')") or die (mysql_error());
            header("Location: index.php");
        }
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
                        <h3>Masukkan Data Karyawan</h3>
                    </div>
             
                    <form class="form-horizontal" action="create.php" method="post">
                      <div class="control-group <?php echo !empty($kpError)?'error':'';?>">
                        <label class="control-label">Kode Karyawan</label>
                        <div class="controls">
                            <input name="kd_karyawan" type="text" value="<?php echo !empty($kd_karyawanError)?$kd_karyawanError:'';?>">
                            <?php if (!empty($kd_karyawanError)): ?>
                                <span class="help-inline"><?php echo $kd_karyawanError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($npError)?'error':'';?>">
                        <label class="control-label">Nama Karyawan</label>
                        <div class="controls">
                            <input name="nm_karyawan" type="text" value="<?php echo !empty($nm_karyawanError)?$nm_karyawanError:'';?>">
                            <?php if (!empty($nm_karyawanError)): ?>
                                <span class="help-inline"><?php echo $nm_karyawanError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($alamatError)?'error':'';?>">
                        <label class="control-label">Alamat</label>
                        <div class="controls">
                            <input name="alamat" type="text" value="<?php echo !empty($alamatError)?$alamatError:'';?>">
                            <?php if (!empty($alamatError)): ?>
                                <span class="help-inline"><?php echo $alamatError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($jkError)?'error':'';?>">
                        <label class="control-label">Jenis Kelamin</label>
                        <div class="controls">
                            <input name="jk" type="text" value="<?php echo !empty($jkError)?$jkError:'';?>">
                            <?php if (!empty($jkError)): ?>
                                <span class="help-inline"><?php echo $jklError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($umurError)?'error':'';?>">
                        <label class="control-label">Umur</label>
                        <div class="controls">
                            <input name="umur" type="text" value="<?php echo !empty($umurError)?$umurError:'';?>">
                            <?php if (!empty($umurError)): ?>
                                <span class="help-inline"><?php echo $umurError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($telpError)?'error':'';?>">
                        <label class="control-label">No Telepone</label>
                        <div class="controls">
                            <input name="telp" type="text" value="<?php echo !empty($telpError)?$telpError:'';?>">
                            <?php if (!empty($ntError)): ?>
                                <span class="help-inline"><?php echo $ntError;?></span>
                            <?php endif;?>
                        </div>
                      </div></br>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">INPUT </button>
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