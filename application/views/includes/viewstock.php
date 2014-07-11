
<div class="box paint color_18">
  <div class="title">
    <h4> <i class=" icon-bar-chart"></i><span>View Stocks</span> </h4>
  </div>
  <div class="content top">
    <div class="row-fluid">
      <div class="span3"> <?php echo form_dropdown('shop',$shop,set_value('shop'),'class="chzn-select shop" '); ?> </div>
     <!-- <div style="margin-left:80%;"><input type="text" class="input-medium search-query " id="search" placeholder="Search a product" style="width:200px;">  </div>-->
     
    </div>
    </div>
    <div style="min-height:500px;padding-bottom: 50px;">
      <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
        <thead>
          <tr>
            <th class="to_hide_phone  no_sort shoph">Shop</th>
            <th class="to_hide_phone  no_sort">Product</th>
            <th class="to_hide_phone  no_sort">Stock</th>
          </tr>
        </thead>
        <tbody class="tablebody">
         
        </tbody>
      </table>
    </div>
  </div>
</div>
<script>
var datatable="";
$(document).ready(function(e) {
	datatable=$('#datatable_example').dataTable();
	 $(".chzn-select").chosen({
		  disable_search_threshold: 1
	});
	$('.shop').trigger('change');
});

		
$('.shop').change(function(){
	
	var form_data = {
				shop: $('.shop').val(),
				}
				
			console.log(form_data);
		$.ajax({
				url: "<?php echo site_url('site/getstocksbyshop'); ?>",
				type: 'POST',
				data: form_data,
				success: function(msg) {
					var message= JSON.parse(msg);
					console.log(message);
					datatable.fnClearTable();
					for(var i=0;i<message.length;i++)
					{
						var abc='<a style="color:white;" href="<?php echo site_url('site/editproduct?id=');?>'+message[i].productid+'">'+message[i].product+'</a>';
						datatable.fnAddData( [
							message[i].shop,
							abc,
							message[i].stock ]
						);
				
						//$('.tablebody').append('<tr><td>'+message[i].shop+'</td><td>'+message[i].product+'</td><td>'+message[i].stock+'</td></tr>');
					}
					if(form_data.shop=="")
					{
						$(".shoph").hide();
						$(".tablebody tr td:nth-child(1)").hide();
					}
					else
					{
						$(".shoph").show();
						$(".tablebody tr:nth-child(1)").show();
					}
				}
			});
	
});


</script>