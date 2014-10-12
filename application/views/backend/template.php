<!DOCTYPE html>
<html lang="en">
    <head>	
        <title>Mahmoud Amin<?php echo (isset($page_title)) ? ' :: ' . $page_title : ''; ?></title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo base_url(); ?>layout/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>layout/css/admin.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>layout/css/form.css">

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

                <div class="col-md-3 page_title"><?php echo (isset($page_title)) ? $page_title : ''; ?></div>
                <div class="col-md-5">
                    <div class="inner-menu">
                        <ul>
                            <a href="<?php echo base_url();?>admin/cv"><li id="cv">CV</li></a>
                            <a href="<?php echo base_url();?>admin/about_me"><li id="about">about me</li></a>
                            <a href="<?php echo base_url();?>admin/portfolio"><li id="portfolio">portfolio</li></a>
                            <a href="<?php echo base_url();?>admin/gallery"><li id="contact">contact me</li></a>
                            <a href="<?php echo base_url();?>admin/contact_us"><li id="contact">contact me</li></a>
                        </ul>
                    </div>
                </div>
            </div>	
            <div class="row grey-strip"></div>

            <div class="container">
                <div class="row-fluid">
                    <?php
                    if ($this->session->flashdata('message')) {
                        $message = $this->session->flashdata('message');
                        ?>
                        <div class="<?php echo $message['type'] ?>">
                            <?php echo $message['body']; ?>
                        </div>
                        <?php
                    }
                    ?>

                    <?php echo $content; ?>
                </div>
            </div>
        </div>
    </body>
</html>