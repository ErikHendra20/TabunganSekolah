<?php
$koneksi = new mysqli("localhost","id13831104_kelompokbasdat","jkm7jr0(wb074HyA","id13831104_tabungansekolah");
$result = mysqli_query($koneksi, "SELECT * FROM siswa");
$siswa = mysqli_fetch_row($result);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">SISTEM TABUNGAN</a> 
            </div>
  <div style="color: white;
    padding: 15px 50px 5px 50px;
    float: right;
    font-size: 16px;"> &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard fa-3x"></i> Home</a>
                        <a href="index.php?halaman=profil"><i class="fa fa-dashboard fa-3x"></i> Profil</a>
                        <a href="index.php?halaman=tabungan"><i class="fa fa-dashboard fa-3x"></i> Tabungan</a>
                        <a href="index.php?halaman=data siswa"><i class="fa fa-dashboard fa-3x"></i> Data Siswa</a>
                        <a href="index.php?halaman=kelas"><i class="fa fa-dashboard fa-3x"></i> Kelas</a>
                        <a href="index.php?halaman=petugas"><i class="fa fa-dashboard fa-3x"></i> Petugas</a>
                        <a href="index.php?halaman=keluar"><i class="fa fa-dashboard fa-3x"></i> Logout</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman']))
                {
                   if($_GET['halaman']=="profil")
                   {
                       include 'profil.php';
                   }
                   elseif ($_GET['halaman']=="tabungan")
                   {
                       include 'tabungan.php';
                   }
                   elseif ($_GET['halaman']=="data siswa")
                   {
                       include 'datasiswa.php';
                   }
                   elseif ($_GET['halaman']=="kelas")
                   {
                       include 'kelas.php';
                   }
                   elseif ($_GET['halaman']=="petugas")
                   {
                       include 'petugas.php';
                   }
                }
                else
                {
                    include 'home.php';
                }
                ?>
            </div>     
                 <!-- /. ROW  -->           
             </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
