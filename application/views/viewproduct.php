<?php $this->load->view("imageblank/header"); ?>
    <div id='maincontent' >
 
	<div class="zoom-section">    	  
      <div class="zoom-small-image"><a href='<?php echo base_url("uploads/".$images[0]->url);?>' style="width:500px;" class = 'cloud-zoom' id='zoom1' rel="adjustX: 10, adjustY:-4"><img style="width:100%;" src="<?php echo base_url("uploads/".$images[0]->url);?>" alt='' title="<?php echo $product->name;?>" /></a>
	  <p>
			<?php foreach($images as $image) { ?>
		  <a href='<?php echo base_url("uploads/".$image->url);?>' class='cloud-zoom-gallery' title='Red' rel="useZoom: 'zoom1', smallImage: '<?php echo base_url("uploads/".$image->url);?>' "><img class="zoom-tiny-image" src="<?php echo base_url("uploads/".$image->url);?>" alt = "Thumbnail 1"/></a>
		  <?php  } ?>
	  </p>
		</div>
      <div class="zoom-desc">
          <h3 ><?php echo $product->name;?></h3>
        
    <p class="d_gender">Gender: <?php echo $product->gender;?></p>
    <p class="d_color">Color: <?php echo $product->color;?></p>
    <p class="d_ptype">Product Type: <?php echo $product->producttype;?></p>
    <p class="d_ftype">Frame Type: <?php echo $product->frametype;?></p>
    <p class="d_size">Frame Size: <?php echo $product->framesize;?></p>
      </div>
	</div>
    </div>
<?php $this->load->view("imageblank/footer"); ?>