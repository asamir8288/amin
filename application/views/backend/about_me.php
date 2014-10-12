<?php echo form_open($submit_url); ?>
<ul id="form_list">
    <li>
        <label for="content">Content :</label>
        <?php
        $val = (isset($data['content'])) ? $data['content'] : '';
        load_editor('content', htmlspecialchars_decode($val));
        ?> 
        <?php echo (isset($errors['content'])) ? generate_error_message($errors['content']) : ''; ?>

    <li class="btns">
        <?php echo form_submit('submit', 'Update', 'class="form-submit-btn"') ?>        
    </li>

</ul>
<?php echo form_close(); ?>