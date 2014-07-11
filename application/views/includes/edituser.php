  
<?php echo validation_errors();?>


<div class="row-fluid">
        <div class="span12">
          <div class="box paint color_12">
            <div class="title">
              <h4> <i class="icon-book"></i><span>User Details</span> </h4>
            </div>
            <div class="content">
              <form class="form-horizontal row-fluid" method="post" action="<?php echo site_url('mycontroller/editdb_user');?>">
                <div class="form-row control-group row-fluid" style="display:none;" >
                  <label class="control-label span3" for="normal-field">ID</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="id" value="<?php echo $rowvalues->id; ?>">
                  </div>
                </div>
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">Name</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="name" 
                    value="<?php echo set_value('name',$rowvalues->name) ?>">
                  </div>
                </div>
                <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">User Name</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="username" 
                    value="<?php echo set_value('username',$rowvalues->username) ?>">
                  </div>
                </div>
                <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Password</label>
                  <div class="controls span9">
                    <input type="password" id="description-field" class="row-fluid" name="password"  
                     value="<?php //echo set_value('password',$rowvalues->password) ?>">
                  </div>
                </div>
                <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Confirm Password</label>
                  <div class="controls span9">
                    <input type="password" id="description-field" class="row-fluid" name="confirm_password"  
                     value="<?php // echo set_value('confirm_password',$rowvalues->password) ?>">
                  </div>
                </div>
              
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Logo</label>
                  <div class="controls span9">
                    <input type="text" id="description-field" class="row-fluid" name="logo"
                     value="<?php echo set_value('logo',$rowvalues->logo); ?>" >
                  </div>
                 </div>
                    <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Email</label>
                  <div class="controls span9">
                    <input type="text" id="description-field" class="row-fluid" name="email"
                     value="<?php echo set_value('email',$rowvalues->email); ?>" >
                  </div>
                 </div>
                    <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Json</label>
                  <div class="controls span9">
                    <input type="text" id="description-field" class="row-fluid" name="json"
                     value="<?php echo set_value('json',$rowvalues->json); ?>" >
                  </div>
                 </div>
               <div class="form-row control-group row-fluid">
                  <label class="control-label span3">Access Level</label>
                  <div class="controls span9">
				  <?php 
                     $access_values=array(''=>'Select an Access Level','Administrator'=>'Administrator',
                                          'Customer'=>'Customer',);
                     echo form_dropdown('access_level',$access_values,set_value('accesslevel',$rowvalues->access_level));
                    
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
  
