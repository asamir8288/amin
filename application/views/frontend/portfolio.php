<script type="text/javascript">
    jQuery(window).load(function () {
        jQuery(function () {
            jQuery('.portfolio-container').masonry({
                itemSelector: '.portfolio-item',
                columnWidth: 40
            });
        });
    });

    jQuery(document).ready(function () {
        var $container = jQuery('.portfolio-container').isotope({
            itemSelector: '.portfolio-item',
            masonry: {
                columnWidth: 50,
                isFitWidth: false
            }
        });
        // filter items on button click
        jQuery('#filters').on('click', 'button', function () {
            var filterValue = jQuery(this).attr('data-filter');
            $container.isotope({filter: filterValue});
        });
    })

</script>

<div id="filters" class="row button-group">
    <?php echo form_open($submit_url); ?>
    <select name="category_id" class="select">
        <option value="">Category...</option>
        <?php foreach ($categories as $cat) { ?>
            <option value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option>
        <?php } ?>
    </select>
    <select name="role_id" class="select" style="width: 150px;">
        <option value="">Role</option>
        <?php foreach ($roles as $role) { ?>
            <option value="<?php echo $role['id']; ?>"><?php echo $role['name']; ?></option>
        <?php } ?>
    </select>
    <span style="color: #777;font-size: 16px;margin-left: 15px;display: inline-block">year</span>
    <select name="from" class="select" style="width: 150px;">
        <option value="">from</option>
        <?php for ($i = date('Y'); $i >= 1980; $i--) { ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php } ?>
    </select>
    <select name="to" class="select" style="width: 150px;">
        <option value="">to</option>
        <?php for ($i = date('Y'); $i >= 1980; $i--) { ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php } ?>
    </select>

    <?php
    echo form_submit('submit', ' ', 'class="go-btn"');
    echo form_close();
    ?>

    <div style="display: block;margin-top: 15px;">
        <?php
        if (isset($filters)) {
            if (isset($filters['category_id']) && $filters['category_id']) {
                echo '<span class="filter">' . PortfolioCatName($filters['category_id']) . '</span>';
            }
            if (isset($filters['role_id']) && $filters['role_id']) {
                echo '<span class="filter">' . PortfolioRoleName($filters['role_id']) . '</span>';
            }
            if (isset($filters['from']) && $filters['from']) {
                echo '<span class="filter">' . 'from ' . $filters['from'];
            }
            if (isset($filters['to']) && $filters['to']) {
                echo 'to ' . $filters['to'] . '</span>';
            }else{
                echo '</span>';
            }
        }
        ?>
    </div>
</div>	 	
<div class="row-fluid portfolio-container js-masonry" >
    <?php foreach ($porfolios as $portfolio) { ?>
        <div class="portfolio-item cafe design 2009">
            <img src="<?php echo base_url() . 'layout/portfolio/' . $portfolio['image']; ?>">
            <div class="item-content">
                <div class="heading">
                    <h2><?php echo $portfolio['title']; ?></h2>
                    <p class="place"><?php echo $portfolio['location']; ?></p>
                    <p class="date"><?php echo date('Y, M', strtotime($portfolio['date'])); ?></p>
                </div>
                <div class="details">
                    <p>
                        <?php echo substring($portfolio['description']); ?>
                    </p>
                </div>
            </div>
            <div class="more-info"><a href="<?php echo base_url() . 'portfolio/details/' . $portfolio['id']; ?>">more info.</a></div>
        </div>
    <?php } ?>			
</div>