

<?php echo form_open_multipart('site/uploadproductsubmit');?>

<?php echo form_upload('uploadproduct'); ?>

<br /><br />

<?php echo form_submit('submit','Upload'); ?>

</form>