
    <?php echo validation_errors();?>   
       
       <div class="row-fluid">
        <div class="span12">
          <div class="box paint color_12">
            <div class="title">
              <h4> <i class="icon-book"></i><span>Shop Details</span> </h4>
            </div>
       
            <div class="content">
              <form class="form-horizontal row-fluid" method="post" action="<?php echo site_url('mycontroller/storeintodb_shop');?>">
                <div class="form-row control-group row-fluid" style="display:none;">
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
                  <label class="control-label span3" for="normal-field">Contact Person</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="contact_person" value=<?php echo set_value('contact_person') ?>>
                  </div>
                </div>
              <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">Company Name</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="company_name" 
                    value=<?php echo set_value('company_name');?>>
                  </div>
                </div>
              <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">Vat Tin</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="vat_tin" value=<?php echo set_value('vat_tin') ?>>
                  </div>
                </div>
                        <div class="form-row control-group row-fluid">
                  <label class="control-label span3">State</label>
                  <div class="controls span9">
				<div class='dropdown_state'>
                      <?php 
                     
                     echo form_dropdown('state',$states);
                    
                  ?>  
               	 </div>
               	 </div>
                </div>
                        <div class="form-row control-group row-fluid">
                  <label class="control-label span3">City</label>
                  <div class="controls span9">
                  <div class='dropdown_city'>
				  <?php 
                     
                     echo form_dropdown('city',$cities);
                    
                  ?>  
                  </div>
               	 </div>
                </div>
                        <div class="form-row control-group row-fluid">
                  <label class="control-label span3">Area</label>
                  <div class="controls span9">
				  <?php 
                     
                     echo form_dropdown('area',$areas);
                    
                  ?>  
               	 </div>
                </div>
          
                 
                 
                 
                 
                 
                 
                 
                 
                 
               
                
              <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">Office Phone</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="office_phone" value=<?php echo set_value('office_phone') ?>>
                  </div>
                </div>
              <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">Contact Phone</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="contact_phone" value=<?php echo set_value('contact_phone')?>>
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
 

