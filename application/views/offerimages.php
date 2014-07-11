<!DOCTYPE html>
<html class="sidebar_default  no-js" lang="en">
<head>
<link rel="shortcut icon" href="<?php echo base_url('assets/css/images/favicon.png'); ?>">
<!-- Le styles -->
<link href="<?php echo base_url('assets/css/twitter/bootstrap.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/main.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/jquery-ui-1.8.23.custom.css'); ?>" rel="stylesheet">
</head>
<body style="background-color: transparent;">
<div class="wrapper">
  <div class="imagecontent">
    <div class="thumbnails row-fluid">
      <?php for($i=0;$i<(count($image)-1);$i++) { ?>
      <?php $gridrow=4;$spanrow=12/$gridrow; 
if(($i%$gridrow)==0 && $i>0)
echo '</div><div class="thumbnails row-fluid">';
echo'<div class="span'.$spanrow.'">'?>
      <div class="thumbnail2">
        <div class="thumbimg"><a class="thumbnail" data-toggle="modal" href="#myModal"><img src="<?php echo base_url("uploads"); ?><?php echo "/".$image[$i]->url;?>"></a></div>
        <h2 class="center2"><?php echo $image[$i]->productname; 
?></h2>
      </div>
    </div>
    <?php } ?>
  </div>
  <div class="pagination">
    <ul>
		<?php  for($i=0;$i<$image[count($image)-1]->total;$i++)
        {
            echo "<li class='active'><a href='".site_url("welcome/offerimages")."?page=".($i+1).".'>".($i+1)."</a></li>";
        }
        ?>
    </ul>
</div>
</div>
</div>
</body>
</html>