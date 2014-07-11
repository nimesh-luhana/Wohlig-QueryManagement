<div class="box paint color_7" style="min-height: 300px;">
<div class="title">
  <h4> <i class=" icon-bar-chart"></i><span>Transfer Stock</span> </h4>
</div>
<div class="content top">
  <div class="row-fluid">
  <div> <?php echo "<span  class='message'></span>"; ?></div>
    <div class="span3"> <label class="control-label" for="description-field">Transfer from</label> </div>
     <div class="span3"> <label class="control-label" for="description-field">Transfer to</label> </div>
     <div class="span3"> <label class="control-label" for="description-field">Product</label> </div>
     <div class="span3"> <label class="control-label" for="description-field">Quantity</label> </div>
  </div>
  <div class="row-fluid">
    <div class="span3"> <?php echo form_dropdown('shopfrom',$shop,'','class="chzn-select shopfrom" '); ?> </div>
    <div class="span3"> <select class="chzn-select shopto"><option value="">Select a Shop</option></select></div>
    <div class="span3"> <select class='product chzn-select'>    </select> </div>
    <div class="span3" ><select class='quantity chzn-select'>    </select></div>
    
  </div>
  <br/>
  <div class="center">
  	<button class="btn btn-primary btn-large  submit">Submit</button>
  </div>
</div>
</div>

<script>

$(document).ready(function(e) {
	
	 $(".chzn-select").chosen({
		  disable_search_threshold: 1
	});
});
$('.shopfrom').change(function(){
				var form_data = {
					shop: $('.shopfrom').val(),
				}
				$('.shopto').html($('.shopfrom').html());
				$('.shopto option[value='+form_data.shop+']').remove();
				$(".shopto").trigger("liszt:updated");
				//console.log(form_data)
				$.ajax({
				url: "<?php echo site_url('site/getproductsbyshop'); ?>",
				type: 'POST',
				data: form_data,
				success: function(msg) {
					
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
				
});

$('.product').change(function(){
				var form_data = {
					product: $('.product').val(),
					shop: $('.shopfrom').val(),
				}
				//console.log(form_data)
				$.ajax({
				url: "<?php echo site_url('site/getquantity'); ?>",
				type: 'POST',
				data: form_data,
				success: function(msg) {
					
					var message= JSON.parse(msg);
					console.log(message);
					
					
					$('.quantity').html("");
						
						var number=parseInt(message.stock);
						for(var i=1;i<=number;i++)
						{
							$('.quantity').append("<option value="+i+">"+i+"</option>");
						}
						$(".quantity").trigger("liszt:updated");
				}
			});
				
});


$('.submit').click(function(){
	
		var form_data = {
					product: $('.product').val(),
					shopfrom: $('.shopfrom').val(),
					shopto: $('.shopto').val(),
					quantity: $('.quantity').val(),
				}
				console.log(form_data)
				$.ajax({
				url: "<?php echo site_url('site/stocktranfer'); ?>",
				type: 'POST',
				data: form_data,
				success: function(msg) {
					
					var message= JSON.parse(msg);
					//console.log(message);
					
				}
			});
	
	
});
</script>