<div class="row-fluid">
<div class="span12">
<div class="box paint color_12">
<div class="title">
  <h4> <i class="icon-book"></i><span>Barcode Details</span> </h4>
</div>
<div class="content">

<label class="control-label span1" for="description-field">Category:</label>
<div class="controls span3">
  <?php echo form_dropdown('category',$category,set_value('category'),'class="chzn-select category"'); ?>
</div>
<label class="control-label span1" for="description-field">Product:</label>
<div class="controls span3">
  <select class='product chzn-select'>
    </select>
</div>
<label class="control-label span1" for="description-field">Quantity:</label>
 <div class="span2">
    <input type="text" id="normal-field quantity " value="1"  class="row-fluid quantityval" name="quantity" >
  </div>
 <div class="center">
    <button class="btn btn-primary  submit">Submit</button>
  </div>

</div>
</div>
</div>
</div>

<div class="box paint color_18">
<div class="title">
  <h4> <i class=" icon-bar-chart"></i><span>Barcode Details</span> </h4>
</div>
<div class="content top">
<table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
<thead>
  <tr>
    <th style="display:none;">ProductID</th>
    <th style="display:none;">CategoryID</th>
    <th class="to_hide_phone  no_sort">Category</th>
    <th class="to_hide_phone  no_sort">product</th>
    <th class="to_hide_phone  no_sort">Quantity</th>
    <th class="to_hide_phone ue no_sort">Barcode No.</th>
    <th class="to_hide_phone ue no_sort">Barcode</th>
    <th class="ms no_sort "> Actions </th>
  </tr>
</thead>
<tbody class="tablebody">
</tbody>
</table>
</div>
<label >Shop:</label>
<div class="controls" style="width:250px;margin-left: 50px;margin-top: -29px;">
  <?php echo form_dropdown('shop',$shop,set_value('shop'),'class="chzn-select shop"'); ?>
</div>
<div class="center">
    <button class="btn btn-primary btn-large print">Print</button>
  </div>
</div>


<script>
$(document).ready(function(e) {
	 $(".chzn-select").chosen({
		  disable_search_threshold: 1
	});
});

$('.category').change(function(){
				var form_data = {
				category: $('.category').val(),
				}
				$.ajax({
				url: "<?php echo site_url('site/getproducts'); ?>",
				type: 'POST',
				data: form_data,
				success: function(msg) {
					//console.log(msg);
					var message= JSON.parse(msg);
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
	}
	$.ajax({
				url: "<?php echo site_url('site/getproductdetails'); ?>",
				type: 'POST',
				data: form_data,
				success: function(msg) {
					var message= JSON.parse(msg);
					//console.log(message);
					$('.modelval').val(message.modelno);
				}
	});
});


$('.submit').click(function(){
	
	var form_data = {
		product: $('.product').val(),
	}
	$.ajax({
				url: "<?php echo site_url('site/getproductdetails'); ?>",
				type: 'POST',
				data: form_data,
				success: function(msg) {
					var message= JSON.parse(msg);
					console.log(message);
					var quantity=$('.quantityval').val();
					var barcode=(1000000)+parseInt(message.id);
					$('tbody.tablebody').append("<tr ><td style='display:none;' class='tableid'>"+message.id+"</td><td style='display:none;' class='categoryid'>"+message.category+"</td><td  class='category'>"+message.categoryname+"</td><td class='productname' >"+message.name+"</td><td class='quantitytable '>"+quantity+"</td><td class='barcode' >"+barcode+"</td><td class='ean8' style='width:88px'></td><td class='ms'><div class='btn-group'> <a class='btn btn-small editbarcode' rel='tooltip' data-placement='left' data-original-title=' edit '><i class='gicon-edit'></i></a><a class='btn  btn-small deletebarcode' rel='tooltip' data-placement='bottom' data-original-title='Remove'><i class=' gicon-remove'></i></a> </div></td></tr>");
					console.log(barcode+"");
					$('tbody.tablebody tr:last td.ean8').barcode(barcode+"", "ean8");
					$('.deletebarcode').click(function(){
						$(this).parents('tr').remove();
					});
					$('.editbarcode').click(function(){
						//console.log($(this).parents('tr').children('.tableid').text());
						$('.category').val($(this).parents('tr').children('.categoryid').text());
						var form_data = {
							category: $('.category').val(),
						}
						$('.quantityval').val($(this).parents('tr').children('.quantitytable').text());
						var row=$(this).parents('tr');
						var productval=$(this).parents('tr').children('.tableid').text();
						
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
								$('.product').val(productval);
								$(".product").trigger("liszt:updated");
								}
								$(".category").trigger("liszt:updated");
								$(row).remove();
								
							}
						});
					
					});
					
				}
	});
});
$('.print').click(function(){
var tablebodyrow= new Array();
var tablebodyrow=$('.tablebody tr');
var product=new Array();
var quantity= new Array();
for(var i=0;i<tablebodyrow.length;i++)
{
	product.push(parseFloat($(".tablebody tr:eq("+i+")").children('.tableid').text()));
	quantity.push(parseFloat($(".tablebody tr:eq("+i+")").children('.quantitytable').text()));
	
}
	var form_data = {
		product: product,
		quantity : quantity ,
		shop : $('.shop').val(),
	}
	console.log(form_data);
	$.ajax({
		url: "<?php echo site_url('site/barcodedata'); ?>",
		type: 'POST',
		data: form_data,
		success: function(msg) {
				console.log("DONE");
				var message= JSON.parse(msg);
				console.log(message);
				window.location.href="<?php echo site_url('site/printbarcode?id='); ?>"+message;
				
			}
		});

});
</script>