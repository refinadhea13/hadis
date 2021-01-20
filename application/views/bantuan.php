
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="zYSTK6bRc4hmRHT1Rugv0gv3h3UdBbDlci03W97X">
    <link href="<?php echo base_url(); ?>web/favicon.png" rel="icon" type="image/png"/>
    <title>Optimasi Pencarian Hadis pada 7 Kitab Hadis</title>

    <!-- Styles -->
    <link href="<?php echo base_url(); ?>web/app.css" rel="stylesheet">
</head>
<body>
            <style type="text/css"> 
                .navbar-inverse{
                background-color: #FFA500;
                border-color: #FFA500;
                color:#f0f8ff;
                } 

                .navbar-inverse .navbar-brand{
                color: #f0f8ff;
                } 

                .navbar-inverse .navbar-nav>li>a{
                color: #f0f8ff;
                } 

                .btn-custom{
                    color:#ffffff;
                    background-color:#0751e8;
                    border-color: #0751e8;  
                }
                .btn-custom:hover,
                .btn-custom:focus,
                .btn-custom:active,
                .btn-custom.active,
                .open .dropdown-toggle.btn-custom{
                    color: #ffffff;
                    background-color:#006666;
                    border-color: #006666;  
                }
            </style>


    <div id="app">
            
        <nav class="navbar navbar-inverse navbar-static-top">

            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                   
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url(); ?>"> Cari Hadis</a></li> 
                        <li><a href="<?php echo base_url(); ?>Tentang">Tentang</a></li> 
                        <li><a href="<?php echo base_url(); ?>Bantuan">Bantuan</a></li> 

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                                                                </ul>
            </div>
        </div>
    </nav>

    <!-- <div class="container"> -->
 <div class="row">
    <div class="col-md-10 col-md-offset-1">
        <center>
            <img id="image" alt="Pencarian Hadis" src="<?php echo base_url(); ?>web/7hadis.png" width="45%" />
        </center> 
        <br><br>
		  <div class="container-fluid">
		    <div class="card">
		      <h3>
		        PANDUAN MENGGUNAKAN SISTEM PENCARIAN HADIS
		      </h3>
		      <div class="card-body">
		        <blockquote class="blockquote mb-0">
		        	<p>1. Kata kunci dalam pencarian hadis ini menggunakan Bahasa Indonesia.</p>
		        	<p>2. Sistem ini hanya dapat melakukan pencarian pada tujuh kitab hadis.</p>
		          	<footer class="blockquote-footer">By Refina</footer>
		        </blockquote>
		      </div>
		    </div> 
   </div>
   <br>
   <br><br>
 </div>
<!--  </div> -->


<footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © 2020</small>
        </div>
      </div>
</footer></div>

    <!-- Scripts -->
    <script src="<?php echo base_url(); ?>web/app.js"></script>
</body>
</html>
