<div class="box paint color_18" style="min-height:500px;">
            <div class="title">
              <h4> <i class=" icon-bar-chart"></i><span>Report</span> </h4>
            </div>

<div class="content top">
<div class="form-row control-group row-fluid">
                  <label class="control-label span1" for="description-field">Date From:</label>
                  <div class="controls span3">
                    <input type="text" id="datepicker1" class="row-fluid datefrom" name="datefrom" value="<?php echo set_value('datefrom');?> ">
                  </div>
                
                  <label class="control-label span1" for="description-field">Date To:</label>
                  <div class="controls span3">
                    <input type="text" id="datepicker2" class="row-fluid dateto" name="dateto" value="<?php echo set_value('dateto');?> ">
                    
                  </div>
                   <label class="control-label span1" for="description-field">Group with:</label>
                  <div class="controls span3">
                  <?php
                  $options = array(
                  ''  => 'Select',
                  'category'    => 'Category',
				  'product'    => 'Product',
                  'shop'   => 'Shop',
                  'vendor' => 'Vendor',
				 
                );
echo form_dropdown('group_product', $options, '','class="groupwith chzn-select"'); ?>
				</div>
   
</div>
 <div class="form-row control-group row-fluid">
                <label class="control-label span1" for="description-field">Group by:</label>
                 <div class="controls span3">
                <?php
                $options = array(
                                  ''  => 'Select a Sort',
                                  'date'    => 'Date',
                                  //'week'    => 'Week',
                                  'month'   => 'Month',
                                  'year' => 'Year',
                                );
                echo form_dropdown('sort', $options, '','class="sortby chzn-select"');?>
                </div>
 </div>
<div class="form-row control-group row-fluid">
  <label class="control-label span1" for="description-field">Category</label>
  <div class="controls span3"> <?php echo form_dropdown('category',$category,set_value('category'),'class="chzn-select category"'); ?> </div>

<label class="control-label span1 " for="description-field">Product</label>


  <div class="controls span3 productbycategory">
    <select class='product chzn-select'>
    </select>
  </div>
  
<label class="control-label span1" for="description-field">Shop</label>
  <div class="controls span3"> <?php echo form_dropdown('shop',$shop,set_value('shop'),'class="chzn-select shop"'); ?> </div> 
</div>

<div class="form-row control-group row-fluid">
<label class="control-label span1" for="description-field">Vendor</label>
  <div class="controls span3"> <?php echo form_dropdown('vendor',$vendor,set_value('vendor'),'class="chzn-select vendor"'); ?> </div> 
</div>

<div class="center"><button class="btn btn-primary btn-large submit">Submit</button></div>

<div class="box paint color_18 tablediv">
<div class="title">
  <h4> <i class=" icon-bar-chart"></i><span>Report</span> </h4>
</div>
<div class="content top">
<table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
<thead>
  <tr>
  <th class="to_hide_phone  no_sort">Date</th>
    <th class="to_hide_phone  no_sort">Shop</th>
    <th class="to_hide_phone  no_sort">Vendor</th>
    <th class="to_hide_phone  no_sort">Category</th>
    <th class="to_hide_phone ue no_sort">Product</th>
    <th class="to_hide_phone ue no_sort">TotalCost</th>
    <th class="to_hide_phone ue no_sort">Totalquantity</th>
    <th class="to_hide_phone ue no_sort">Total</th>
    <!--<th class="to_hide_phone ue no_sort">TotalTax</th>
    <th class="to_hide_phone ue no_sort">Finaltotal</th>-->
   
  </tr>
</thead>
<tbody class="tablebody ">
</tbody>
</div>
</div>

</div><!-- content END -->


<script>
$(document).ready(function(e) {
	$('.category').trigger('change');
  $(".chzn-select").chosen({
		  disable_search_threshold: 1
	});
	
	$('.tablediv').hide();
	});
	var d=new Date();
	//console.log();
	var month = ""+(d.getMonth()+1);
	var day = ""+d.getDate();
	var year = d.getFullYear();
	
	if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

	//console.log(month);
	$('#datepicker1').val();
	$('#datepicker1').datepicker({
          format: 'dd-mm-yyyy'
    });	
	$('#datepicker2').val();
	$('#datepicker2').datepicker({
          format: 'dd-mm-yyyy'
    });	
	
		
	$('.category').change(function(){
				
		if($('.category').val()=="")
			{
				console.log("demo");
				$.ajax({
				url: "<?php echo site_url('site/getproductwithoutcategory'); ?>",
				//type: 'POST',
				//data: form_data,
				success: function(msg) {
					//console.log(msg);
					var message= JSON.parse(msg);
					console.log(message);
					
					$('.product').html("");
					for(var i=0;i<message.length;i++)
					{
					$('.product').append("<option value='"+message[i].id+"'>"+message[i].name+"</option>");
					}
					
					$(".product").trigger("liszt:updated");
				}
			});
			}
		else
			{
				var form_data = {
				category: $('.category').val(),
				}
				//console.log(form_data)
				$.ajax({
				url: "<?php echo site_url('site/getproducts'); ?>",
				type: 'POST',
				data: form_data,
				success: function(msg) {
					//console.log(msg);
					var message= JSON.parse(msg);
					//console.log(message);
					
					$('.product').html("");
					for(var i=0;i<message.length;i++)
					{
					$('.product').append("<option value='"+message[i].id+"'>"+message[i].name+"</option>");
					}
					
					$(".product").trigger("liszt:updated");
				}
			});
			}
	});
	
	
$('.submit').click(function(){
	$('.tablediv').show();
	var product= $('.product').val();
	
var form_data = {
				category: $('.category').val(),
				product: product,
				vendor: $('.vendor').val(),
				shop: $('.shop').val(),
				datefrom: $('.datefrom').val(),
				dateto: $('.dateto').val(),
				groupwith: $('.groupwith').val(),
				sortby: $('.sortby').val(),
			}
				console.log(form_data)
				$.ajax({
				url: "<?php echo site_url('site/reportdata'); ?>",
				type: 'POST',
				data: form_data,
				success: function(msg) {
					console.log(msg);
					var message= JSON.parse(msg);
					console.log(message);
					$('.tablebody').html("");
					for(var i=0;i<message.length;i++)
					{
						
					$('.tablebody').append('<tr><td>'+message[i].date+'</td><td>'+message[i].shopname+'</td><td>'+message[i].vendorname+'</td><td>'+message[i].categoryname+'</td><td>'+message[i].productname+'</td><td>'+message[i].totalcost+'</td><td>'+message[i].quantity+'</td><td>'+message[i].total+'</td><td style="display:none;">'+message[i].taxamount+'</td><td style="display:none;">'+message[i].finaltotal+'</td></tr>');
					}
					
				}
			});
});
 
  </script>