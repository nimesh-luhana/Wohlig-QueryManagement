
<div class="row-fluid">
  <div class="span12">
    <div class="box paint color_12">
      <div class="title">
        <h4> <i class="icon-book"></i><span>Purchase Bill Details</span> </h4>
      </div>
      <div class="content">
        <div class="form-row control-group row-fluid">
          <div class="controls span4"><?php echo form_dropdown('vendor',$vendor,set_value('vendor'),'class="chzn-select vendor" '); ?> </div>
          <button class="btn btn-primary vendorsubmit">Submit</button>
          <button class="btn btn-primary newvendor">New vendor</button>
        </div>
        <div class="form-row control-group row-fluid vendordetails">
          <label class="control-label" style="margin-left: 350px;" for="normal-field">Vendor Details</label>
          <div><?php echo "<span  class='message'></span>"; ?></div>
          <div class="span4">
            <input type="text" id="normal-field" class="row-fluid id2" name="id" style="display:none;" >
            <input type="text" id="normal-field" placeholder="Name" class="row-fluid name1" name="name" >
            <input type="text" id="normal-field" placeholder="Email" class="row-fluid email" name="email" >
          </div>
          <div class="span4">
            <input type="text" id="normal-field" placeholder="Mobile" class="row-fluid phone" name="phone" >
            <input type="text" id="normal-field" placeholder="Address" class="row-fluid address" name="address" >
          </div>
        </div>
        <div style="margin-left: 350px;" class="vendordetails">
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
  <label class="control-label span2 vattax" for="description-field">Vat</label>
  <!--<label class="control-label span2 taxlable" for="description-field">Tax</label>-->
</div>
<div class="form-row control-group row-fluid">
  <div><?php echo "<span  class='message1'></span>"; ?></div>
  <div class="controls span2"> <?php echo form_dropdown('category',$category,set_value('category'),'class="chzn-select category"'); ?> </div>
  <div class="span2 productval">
    <input type="text" id="normal-field" placeholder="Product"  class="row-fluid productinput" name="productass" >
  </div>
  <div class="controls span2 productid">
    <select class='product chzn-select'>
    </select>
  </div>
  <div class="span2">
    <input type="text" id="normal-field deliveredval " placeholder="Quantity"  class="row-fluid deliveredval" name="quantity" >
  </div>
  <div class="span2">
    <input type="text" id="normal-field returnval " placeholder="Returned"   class="row-fluid returnval" name="quantity" >
  </div>
  <div class="span2">
    <input type="text" id="normal-field amountval " placeholder="Amount"   class="row-fluid amountval" name="quantity" >
  </div>
   <div class="span2">
    <input type="text" id="normal-field taxval " placeholder="Vat Tax"   class="row-fluid taxval" name="taxval" >
  </div>
   <!--<div class="span2">
    <input type="text" id="normal-field taxtval "   class="row-fluid taxval" name="quantity" >
  </div>-->
  <div class="span2">
    <button class="btn btn-primary  categorysubmit">Submit</button>
  </div>
</div>
<table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
<thead>
  <tr>
    <th style="display:none;">ID</th>
    <th style="display:none;">CategoryId</th>
    <th class="to_hide_phone  no_sort">Product</th>
    <th class="to_hide_phone  no_sort">Quantity</th>
    <th class="to_hide_phone  no_sort">Amount</th>
    <th class="to_hide_phone ue no_sort">Delivered</th>
    <th class="to_hide_phone ue no_sort">Return</th>
    <th class="to_hide_phone ue no_sort">Total</th>
    <th class="to_hide_phone ue no_sort">Tax Percent</th>
    <th class="to_hide_phone ue no_sort">Total with Tax</th>
    <!--<th class="to_hide_phone ue no_sort">Tax</th>-->
    <!--<th class="to_hide_phone ue no_sort">Finaltotal</th>-->
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
        <td class="finalamount"></td>
      </tr>
     <tr>
        <td class="bold text" style="text-align:right; width:85%;">Total Tax:</td>
        <td class="finaltax"></td>
      </tr>
      <tr>
        <td class="bold text" style="text-align:right; width:85%;">Final Total:</td>
        <td class="finaltotal"></td>
      </tr>
    </table>
  </div>
  <div class="row-fluid" style="margin-bottom:100px;">
  <div class="span3" style="margin-left:20px;">
  <label class="control-label " for="description-field">Method of payment</label>
  <input type="text" id="normal-field methodofpaymentval " placeholder="Method Of Payment"  class="row-fluid methodofpaymentval" name="quantity" >
  </div>
  
  <div class="controls span3">
  <label class="control-label " for="description-field">Shop</label>
  <?php echo form_dropdown('shop',$shop,set_value('shop'),'class="chzn-select shop" '); ?> </div>
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
		
$(document).ready(function(e) {
	
	 $(".chzn-select").chosen({
		  disable_search_threshold: 1
	});
	$('.vendordetails').hide();
	$('.productdetails').hide();
	$('.productid').hide();
	$('.productval').hide();
	$('.deliveredval').hide();
	$('.returnval').hide();
	$('.amountval').hide();
	$('.taxval').hide();
	$('.categorysubmit').hide();
});


$('.vendorsubmit').click(function(){
	$('.vendordetails').show();
	$('.productdetails').show();
	
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
					$(".vendor").trigger("liszt:updated");
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
					$(".vendor").trigger("liszt:updated");
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
		totaltax+=parseFloat($(".purchaseordertable tr:eq("+i+")").children('.total').text())*parseFloat($(".purchaseordertable tr:eq("+i+")").children('.taxval2').text())/100;
		finaltotal+=parseFloat($(".purchaseordertable tr:eq("+i+")").children('.finaltotaltable').text());
	}
	$('.finalamount').text(totalamount.toFixed(3));
	$('.finaltax').text(totaltax.toFixed(3));
	$('.finaltotal').text(finaltotal.toFixed(3));

}


$('.categorysubmit').click(function(){
	
	var amount=	parseFloat($('.amountval').val());
	var category=parseInt($('.category').val());
	var delivered=parseInt($('.deliveredval').val());
	var returned=parseInt($('.returnval').val());
	var quantity=delivered;
	var total=amount*quantity;
	//var taxper=parseFloat($('.taxval').val());
	var taxper=parseFloat($('.taxval').val());;
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
	
	$('tbody.tablebody').append("<tr ><td style='display:none;' class='tableid'>"+productid+"</td><td style='display:none;' class='categoryid'>"+category+"</td><td >"+productname+"</td><td class='quantitytable '>"+quantity+"</td><td class='amount' >"+amount+"</td><td class='delivered '>"+delivered+"</td><td class='returned'>"+returned+"</td><td class='total '>"+total+"</td><td class='taxval2' >"+taxper+"%</td><td class='finaltotaltable'>"+finaltotal+"</td><td class='ms'><div class='btn-group'> <a class='btn btn-small editproduct' rel='tooltip' data-placement='left' data-original-title=' edit '><i class='gicon-edit'></i></a><a class='btn  btn-small deleteproduct' rel='tooltip' data-placement='bottom' data-original-title='Remove'><i class=' gicon-remove'></i></a> </div></td></tr>");
	
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
		$('.amountval').val($(this).parents('tr').children('.amount').text());
		
		$('.taxval').val(($(this).parents('tr').children('.taxval2').text()).slice(0,-1));
		$('.deliveredval').val($(this).parents('tr').children('.delivered').text());
		$('.returnval').val($(this).parents('tr').children('.returned').text());
		var form_data = {
			category: $('.category').val(),
		}
		
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
	tax.push(parseFloat($(".purchaseordertable tr:eq("+i+")").children('.taxval2').text()));
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
		url: "<?php echo site_url('site/purchaseordersubmit'); ?>",
		type: 'POST',
		data: form_data,
		success: function(msg) {
						console.log("DONE")
			window.location.href = "<?php echo site_url('site/viewpurchaseorders') ?>";
				
		}
		});

});
</script>