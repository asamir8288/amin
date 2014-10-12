<!DOCTYPE html>
<html lang="en">
    <head>	
        <title>Mahmoud Amin<?php echo (isset($page_title)) ? ' :: ' . $page_title : ''; ?></title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo base_url(); ?>layout/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>layout/css/styles.css">

        <?php echo $_styles; ?>

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="<?php echo base_url(); ?>layout/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>layout/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>layout/js/masonry.pkgd.min.js"></script>
        <script src="<?php echo base_url(); ?>layout/js/isotope.pkgd.min.js"></script>

        <?php echo $_scripts; ?>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row inner-page green-strip">
                <div class="col-md-3 inner-logo">
                    <a href="/"><img src="<?php echo base_url(); ?>layout/images/inner-logo.png" alt="Mahmoud Amin - Architectural designer" title="Mahmoud Amin - Architectural designer" /></a>	  			
                </div>
                <div class="col-md-2 current-page">
                    <div id="portfolio">Portfolio</div>
                </div>
                <div class="col-md-3 socials">
                    <ul>
                        <a href="#"><li id="linkedin"></li></a>
                        <a href="#"><li id="play"></li></a>
                        <a href="#"><li id="pin"></li></a>
                        <a href="#"><li id="fb"></li></a>
                        <a href="#"><li id="twitter"></li></a>
                    </ul>								
                </div>			
                <div class="col-md-4">
                    <div class="inner-menu">
                        <ul>
                            <a href="cv.html"><li id="cv">CV</li></a>
                            <a href="about.html"><li id="about">about me</li></a>
                            <a href="portfolio.html"><li id="portfolio">portfolio</li></a>
                            <a href="contact.html"><li id="contact">contact me</li></a>
                        </ul>
                    </div>
                </div>
            </div>	
            <div class="row grey-strip"></div>
            <?php echo $content; ?>
        </div>
    </body>
</html>