<?php
$message = $this->session->userdata('message');
if ($message) {
    ?>
    <h4 class="valid_box"><?php echo $message; ?></h4>
    <?php
    $this->session->unset_userdata('message');
} else {
    
}
?>
<?php
$error_message = $this->session->userdata('error_message');
if ($error_message) {
    ?>
    <h4 class="error_box"><?php echo $error_message; ?></h4>
    <?php
    $this->session->unset_userdata('error_message');
} else {
    
}
?>


<br />


<form  action="<?php echo base_url(); ?>super_admin/update_about" enctype="multipart/form-data" method="post">

    <header><h3>Edit Slide</h3></header>
    <fieldset>
        <dl>
            <dt><label>Slide Title </label></dt>
            <dd>
                <input type="hidden" name="slide_id" value="<?php echo $all_about->about_title; ?>">
              
            </dd>
        </dl>

        

        <dl>
            <dt><label>Slide Images</label></dt>
            <dt>	<img src="<?php echo $all_about->photo; ?> " alt="image" width="100" height="100"/></dt>
        </dl>
        <dl>
            <dt><label>Slide Image</label></dt>
            <label>Change image</label>
            <input type="file"  name="logo_links" >

            <footer>
                <div class="submit_link">

                    <input type="submit" value="Add Image" class="alt_btn">
                    <input type="reset" value="Reset">
                </div>
            </footer>

    </fieldset>
</form>