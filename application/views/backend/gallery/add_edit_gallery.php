<?php echo form_open_multipart($submit_url); ?>
<ul id="form_list">
    <?php if (!isset($errors['image']) && isset($data)) { ?>
        <li style="margin-left: 154px;">
            <input type="hidden" name="image" value="<?php echo $data['image']; ?>" >
            <img style="width: 100px;" src="<?php echo static_url() . 'layout/gallery/' . $data['image']; ?>" />
        </li>
    <?php } ?>
    <li>
        <label for="image">Image :</label>
        <input type="file" style="display: inline-block;" name="userfile" id="file" class="txtbox" >
        <?php echo (isset($errors['image'])) ? generate_error_message($errors['image']) : ''; ?>
    </li> 
    <li>
        <label for="project_name">Project Name :</label>
        <input type="text" name="project_name" value="<?php echo (isset($data['project_name'])) ? $data['project_name'] : ''; ?>" id="project_name" class="txtbox" >
        <?php echo (isset($errors['project_name'])) ? generate_error_message($errors['project_name']) : ''; ?>
    </li>
    <li>
        <label for="year_execution">Year of execution :</label>
        <input type="text" name="year_execution" value="<?php echo (isset($data['year_execution'])) ? $data['year_execution'] : ''; ?>" id="year_execution" class="txtbox" >
        <?php echo (isset($errors['year_execution'])) ? generate_error_message($errors['year_execution']) : ''; ?>
    </li>  
    <li>
        <label for="category_id">Category :</label>
        <select name="category_id" class="txtbox">
            <?php foreach ($categories as $cat) { ?>
                <option <?php echo ((isset($data['category_id']) && $data['category_id'] == $cat['id'])) ? 'selected="selected"' : ''; ?> value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option>
            <?php } ?>
        </select>
        <?php echo (isset($errors['date'])) ? generate_error_message($errors['date']) : ''; ?>
    </li>      

    <li>
        <label for="my_role">My Role :</label>
        <?php
        $val = (isset($data['my_role'])) ? $data['my_role'] : '';
        ?> 
        <textarea name="my_role" class="txtarea"><?php echo $val; ?></textarea>
        <?php echo (isset($errors['my_role'])) ? generate_error_message($errors['my_role']) : ''; ?>
    </li>    

    <li class="btns">
        <?php echo form_submit('submit', $btn_text, 'class="form-submit-btn"') ?>        
    </li>

</ul>
<?php echo form_close(); ?>