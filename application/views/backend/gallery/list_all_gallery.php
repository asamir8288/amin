<a href="<?php echo base_url(); ?>admin/gallery/add_edit_gallery" class="new-link">Add New Gallery</a>


<table cellpadding="0" cellspacing="0">
    <tr>
        <th style="width: 100px;"></th>
        <th style="width: 350px;">Category</th>        
        <th style="width: 350px;">Project Name</th>        
        <th style="width: 350px;">Year of execution</th>
        <th></th>
        <th></th>
    </tr>

    <?php foreach ($galleries as $gallery) { ?>
        <tr>
            <td style="width: 100px;">
                <img style="width: 100px;" src="<?php echo static_url() . 'layout/gallery/' . $gallery['image']; ?>" />
            </td> 
            <td style="width: 350px;">
                <?php echo $gallery['GalleryCategories']['name']; ?>
            </td>                       
            <td style="width: 350px;">
                <?php echo $gallery['project_name']; ?>
            </td>                       
            <td style="width: 350px;">
                <?php echo $gallery['year_execution']; ?>
            </td>                      
            <td>
                <a href="<?php echo site_url('admin/gallery/add_edit_gallery/' . $gallery['id']); ?>">Edit</a>
            </td>
            <td>
                <a href="<?php echo site_url('admin/gallery/delete_gallery/' . $gallery['id']); ?>">Delete</a>
            </td>
        </tr>

    <?php } ?>

</table>
