<?php echo validation_errors();?>
       <div class="row-fluid">
        <div class="span12">
          <div class="box paint color_12">
            <div class="title">
              <h4> <i class="icon-book"></i><span>Product Details</span> </h4>
            </div>
            <div class="content">
              <form class="form-horizontal row-fluid" method="post" action="<?php echo site_url('mycontroller/storeintodb_products');?>">
                <div class="form-row control-group row-fluid"style="display:none;" >
                  <label class="control-label span3" for="normal-field">ID</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="id" >
                  </div>
                </div>
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">Name</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="name" value=<?php echo set_value('name')?>>
                  </div>
                </div>
                    
                <div class="form-row control-group row-fluid">
                  <label class="control-label span3">Category</label>
                  <div class="controls span9">
				  <?php 
                     
                     echo form_dropdown('category',$categories);
                    
                  ?>  
                  </div>
                  </div>
                    <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">Attribute Exists</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="attribute_exist" value=<?php echo set_value('attribute_exist')?>>
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
  
