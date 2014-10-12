<?php echo form_open_multipart($submit_url); ?>
<ul id="form_list">
    <li>
        <label for="category_id">Category :</label>
        <select name="category_id" class="txtbox">
            <?php foreach ($categories as $cat) { ?>
                <option <?php echo ((isset($data['category_id']) &&  $data['category_id'] == $cat['id'])) ? 'selected="selected"' : '' ;?> value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option>
            <?php } ?>
        </select>        
        <?php echo (isset($errors['category_id'])) ? generate_error_message($errors['category_id']) : ''; ?>
    </li>
    <li>
        <label for="role_id">Role :</label>
        <select name="role_id" class="txtbox">
            <?php foreach ($roles as $role) { ?>
                <option <?php echo ((isset($data['role_id']) &&  $data['role_id'] == $role['id'])) ? 'selected="selected"' : '' ;?> value="<?php echo $role['id']; ?>"><?php echo $role['name']; ?></option>
            <?php } ?>
        </select>          
        <?php echo (isset($errors['role_id'])) ? generate_error_message($errors['role_id']) : ''; ?>
    </li>

    <li>
        <label for="title">Title :</label>
        <input type="text" name="title" value="<?php echo (isset($data['title'])) ? $data['title'] : ''; ?>" id="title" class="txtbox" >
        <?php echo (isset($errors['title'])) ? generate_error_message($errors['title']) : ''; ?>
    </li>
    <li>
        <label for="location">Location :</label>
        <input type="text" name="location" value="<?php echo (isset($data['location'])) ? $data['location'] : ''; ?>" id="location" class="txtbox" >
        <?php echo (isset($errors['location'])) ? generate_error_message($errors['location']) : ''; ?>
    </li>  
    <li>
        <label for="date">Date :</label>
        <input type="text" name="date" value="<?php echo (isset($data['date'])) ? $data['date'] : ''; ?>" id="date" class="txtbox" >
        <?php echo (isset($errors['date'])) ? generate_error_message($errors['date']) : ''; ?>
    </li>  
    <?php if (!isset($errors['image']) && isset($data)) { ?>
        <li style="margin-left: 154px;">
            <input type="hidden" name="image" value="<?php echo $data['image']; ?>" >
            <img style="width: 100px;" src="<?php echo static_url() . 'layout/portfolio/' . $data['image']; ?>" />
        </li>
    <?php } ?>
    <li>
        <label for="image">Image :</label>
        <input type="file" style="display: inline-block;" name="userfile" id="file" class="txtbox" >
        <?php echo (isset($errors['image'])) ? generate_error_message($errors['image']) : ''; ?>
    </li>    
    <li>
        <label for="description">Description :</label>
        <?php
        $val = (isset($data['description'])) ? $data['description'] : '';
        load_editor('description', htmlspecialchars_decode($val));
        ?> 
        <?php echo (isset($errors['description'])) ? generate_error_message($errors['description']) : ''; ?>
    </li>    

    <li class="btns">
        <?php echo form_submit('submit', $btn_text, 'class="form-submit-btn"') ?>        
    </li>

</ul>
<?php echo form_close(); ?>