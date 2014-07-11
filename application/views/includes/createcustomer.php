<div class="row-fluid">
        <div class="span12">
          <div class="box paint color_12">
            <div class="title">
              <h4> <i class="icon-book"></i><span>Customer Details</span> </h4>
            </div>
            <div class="content">
              <form class="form-horizontal row-fluid" method="post" action="<?php echo site_url('site/createcustomersubmit');?>">
                <div class="form-row control-group row-fluid" style="display:none;">
                  <label class="control-label span3" for="normal-field">ID</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="id" >
                  </div>
                </div>
                <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">Name</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="name" value="<?php echo set_value('name');?> ">
                  </div>
                </div>
               <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Address</label>
                  <div class="controls span9">
                    <input type="text" id="description-field" class="row-fluid" name="address" value="<?php echo set_value('address');?> ">
                 </div>
                </div>
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Phone</label>
                  <div class="controls span9">
                    <input type="text" id="description-field" class="row-fluid" name="phone" value="<?php echo set_value('phone');?> ">
                  </div>
                 </div>
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Email</label>
                  <div class="controls span9">
                    <input type="text" id="description-field" class="row-fluid" name="email" value="<?php echo set_value('email');?> ">
                  </div>
                 </div>
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">Pointloyality</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="pointloyality" value="<?php echo set_value('pointloyality');?> ">
                  </div>
                </div>
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Date Of Birth</label>
                  <div class="controls span9">
                    <input type="text" id="datepicker1" class="row-fluid" name="dateofbirth" value="<?php echo set_value('dateofbirth');?> ">
                  </div>
                 </div>
                  <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Anniversary Date</label>
                  <div class="controls span9">
                    <input type="text" id="datepicker2" class="row-fluid" name="anniversary" value="<?php echo set_value('anniversarydate');?> ">
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
	$('#datepicker2').val(month+"/"+day+"/"+year);
	$('#datepicker2').datepicker({
          format: 'mm/dd/yyyy'
    });	
	
		
	
 
  </script>
