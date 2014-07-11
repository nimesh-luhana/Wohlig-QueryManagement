
<div class="row-fluid">
  <div class="span12">
    <div class="box paint color_12">
      <div class="title">
        <h4> <i class="icon-book"></i><span>Purchase Bill Details</span> </h4>
      </div>
      <div class="content">
        <div class="form-row control-group row-fluid">
        
          <div class="controls span4"><?php echo form_dropdown('vendor',$vendor,$before['purchaseorder']->vendor,'class="chzn-select vendor" '); ?> </div>
          <button class="btn btn-primary vendorsubmit">Submit</button>
          <button class="btn btn-primary newvendor">New vendor</button>
        </div>
        <div class="form-row control-group row-fluid vendordetails">
          <label class="control-label" style="margin-left: 350px;" for="normal-field">Vendor Details</label>
          <div><?php echo "<span  class='message'></span>"; ?></div>
          <div class="span4">
            <input type="text" id="normal-field" class="row-fluid id2" name="id" style="display:none;" value="<?php echo $before['vendordetails']->id ;?>" >
            <input type="text" id="normal-field" placeholder="Name" class="row-fluid name1" name="name" value="<?php echo $before['vendordetails']->name ;?>">
            <input type="text" id="normal-field" placeholder="Email" class="row-fluid email" name="email" value="<?php echo $before['vendordetails']->email ;?>" >
          </div>
          <div class="span4">
            <input type="text" id="normal-field" placeholder="Mobile" class="row-fluid phone" name="phone" value="<?php echo $before['vendordetails']->phone ;?>">
            <input type="text" id="normal-field" placeholder="Address" class="row-fluid address" name="address" value="<?php echo $before['vendordetails']->address ;?>">
          </div>
        </div>
        <div style="margin-left: 350px;" >
          <button class="btn btn-primary  edit">Edit</button>
          <button class="btn btn-primary  create">Create</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row-fluid productdetails">
<div class="span12">
<div class="box paint color_11">
<div class="title">
  <h4> <i class="icon-tasks"></i> <span>Product Details</span> </h4>
</div>
<div class="content top" style="min-height:500px">
<div class="form-row control-group row-fluid">
  <label class="control-label span2" for="description-field">Category</label>
  <label class="control-label span2 productlabel" for="description-field">Product</label>
  <label class="control-label span2 quantitylable" for="description-field">Quantity</label>
  <label class="control-label span2 quantitylable" for="description-field">Return</label>
  <label class="control-label span2 amountlable" for="description-field">Amount</label>
  <label class="control-label span2 taxlable" for="description-field">Vat</label>
</div>
<div class="form-row control-group row-fluid">
  <div><?php echo "<span  class='message1'></span>"; ?></div>
  <div class="controls span2"> <?php echo form_dropdown('category',$category,'','class="chzn-select category"'); ?> </div>
  <div class="span2 productval">
    <input type="text" id="normal-field" placeholder="Product"  class="row-fluid productinput" name="productass" >
  </div>
  <div class="controls span2 productid">
    <select class='product chzn-select'>
    </select>
  </div>
  <div class="span2">
    <input type="text" id="normal-field deliveredval "   class="row-fluid deliveredval" name="quantity" value="">
  </div>
  <div class="span2">
    <input type="text" id="normal-field returnval "   class="row-fluid returnval" name="quantity" value="">
  </div>
  <div class="span2">
    <input type="text" id="normal-field amountval "   class="row-fluid amountval" name="quantity" value="">
  </div>
   <div class="span2">
    <input type="text" id="normal-field taxval "   class="row-fluid taxval" name="quantity" value="">
  </div>
  <div class="span2">
    <button class="btn btn-primary  categorysubmit">Submit</button>
  </div>
</div>
<table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
<thead>
  <tr>
    <th style="display:none;">ID</th>
    <th style="display:none;">CategoryId</th>
    <th class="to_hide_phone  no_sort">product</th>
    <th class="to_hide_phone  no_sort">Quantity</th>
    <th class="to_hide_phone  no_sort">Amount</th>
    <th class="to_hide_phone ue no_sort">Delivered</th>
    <th class="to_hide_phone ue no_sort">Return</th>
    <th class="to_hide_phone ue no_sort">Total</th>
    <th class="to_hide_phone ue no_sort">Tax</th>
    <th class="to_hide_phone ue no_sort">Finaltotal</th>
    <th class="ms no_sort "> Actions </th>
  </tr>
</thead>
<tbody class="tablebody purchaseordertable">
</tbody>
<div class="row-fluid">
  <div class="pull-right span3">
    <table class="table table-bordered">
      <tr>
        <td class="bold text" style="text-align:right; width:85%;">Total Amount:</td>
        <td class="finalamount"><?php echo round($before['purchaseorder']->total,2);?></td>
      </tr>
      <tr>
        <td class="bold text" style="text-align:right; width:85%;">Total Tax:</td>
        <td class="finaltax"><?php echo round($before['purchaseorder']->tax,2);?></td>
      </tr>
      <tr>
        <td class="bold text" style="text-align:right; width:85%;">Final Total:</td>
        <td class="finaltotal"><?php echo round($before['purchaseorder']->finaltotal,2);?></td>
      </tr>
    </table>
  </div>
  <div class="row-fluid" style="margin-bottom:100px;">
  <div class="span3" style="margin-left:20px;">
  <label class="control-label " for="description-field">Method of payment</label>
  <input type="text" id="normal-field methodofpaymentval "   class="row-fluid methodofpaymentval" name="quantity" value="<?php echo $before['purchaseorder']->methodofpayment ;?>" >
  </div>
  
  <div class="controls span3">
  <label class="control-label " for="description-field">Shop</label>
  <?php echo form_dropdown('shop',$shop,$before['purchaseorder']->shop,'class="chzn-select shop" '); ?> </div>
  </div>
  <div class="center">
    <button class="btn btn-primary btn-large finalsubmit">Submit</button>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
function getURLParameter(name) {
    	return decodeURI(
        	(RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
    	);
	}		
$(document).ready(function(e) {
	
	 $(".chzn-select").chosen({
		  disable_search_threshold: 1
		});
	
	$('.productval').hide();
	
	<?php foreach($before['purchaseorderentry'] as $row) { ?>
	
	$('tbody.tablebody').append("<tr ><td style='display:none;' class='tableid'>"+<?php echo $row->productid; ?>+"</td><td style='display:none;' class='categoryid'>"+<?php if ($row->category=="") $row->category=0; echo $row->category;?>+"</td><td ><?php echo $row->product;?></td><td class='quantitytable '>"+<?php echo $row->quantity;?>+"</td><td class='amount' >"+<?php echo $row->cost;?>+"</td><td class='delivered '>"+<?php echo $row->delivered;?>+"</td><td class='returned'>"+<?php echo $row->returned;?>+"</td><td class='total '>"+<?php echo $row->total;?>+"</td><td class='tax'>"+<?php echo $row->tax;?>+"%</td><td class='finaltotaltable'>"+<?php echo $row->finaltotal;?>+"</td><td class='ms'><div class='btn-group'> <a class='btn btn-small editproduct' rel='tooltip' data-placement='left' data-original-title=' edit '><i class='gicon-edit'></i></a><a class='btn  btn-small deleteproduct' rel='tooltip' data-placement='bottom' data-original-title='Remove'><i class=' gicon-remove'></i></a> </div></td></tr>");
	<?php } ?>
	$('.deleteproduct').click(function(){
		$(this).parents('tr').remove();
		totalcalc();
	});
	$('.editproduct').click(function(){
		console.log($(this).parents('tr').children('.tableid').text());
		
		$('.category').val($(this).parents('tr').children('.categoryid').text());
		var form_data = {
			category: $('.category').val(),
		}
		$('.amountval').val($(this).parents('tr').children('.amount').text());
		$('.taxval').val($(this).parents('tr').children('.tax').text());
		$('.deliveredval').val($(this).parents('tr').children('.delivered').text());
		$('.returnval').val($(this).parents('tr').children('.returned').text());
		var row=$(this).parents('tr');
		var productval=$(this).parents('tr').children('.tableid').text();
		console.log(productval);
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
				totalcalc();
			}
		});
		
	});	
	
});


$('.vendorsubmit').click(function(){
			var form_data = {
				vendor: $('.vendor').val(),
				}
			//console.log(form_data);
			$.ajax({
				url: "<?php echo site_url('site/vendordetails'); ?>",
				type: 'POST',
				data: form_data,
				success: function(msg) {
					//console.log(msg);
					var message= JSON.parse(msg);
					//console.log(message);
					$('.create').hide();
					$('.edit').show();
					$('.phone').val(message.mobile);
					$('.name1').val(message.name);
					$('.email').val(message.email);
					$('.address').val(message.address);
					$('.id2').val(message.id);
				}
			});
});

$('.edit').click(function(){
	if($('.name1').val()=='' || $('.phone').val()=='' || $('.email').val()=='' || $('.address').val()=='')
	{
		$('.message').fadeIn(500);
		$('.message').html("<span class='alert alert-error'>All fields are compulsary.</span>");
		$('.message').delay(2000).fadeOut(1000);
		return false;
	}
	else
	{
			var form_data = {
				id: $('.id2').val(),
				name: $('.name1').val(),
				phone: $('.phone').val(),
				email: $('.email').val(),
				address: $('.address').val(),
				}
			//console.log(form_data);
			$.ajax({
				url: "<?php echo site_url('site/updatevendordetails'); ?>",
				type: 'POST',
				data: form_data,
				success: function(msg) {
					//console.log(msg);
					var message= JSON.parse(msg);
					//console.log(message);
					$('.create').hide();
					$('.message').fadeIn(500);
					$('.message').html("<span class='alert alert-success'>Details Edited Successfully.</span>");
					$('.message').delay(2000).fadeOut(1000);
				}
			});
	}
});


$('.newvendor').click(function(){
				$('.name').val("");
				$('.email').val("");
				$('.phone').val("");
				$('.address').val("");
				//$('.vendor').val("");
				$('.create').show();
				$('.create').show();
				$('.edit').hide();
				$('.vendordetails').show();
				$('.productdetails').show();
				//$('.eyedetails').show();
});


$('.create').click(function(){
	if($('.name1').val()=='' || $('.phone').val()=='' || $('.email').val()=='' || $('.address').val()=='')
	{
		$('.message').fadeIn(500);
		$('.message').html("<span class='alert alert-error'>All fields are compulsary.</span>");
		$('.message').delay(2000).fadeOut(1000);
		return false;
	}
	else
	{
			var form_data = {
				name: $('.name1').val(),
				phone: $('.phone').val(),
				email: $('.email').val(),
				address: $('.address').val(),
				}
			//console.log(form_data);
			$.ajax({
				url: "<?php echo site_url('site/createvendordetails'); ?>",
				type: 'POST',
				data: form_data,
				success: function(msg) {
					//console.log(msg);
					var message= JSON.parse(msg);
					console.log(message);
					$('.create').hide();
					$('.edit').show();
					$('.id2').val(message);
					$('.message').fadeIn(500);
					$('.message').html("<span class='alert alert-success'>Details Created Successfully.</span>");
					$('.message').delay(2000).fadeOut(1000);
				}
			});
	}
});	


$('.category').change(function(){
				//$('.categorysubmit').show();
				//$('.quantityval').show();
				//$('.quantitylable').show();
				//console.log($('.category').val());
				
				$('.deliveredval').show();
				$('.returnval').show();
				$('.amountval').show();
				$('.taxval').show();
	            $('.categorysubmit').show();
				
			if($('.category').val()=='-1')
			{
				$('.productval').show();
				$('.productid').hide();
				
			}
			else
			{
				$('.productid').show();
				$('.productval').hide();
				
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

function totalcalc()
{
	var totalamount=0.0;
	var totaltax=0.0;
	var finaltotal=0.0;
	var invoicerows= new Array();
	var invoicerows=$('.purchaseordertable tr');
	//console.log(invoicerows);
	for(var i=0;i<invoicerows.length;i++)
	{
		totalamount+=parseFloat($(".purchaseordertable tr:eq("+i+")").children('.total').text());
		totaltax+=parseFloat($(".purchaseordertable tr:eq("+i+")").children('.tax').text());
		finaltotal+=parseFloat($(".purchaseordertable tr:eq("+i+")").children('.finaltotaltable').text());
	}
	$('.finalamount').text(totalamount);
	$('.finaltax').text(totaltax);
	$('.finaltotal').text(finaltotal);

}


$('.categorysubmit').click(function()
{
	
	var amount=	parseFloat($('.amountval').val());
	var category=parseInt($('.category').val());
	var delivered=parseInt($('.deliveredval').val());
	var returned=parseInt($('.returnval').val());
	var quantity=delivered+returned;
	var total=amount*quantity;
	var taxper=parseFloat($('.taxval').val());
	var finaltotal=total+taxper*total/100;
	if($('.category').val()==-1)
	{
		
		var productid= $('.productinput').val();
		var productname= $('.productinput').val();
	}
	else
	{
		var productid= $('.product').val();
		var productname= $('.product option:selected').text();
	}
	if(isNaN(finaltotal) || productid=="")
	{
		return false;
	}
	
	$('tbody.tablebody').append("<tr ><td style='display:none;' class='tableid'>"+productid+"</td><td style='display:none;' class='categoryid'>"+category+"</td><td >"+productname+"</td><td class='quantitytable '>"+quantity+"</td><td class='amount' >"+amount+"</td><td class='delivered '>"+delivered+"</td><td class='returned'>"+returned+"</td><td class='total '>"+total+"</td><td class='tax'>"+taxper+"%</td><td class='finaltotaltable' >"+finaltotal+"</td><td class='ms'><div class='btn-group'> <a class='btn btn-small editproduct' rel='tooltip' data-placement='left' data-original-title=' edit '><i class='gicon-edit'></i></a><a class='btn  btn-small deleteproduct' rel='tooltip' data-placement='bottom' data-original-title='Remove'><i class=' gicon-remove'></i></a> </div></td></tr>");
	
	$('.amountval').val("");
	$('.deliveredval').val("");
	$('.returnval').val("");
	$('.productinput').val("");
	$('.taxval').val("");
				
	totalcalc();
	$('.deleteproduct').click(function(){
		$(this).parents('tr').remove();
		totalcalc();
	});
	$('.editproduct').click(function(){
		console.log($(this).parents('tr').children('.tableid').text());
		$('.category').val($(this).parents('tr').children('.categoryid').text());
		var form_data = {
			category: $('.category').val(),
		}
		$('.quantityval').val($(this).parents('tr').children('.quantitytable').text());
		var row=$(this).parents('tr');
		var productval=$(this).parents('tr').children('.tableid').text();
		console.log(productval);
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
				totalcalc();
			}
		});
	});	
});


$('.finalsubmit').click(function(){
	
var invoicerows= new Array();
var invoicerows=$('.purchaseordertable tr');
var product=new Array();
var tax= new Array();
var amount= new Array();
var category= new Array();
var delivered= new Array();
var returned= new Array();
for(var i=0;i<invoicerows.length;i++)
{
	category.push(parseFloat($(".purchaseordertable tr:eq("+i+")").children('.categoryid').text()));
	product.push($(".purchaseordertable tr:eq("+i+")").children('.tableid').text());
	amount.push(parseFloat($(".purchaseordertable tr:eq("+i+")").children('.amount').text()));
	delivered.push(parseFloat($(".purchaseordertable tr:eq("+i+")").children('.delivered').text()));
	returned.push(parseFloat($(".purchaseordertable tr:eq("+i+")").children('.returned').text()));
	tax.push(parseFloat($(".purchaseordertable tr:eq("+i+")").children('.tax').text()));
}
console.log(product);
console.log(amount);
console.log(delivered);
console.log(returned);
console.log(tax);
console.log(category);

var form_data = {
	finaltotal : $('.finaltotal').text(),
	finaltax : $('.finaltax').text(),
	finalamount : $('.finalamount').text(),
	vendorid : $('.id2').val(),
	id: getURLParameter('id'),
	shop : $('.shop').val(),
	methodofpayment : $('.methodofpaymentval').val(),
	product : product,
	category : category ,
	amount : amount ,
	delivered : delivered ,
	returned : returned ,
	tax : tax ,
	}
	console.log(form_data);
	//console.log(invoicerows);	
	$.ajax({
		url: "<?php echo site_url('site/editpurchaseordersubmit'); ?>",
		type: 'POST',
		data: form_data,
		success: function(msg) {
						console.log("DONE")
			window.location.href = "<?php echo site_url('site/viewpurchaseorders') ?>";
				
		}
		});

});
</script>