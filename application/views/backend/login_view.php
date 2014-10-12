<?php echo form_open(''); ?>
<ul id="form_list">
    <li class="field-group">
        <label class="form-label" for="username">Username :</label>
        <input type="text" name="username" id="username" class="txtbox" >
    </li>

    <li class="field-group">
        <label class="form-label" for="password">Password :</label>
        <input type="password" name="password" id="password" class="txtbox" >
    </li>
    

    <li class="btns">
        <?php echo form_submit('submit', 'Login', 'class="form-submit-btn"') ?>        
    </li>

</ul>
<?php echo form_close(); ?>