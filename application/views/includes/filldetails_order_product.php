<?php echo validation_errors();?>
       <div class="row-fluid">
        <div class="span12">
          <div class="box paint color_12">
            <div class="title">
              <h4> <i class="icon-book"></i><span>User Details</span> </h4>
            </div>
           
            <div class="content">
              <form class="form-horizontal row-fluid" method="post" action="<?php echo site_url('mycontroller/storeintodb_order_product');?>">
               <div class="form-row control-group row-fluid" style="display:none;" >
                  <label class="control-label span3" for="normal-field" >O_ID</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="o_id" value='<?php echo $o_id;?>' >
                  </div>
                </div>
                <div class="form-row control-group row-fluid" style="display:none;" >
                  <label class="control-label span3" for="normal-field" >ID</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="id" >
                  </div>
                </div>
                 
               <div class="form-row control-group row-fluid">
                  <label class="control-label span3">Product Atribute</label>
                  <div class="controls span9">
				  <?php 
                     
                     echo form_dropdown('productattribute',$product_attributes);
                    
                  ?>  
               	 </div>
                </div>
                <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">Quantity</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="quantity" value=<?php echo set_value('quantity')?> >
                  </div>
                </div>
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">Price</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="price" value=<?php echo set_value('price')?> >
                  </div>
                </div>
              
               <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">Amount</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="amount" value=<?php echo set_value('amount')?> >
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
  
