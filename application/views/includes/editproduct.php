
<div class="row-fluid">
        <div class="span12">
          <div class="box paint color_12">
            <div class="title">
              <h4> <i class="icon-book"></i><span>Edit Product Details</span> </h4>
            </div>
            <div class="content">
              <form class="form-horizontal row-fluid" method="post" action="<?php echo site_url('site/editproductsubmit?id='.$before->id);?>">
                <div class="form-row control-group row-fluid" style="display:none;">
                  <label class="control-label span3" for="normal-field">ID</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid id" name="id" value="<?php echo $before->id ;?>">
                  </div>
                </div>
                 <!--<div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">Name</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="name" value="<?php echo $before->name;?>" >
                  </div>
                </div>-->
                <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">Model Number</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="modelno" value="<?php echo $before->modelno ;?>" >
                  </div>
                </div>
                
               <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Brand</label>
                  <div class="controls span9">
                     <?php 
                    echo form_dropdown('brand',$brand,$before->brand,'class="chzn-select "');
                  	?> 
                 </div>
                </div>
                  <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Gender</label>
                  <div class="controls span9">
                    <?php $options = array(
					  ''  => 'Select a Gender',
					  'male'    => 'Male',
					 'female'   => 'Female',
					  'kids'   => 'Kids',
					 'unisex'   => 'Unisex',
					   );
					echo form_dropdown('gender', $options,$before->gender,'class="chzn-select"'); ?>
                  </div>
                 </div>
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Category</label>
                  <div class="controls span9">
                   <?php 
                     
                     echo form_dropdown('category',$category,$before->category,'class="chzn-select" id="default-select"');
                  ?>  
                  </div>
                 </div>
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">Frame Type</label>
                  <div class="controls span9">
                    
                     <?php $options = array(
					  ''  => 'Select a Frame type',
					  'full'    => 'Full Frame',
					 'semirimless'   => 'Semi Rimless Frame',
					 'rimless'   => 'Rimless Frame',
					 
					   );
					echo form_dropdown('frametype', $options, $before->frametype,'class="chzn-select"'); ?>
                  </div>
                </div>
                <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">Frame Size</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="framesize" value="<?php echo $before->framesize ;?>" >
                  </div>
                </div>
                <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">Color</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="color" value="<?php echo $before->color ;?>" >
                  </div>
                </div>
               <!--<div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Status</label>
                  <div class="controls span9">
                     <?php 
                     
                     echo form_dropdown('status',$status,$before->status,'class="chzn-select" id="default-select1"');
                  ?>  
                  </div>
                 </div>-->
                  <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Description</label>
                  <div class="controls span9">
                    <input type="text" id="description-field" class="row-fluid" name="description" value="<?php echo $before->description ;?>">
                  </div>
                 </div>
                 
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">Productnature</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="productnature" value="<?php echo $before->productnature ;?>">
                  </div>
                </div>
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Frame Material</label>
                  <div class="controls span9">
                   
                     <?php $options = array(
					  ''  => 'Select a Frame Material',
					  'metal'    => 'Metal',
					 'sheet'   => 'Sheet',
					 'titanium'   => 'Titanium',
					 
					   );
					echo form_dropdown('producttype', $options, $before->producttype ,'class="chzn-select"'); ?>
                  </div>
                 </div>
                  <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Color Number</label>
                  <div class="controls span9">
                    <input type="text" id="description-field" class="row-fluid" name="colorno" value="<?php echo $before->colorno;?>">
                  </div>
                  </div>
                   <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Declare Price</label>
                  <div class="controls span9">
                    <?php $options = array(
					  ''  => 'Select an Option',
					  'yes'    => 'Yes',
					 'no'   => 'No',
					   );
					echo form_dropdown('declareprice', $options,$before->declareprice,'id="declareprice description-field" class="chzn-select "'); ?>
                  </div>
                 </div>
                <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Declareimage</label>
                  <div class="controls span9">
                     <?php $options = array(
					  ''  => 'Select an Option',
					  'yes'    => 'Yes',
					 'no'   => 'No',
					   );
					echo form_dropdown('declareimage', $options,$before->declareimage,'id="declareimage description-field" class="chzn-select"'); ?>
                  </div>
                 </div>
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">Discount</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="discount" value="<?php echo $before->discount ;?>">
                  </div>
                </div>
                <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">MRP</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="mrp" value="<?php echo $before->mrp ;?>">
                  </div>
                </div>
                <div class="form-row control-group row-fluid" style="display:none;">
                  <label class="control-label span3" for="normal-field">Tax</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="tax" value="<?php echo $before->tax;?> ">
                  </div>
                </div>
               <!-- <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">Cost</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="cost" value="<?php echo $before->cost ;?>" >
                  </div>
                </div>-->
                 
                <div class="span3 visible-desktop"></div>
                  <div class="span7 ">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
      </div>
   </div>
   
<script>
$(document).ready(function(e) {
	 $(".chzn-select").chosen({
		  disable_search_threshold: 1
	});
	
});

</script>