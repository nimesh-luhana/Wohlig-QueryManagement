<?php echo validation_errors();?>

       <div class="row-fluid">
        <div class="span12">
          <div class="box paint color_12">
            <div class="title">
              <h4> <i class="icon-book"></i><span>Product Attributes</span> </h4>
            </div>
            <div class="content">
              <form class="form-horizontal row-fluid" method="post" action="<?php echo site_url('mycontroller/storeintodb_product_attributes');?>">
                <div class="form-row control-group row-fluid"style="display:none;" >
                  <label class="control-label span3" for="normal-field">ID</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="id" >
                  </div>
                </div>
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">Name</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="name" value=<?php echo set_value('name') ?>>
                  </div>
                </div>
                
                <div class="form-row control-group row-fluid">
                  <label class="control-label span3">Product</label>
                  <div class="controls span9">
				  <?php 
                     
                     echo form_dropdown('product',$products,set_value('product'),'class="chzn-select" data-placeholder="Select Your State..."');
                    
                  ?>  
               	 </div>
                </div>
              
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">Attribute</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="attribute" value=<?php echo set_value('attribute')?>>
                  </div>
                </div>
                <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">Selling Price</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="selling_price"
                     value=<?php echo set_value('selling_price')?>>
                  </div>
                </div>
                <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">SKU</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="sku" value=<?php echo set_value('sku')?> >
                  </div>
                </div>
               
              
                 
               
              
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
  
