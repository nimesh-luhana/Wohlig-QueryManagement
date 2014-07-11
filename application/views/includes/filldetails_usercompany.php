<?php echo validation_errors();?>
       <div class="row-fluid">
        <div class="span12">
          <div class="box paint color_12">
            <div class="title">
              <h4> <i class="icon-book"></i><span>User Company Details</span> </h4>
            </div>
          
            <div class="content">
              <form class="form-horizontal row-fluid" method="post" action="<?php echo site_url('mycontroller/storeintodb_usercompany');?>">
                <div class="form-row control-group row-fluid"style="display:none;" >
                  <label class="control-label span3" for="normal-field">ID</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="id" >
                  </div>
                </div>
            
               <div class="form-row control-group row-fluid">
                  <label class="control-label span3">User</label>
                  <div class="controls span9">
				  <?php 
                     
                     echo form_dropdown('user',$users,set_value('user'),'class="chzn-select" data-placeholder="Select Your User..."');
                    
                  ?>  
               	 </div>
                </div>
                      <div class="form-row control-group row-fluid">
                  <label class="control-label span3">Company</label>
                  <div class="controls span9">
				  <?php 
                     
                     echo form_dropdown('company',$companies,set_value('company'),'class="chzn-select" data-placeholder="Select Your Company..."');
                    
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
  
