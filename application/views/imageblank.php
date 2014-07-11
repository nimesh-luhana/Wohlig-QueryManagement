<?php $this->load->view("imageblank/header"); ?>
<div class="wrapper">
  <div class="imagecontent">
  <div class="filters row">
  <div class="filter2 snap4">
  <label>Gender:</label>
  
  <?php 
	$gender=array(
		''=>"Select a Gender",
		'male'=>"Male",
		'female'=>"Female",
		'kids'=>"Kids",
		'unisex'=>"Unisex"
		);
	
	  echo form_dropdown('gender', $gender, $this->input->get_post("gender"),"class='genderfil'" );
  ?>

</div>

  <div class="filter2 span4"><label>Frame Type:</label>
   <?php 
	$frametype=array(
		''=>"Select a Frame type",
		'full'=>"Full Frame",
		'semirimless'=>"Semi Rimless Frame",
		'rimless'=>"Rimless Frame"
		);
	
	 echo  form_dropdown('frametype', $frametype, $this->input->get_post("frametype"),"class='frametypefil'" );
  ?>
  
  </div>

  <div class="filter2 span4"><label>Color:</label>
 <?php  echo form_dropdown('color', $color, $this->input->get_post("color"),"class='colorfil'" );?>
  </div>
  
  <div class="filter2 span4"><label>Brand:</label><?php echo form_dropdown('brand', $brand, $this->input->get_post("brand"),"class='brandfil'" );?></div>
  

    <button class="filtersubmit" style="margin: 26px 0px 10px 20px;"> Submit</button>
  </div> 
  
  
    <div class="thumbnails row-fluid">
      <?php for($i=0;$i<(count($image));$i++) { ?>
      <?php $gridrow=4;$spanrow=12/$gridrow; 
if(($i%$gridrow)==0 && $i>0)
echo '</div><div class="thumbnails row-fluid">';

echo '<div class="span'.$spanrow.'">'; ?>
      <div class="thumbnail2">
        <a class="thumbnail" href="<?php echo site_url("welcome/productpage?id=".$image[$i]->id); ?>"><div class="thumbimg"><img src="<?php echo base_url("uploads"); ?><?php echo "/".$image[$i]->url;?>"></div>
        <h2 class="center2"><?php echo $image[$i]->productname; ?></h2></a>
    </div>
    </div>
    <?php } ?>
  </div>
  <?php $this->config_model->pagenodisplay($total); ?>

</div>

<script>
$(document).ready(function(e) {
	
	$(".filtersubmit").click( function() {
		var params = { gender:$(".genderfil").val(), frametype:$(".frametypefil").val(),color: $(".colorfil").val(),brand:$(".brandfil").val() };
    	var str = jQuery.param(params);
		window.location = "<?php echo site_url()."/".$this->uri->segment(1)."/".$this->uri->segment(2)."?";?>"+str;
	});
});
	

</script>

<?php $this->load->view("imageblank/footer"); ?>