<div class="row-fluid">
        <div class="span12">
          <div class="box paint color_12">
            <div class="title">
              <h4> <i class="icon-book"></i><span>User Details</span> </h4>
            </div>
            <div class="content">
              <form class="form-horizontal row-fluid" method="post" action="<?php echo site_url('site/createusersubmit');?>">
                <div class="form-row control-group row-fluid" style="display:none;">
                  <label class="control-label span3" for="normal-field">ID</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="id" >
                  </div>
                </div>
                <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">User Name</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="username" value="<?php echo set_value('username');?>">
                  </div>
                </div>
                <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Password</label>
                  <div class="controls span9">
                    <input type="password" id="description-field" class="row-fluid" name="password" value="">
                  </div>
                </div>
                <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Confirm Password</label>
                  <div class="controls span9">
                    <input type="password" id="description-field" class="row-fluid" name="confirmpassword" value="">
                  </div>
                </div>
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Address</label>
                  <div class="controls span9">
                    <input type="text" id="description-field" class="row-fluid" name="address" value="<?php echo set_value('address');?>">
                  </div>
                 </div>
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Phone</label>
                  <div class="controls span9">
                    <input type="text" id="description-field" class="row-fluid" name="phone" value="<?php echo set_value('phone');?>">
                  </div>
                 </div>
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Email</label>
                  <div class="controls span9">
                    <input type="text" id="description-field" class="row-fluid" name="email" value="<?php echo set_value('email');?>">
                  </div>
                 </div>
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Date Of Birth</label>
                  <div class="controls span9">
                    <input type="text" id="datepicker1" class="row-fluid" name="dateofbirth" value="<?php echo set_value('dateofbirth');?>">
                  </div>
                 </div>
               <div class="form-row control-group row-fluid">
                  <label class="control-label span3">Select Accesslevel</label>
                  <div class="controls span9">
				  <?php 
                     //echo '<div class="ui-widget">';
                     echo form_dropdown('accesslevel',$accesslevel,set_value('accesslevel'),'class="chzn-select" data-placeholder="Choose a Accesslevel..."');
                     //echo '</div>';
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
   <script>
   
  
	$(document).ready(function(e) {
	 $(".chzn-select").chosen({
		  disable_search_threshold: 1
	});
	
	var d=new Date();
	console.log();
	var month = ""+(d.getMonth()+1);
	var day = ""+d.getDate();
	var year = d.getFullYear();
	
	if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

	console.log(month);
	$('#datepicker1').val(month+"/"+day+"/"+year);
		
	$('#datepicker1').datepicker({
          format: 'mm/dd/yyyy'
    });	
		
	});
 
  </script>
