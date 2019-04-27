<?php
error_reporting(0);
include"db/koneksi.php";
?>

<!DOCTYPE HTML>
<html class="fixed">
<head>
<title>Malang Smart City</title>
<link rel="shortcut icon" href="images/iconkabmalangresize.png"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='//fonts.googleapis.com/css?family=Maven+Pro:400,900,700,500' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--- start-mmmenu-script---->
<script src="js/jquery.min.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
<script type="text/javascript" src="js/jquery.mmenu.js"></script>
        <script type="text/javascript">
            //  The menu on the left
            $(function() {
                $('nav#menu-left').mmenu();
            });
        </script>
<!-- start slider -->
    <link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="js/jquery.eislideshow.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#ei-slider').eislideshow({
                    animation           : 'center',
                    autoplay            : true,
                    slideshow_interval  : 3000,
                    titlesFactor        : 0
                });
            });
        </script>
<!-- start top_js_button -->
<script type="text/javascript" src="js/move-top.js"></script>
   <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>

    <!-- Data Table JS
    ============================================ -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

        <!-- Head Libs -->
        <script src="assets/vendor/modernizr/modernizr.js"></script>

</head>
<body>

    <style type="text/css">
    html,body{
        padding: 0;
        margin:0;
        font-family: 'Maven Pro', sans-serif;
    }
 
    .menu-malasngoding{
        background-color: #242424;
    }
 
    .menu-malasngoding ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }
 
    .menu-malasngoding > ul > li {
        float: left;
    }
 
    
    .menu-malasngoding li a {
        display: inline-block;
        color: #2d9270;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
 
    .menu-malasngoding li a:hover{
        background-color: #242424;
    }
 
    li.dropdown {
        display: inline-block;
    }
 
    .dropdown:hover .isi-dropdown {
        display: block;

    }
 
    .isi-dropdown a:hover {
        color: #242424 !important;
        
    }
 
    .isi-dropdown {
        position: absolute;
        display: none;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 9999;
        background-color: #242424;
        padding: 14px 16px;
    }
 
    .isi-dropdown a {
        color: #777777 !important;
    }
 
    .isi-dropdown a:hover {
        color: #ffffff  !important;
        background: #242424 !important;
        padding: 14px 16px;
    }
</style>

<!-- start header -->

<div class="top_bg">
<div class="wrap">
    <div class="header">
        <div class="logo">
            <img src="images/logo2.png" alt=""/>
        </div>
         <div class="log_reg">
                <ul>
                <li class="active"><a href="index.php">Home</a>
                </li>
                
                <li class="dropdown"><a>Kedaruratan</a>
                <ul class="isi-dropdown">
                    <li><a href="mapAmbulan.php">Ambulan</a></li>
                    <li><a href="mapBencana.php">Bencana Alam</a></li>
                    <li><a href="mapKanpol.php">Kantor Polisi</a></li>
                </ul>
                </li>

                <li class="dropdown"><a>Layanan Umum</a>
                <ul class="isi-dropdown">
                    <li><a href="?page=PLN">PLN</a></li>
                    <li><a href="?page=PDAM">PDAM</a></li>
                    <li><a href="?page=PJU">PJU</a></li>
                    <li><a href="?page=StokDarah">Stok Darah</a></li>
                </ul>
                </li>

                <li class="dropdown"><a>Pengaduan</a>
                <ul class="isi-dropdown">
                    <li><a href="?page=SuratWarga">Surat Warga</a></li>
                    <li><a href="?page=Elapor">E-Lapor</a></li>
                </ul>
                </li>
                <li class="dropdown"><a>Informasi</a>
                <ul class="isi-dropdown">
                    <li><a href="einap.php">E-Inap</a></li>
                    <li><a href="faskes.php">Fasilitas Kesehatan</a></li>
                    <li><a href="dataRS.php">Data Rumah Sakit</a></li>
                </ul>
                </li>
                <div class="clear"></div>
            </ul>
        </div>              
        <div class="clear"></div>
    </div>  
</div>
</div>


<!-- start slider -->

    

<!-- start main -->

<div class="wrap">
<div class="main">

  
                         <img src="images/header_rs1.png">   
                            <table class="display table table-bordered table-striped mb-none" id="dataRS">
    
  
       Data Terakhir Pada : <br/>
        
    <?php
    $tanggal= mktime(date("m"),date("d"),date("Y"));
    echo "Tanggal : ".date("d-M-Y", $tanggal);
    date_default_timezone_set('Asia/Jakarta');
    $jam=date("H:i:s");
    echo "| Pukul : ". $jam." ";
    $a = date ("H");
    ?> 
 <br/> <br/>


                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Rumah Sakit</th>
                                        <th>Kasus Kegawatdaruratan</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                          <?php 
                        include 'db/koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi,"select * from tb_rs");
                        while($d = mysqli_fetch_array($data)){
                           ?>
                                 <tr class="gradeX">
                                  <td><?php echo $no++; ?></td>
                                  <td><a style="color: #444444;"><?php echo $d['nama_rs']; ?> </td>

                                  <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="detail_maternal.php?id=<?php echo $d['id_rs']; ?>">
                                    <button >Maternal</button></a> 
                                    <a href="detail_neonatal.php?id=<?php echo $d['id_rs']; ?>">
                                    <button>Neonatal</button></td>
                                 </a>
                                </tr>

                                  <?php 
                              }
                                ?>
                                </tbody>
                        
                            </table>
</div>
</div>

    <div class="clear"></div>
</div>
</div>


<!-- start footer -->
<div class="footer_bg">
<div class="wrap">
<div class="footer">
        <!-- scroll_top_btn -->
        <script type="text/javascript">
            $(document).ready(function() {
            
                var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear' 
                };
                
                
                $().UItoTop({ easingType: 'easeOutQuart' });
                
            });
        </script>
         <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
        <!--end scroll_top_btn -->
    
    <div class="copy">
        <p class="link"><span>© 2019 Dinas Komunikasi dan Informatika Kabupaten Malang</a></span></p>
    </div>
    <div class="clear"></div>
</div>
</div>
</div>
 
        <!-- Examples -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
            $(document).ready(function(){
                $('#dataRS').DataTable();
            });
        </script>

</body>
</html>