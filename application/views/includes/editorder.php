<?php echo validation_errors();?>
<div class="row-fluid">
        <div class="span12">
          <div class="box paint color_12">
            <div class="title">
              <h4> <i class="icon-book"></i><span>Order Details</span> </h4>
            </div>
            <div class="content">
              <form class="form-horizontal row-fluid" method="post" action="<?php echo site_url('mycontroller/editdb_order');?>">
                <div class="form-row control-group row-fluid" style="display:none;">
                  <label class="control-label span3" for="normal-field">ID</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="id" value="<?php echo $rowvalues->id; ?>">
                  </div>
                </div>
              
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">Time</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="time_stamp" 
                    value="<?php echo set_value('time_stamp',$rowvalues->time_stamp)?>">
                  </div>
                </div>
                 
                   <div class="form-row control-group row-fluid">
                  <label class="control-label span3">Sales</label>
                  <div class="controls span9">
				  <?php 
                 
                     echo form_dropdown('sales',$users,set_value('sales',$rowvalues->sales));
                    
                  ?>  
               	 </div>
                </div>
                   <div class="form-row control-group row-fluid">
                  <label class="control-label span3">Shop</label>
                  <div class="controls span9">
				  <?php 
                     
                     echo form_dropdown('shop',$shops,set_value('sales',$rowvalues->shop));
                    
                  ?>  
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
  