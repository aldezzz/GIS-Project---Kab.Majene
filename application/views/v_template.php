<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?= base_url('binary-admin/') ?>assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?= base_url('binary-admin/') ?>assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?= base_url('binary-admin/') ?>assets/css/custom.css" rel="stylesheet" />

	<script src="<?= base_url('binary-admin/') ?>assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?= base_url('binary-admin/') ?>assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?= base_url('binary-admin/') ?>assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?= base_url('binary-admin/') ?>assets/js/custom.js"></script>

	<!-- library leaflet -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
	<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

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
                <a class="navbar-brand" href="index.html">GIS Stunting</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 17 May 2024 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?= base_url('binary-admin/') ?>assets/img/majenelogo.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="<?= base_url('gis/index') ?>"><i class="fa fa-dashboard"></i> Home</a>
                    </li>
                      <li>
                        <a  href="<?= base_url('gis/viewmap') ?>"><i class="fa fa-desktop"></i> View Map</a>
                    </li>
                    <li>
                        <a  href="<?= base_url('gis/viewbasemap') ?>"><i class="fa fa-desktop"></i> View Base Map</a>
                    </li>
					<li  >
                        <a  href="<?= base_url('gis/majene') ?>"><i class="fa fa-desktop"></i> Prevalensi Majene </a>
                    </li>
					<li  >
                        <a  href=<?= base_url('gis/puskesmas_exist') ?>><i class="fa fa-edit"></i> Puskesmas Tersedia </a>
                    </li>	
					<li  >
                        <a  href=<?= base_url('gis/posyandu_exist') ?>><i class="fa fa-edit"></i> Posyandu Tersedia </a>
                    </li>	
					<li  >
                        <a  href="<?= base_url('gis/r_posyandu') ?>"><i class="fa fa-desktop"></i> Titik Prioritas Posyandu </a>
                    </li>
					<li>
                        <a  href="<?= base_url('gis/marker') ?>"><i class="fa fa-desktop"></i> Marker</a>
                    </li>
					<li>
                        <a  href="<?= base_url('gis/polyline') ?>"><i class="fa fa-edit"></i> Polyline</a>
                    </li>	
					<li>
                        <a  href="<?= base_url('gis/geojson') ?>"><i class="fa fa-edit"></i> GeoJSON</a>
                    </li>	
							
					
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li  >
                        <a class="active-menu"  href="blank.html"><i class="fa fa-square-o"></i> Blank Page</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2><?= $judul?></h2>   
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <!-- /. konten  -->
			   <?php
			   if($page) {
				$this->load->view($page);
			   }
			   ?>
			   <!-- /. konten  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    
    
   
</body>
</html>
