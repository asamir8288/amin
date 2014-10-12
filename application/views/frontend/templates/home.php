<!DOCTYPE html>
<html lang="en">
    <head>	
        <title>Mahmoud Amin >> Home Page</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo base_url(); ?>layout/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>layout/css/styles.css">

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="<?php echo base_url(); ?>layout/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>layout/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-5 logo">
                    <a href="/"><img src="<?php echo base_url(); ?>layout/images/logo.png" alt="Mahmoud Amin - Architectural designer" title="Mahmoud Amin - Architectural designer" /></a>	  			
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 image-placeholder desktop-only"></div>
                <div class="col-md-6 col-md-offset-5 menu-placeholder">
                    <div class="main-menu">
                        <ul>
                            <a href="<?php echo base_url(); ?>cv"><li id="cv">CV</li></a>
                            <a href="<?php echo base_url(); ?>about_me"><li id="about">about me</li></a>
                            <a href="<?php echo base_url(); ?>gallery"><li id="gallery">gallery</li></a>
                            <a href="<?php echo base_url(); ?>portfolio"><li id="portfolio">portfolio</li></a>
                            <a href="<?php echo base_url(); ?>contact_us"><li id="contact">contact me</li></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>