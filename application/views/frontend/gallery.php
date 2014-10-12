<script type="text/javascript">
    jQuery(window).load(function () {
        jQuery(function () {
            jQuery('.gallery-container').masonry({
                itemSelector: '.gallery-image',
                columnWidth: 162
            });
        });
    });
    jQuery(document).ready(function () {
        jQuery('a.item').fancybox();
    })
</script>


<div class="row-fluid gallery-container js-masonry" >
    <?php
    $i = 0;
    foreach ($galleries as $gallery) {
        $width = 140;
        if ($i % 2 == 0) {
            $width = 300;
        }
        ?>
        <a href="<?php echo base_url(); ?>layout/gallery/<?php echo $gallery['image'] ?>" class="item"><img src="<?php echo base_url(); ?>layout/gallery/<?php echo $gallery['image'] ?>" width="<?php echo $width; ?>" height="<?php echo $width; ?>" class="gallery-image"><div class="inner-desc"><?php echo $gallery['project_name']; ?><br/><?php echo $gallery['GalleryCategories']['name'];?><br/><?php echo $gallery['year_execution']; ?></div></a>
                <?php
                $i++;
            }
            ?>
</div>