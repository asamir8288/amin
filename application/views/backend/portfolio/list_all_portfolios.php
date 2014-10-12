<a href="<?php echo base_url(); ?>admin/portfolio/add_edit_portfolio" class="new-link">Add New Portfolio</a>


<table cellpadding="0" cellspacing="0">
    <tr>
        <th style="width: 100px;"></th>
        <th style="width: 350px;">Date</th>        
        <th style="width: 350px;">Title</th>        
        <th style="width: 350px;">Location</th>
        <th></th>
        <th></th>
    </tr>

    <?php foreach ($portfolios as $portfolio) { ?>
        <tr>
            <td style="width: 100px;">
                <img style="width: 100px;" src="<?php echo static_url() . 'layout/portfolio/' . $portfolio['image']; ?>" />
            </td> 
            <td style="width: 350px;">
                <?php echo date('Y M' ,  strtotime($portfolio['date'])); ?>
            </td>                       
            <td style="width: 350px;">
                <?php echo $portfolio['title']; ?>
            </td>                       
            <td style="width: 350px;">
                <?php echo $portfolio['location']; ?>
            </td>                      
            <td>
                <a href="<?php echo site_url('admin/portfolio/add_edit_portfolio/' . $portfolio['id']); ?>">Edit</a>
            </td>
            <td>
                <a href="<?php echo site_url('admin/portfolio/delete_portfolio/' . $portfolio['id']); ?>">Delete</a>
            </td>
        </tr>

    <?php } ?>

</table>
