
<div class="row-fluid">
  <div class="span7">
    <div class="box paint color_7">
      <div class="title">
        <h4> <i class="icon-book"></i><span>Invoice Details</span> </h4>
      </div>
      <div class="content">
        <div class="form-row control-group row-fluid">
          <div class="controls span4">
            <?php  echo form_dropdown('customer',$customer,$before['invoice']->customer,'class="chzn-select customer"');  ?>
          </div>
          <button class="btn btn-primary customersubmit">Submit</button>
          <button class="btn btn-primary newcustomer">New Customer</button>
        </div>
        <div class="form-row control-group row-fluid customerdetails">
          <label class="control-label center "  for="normal-field">Customer Details</label>
          <div> <?php echo "<span  class='message'></span>"; ?></div>
          <div class="span6">
            <input type="text" id="normal-field" class="row-fluid id2" name="id" style="display:none;" value="<?php echo $before['customer']->id ;?>">
            <input type="text" id="normal-field" placeholder="Name" class="row-fluid name1" name="name" value="<?php echo $before['customer']->name ;?>">
            <input type="text" id="normal-field" placeholder="Email" class="row-fluid email" name="email" value="<?php echo $before['customer']->email ;?>">
          </div>
          <div class="span6">
            <input type="text" id="normal-field" placeholder="Mobile" class="row-fluid phone" name="phone" value="<?php echo $before['customer']->phone ;?>">
            <input type="text" id="normal-field" placeholder="Address" class="row-fluid address" name="address" value="<?php echo $before['customer']->address ;?>">
          </div>
          <div class="center">
            <button class="btn btn-primary  edit">Edit</button>
            <button class="btn btn-primary  create">Create</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="span5 eyedetails">
    <div class="box paint color_2" >
      <div class="title">
        <h4> <i class="icon-calendar"></i> <span>Customer Eye Details</span> </h4>
      </div>
      <div class="content ">
        <div class="row-fluid">
          <div class="span6">
             <input type="text" id="normal-field" placeholder="Sph right" class="row-fluid sphright" name="id" value="<?php echo $before['eyedetails']->sphright ;?>">
            <input type="text" id="normal-field" placeholder="Cyl right" class="row-fluid cylright" name="id" value="<?php echo $before['eyedetails']->cycright ;?>">
            <input type="text" id="normal-field" placeholder="Axis right" class="row-fluid axisright" name="id" value="<?php echo $before['eyedetails']->axisright ;?>">
            <input type="text" id="normal-field" placeholder="Add right" class="row-fluid addright" name="id" value="<?php echo $before['eyedetails']->addright ;?>">
          </div>
          <div class="span6">
          <input type="text" id="normal-field" placeholder="Sph left" class="row-fluid sphleft" name="id" value="<?php echo $before['eyedetails']->sphleft ;?>">
            <input type="text" id="normal-field" placeholder="Cyl left" class="row-fluid cylleft" name="id" value="<?php echo $before['eyedetails']->cycleft ;?>">
            <input type="text" id="normal-field" placeholder="Axis left" class="row-fluid axisleft" name="id" value="<?php echo $before['eyedetails']->axisleft ;?>">
            <input type="text" id="normal-field" placeholder="Add left" class="row-fluid addleft" name="id" value="<?php echo $before['eyedetails']->addleft ;?>">
           
          </div>
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
 <div class="span2">
 <input type="text" id="normal-field productidforbarcode "  class="row-fluid productidforbarcode" placeholder="Scan Barcode" name="productidforbarcode" >
 </div>
 <div class="span2">
  <button class="btn btn-primary  productidforbarcodesubmit">Submit</button>
  </div>
 </div>
<div class="form-row control-group row-fluid">
  <label class="control-label span3" for="description-field">Category</label>
  <label class="control-label span3 productlabel" for="description-field">Product</label>
  <label class="control-label span2 quantitylable" for="description-field">Quatity</label>
  <label class="control-label span2 quantitylable" for="description-field">Discount</label>
</div>
<div class="form-row control-group row-fluid">
  <div class="controls span3"> <?php echo form_dropdown('category',$category,set_value('category'),'class="chzn-select category"'); ?> </div>
  <div class="controls span3 productid">
    <select class='product chzn-select'>
    </select>
  </div>
   <div class="span2">
    <input type="text" id="normal-field quantity " value="1"  class="row-fluid quantityval" name="quantity" >
  </div>
  <div class="span2">
    <input type="text" id="normal-field discountval "  class="row-fluid discountval" name="discountval" >
  </div>
  <div class="span2">
    <button class="btn btn-primary  categorysubmit">Submit</button>
  </div>
</div>
<div class="box paint color_18">
<div class="title">
  <h4> <i class=" icon-bar-chart"></i><span>Products</span> </h4>
</div>
<div class="content top">
<table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
<thead>
  <tr>
    <th style="display:none;">ID</th>
    <th style="display:none;">CategoryId</th>
     <th class="to_hide_phone  no_sort">product</th>
    <th class="to_hide_phone  no_sort">Quantity</th>
    <th class="to_hide_phone  no_sort">Amount</th>
    <th class="to_hide_phone ue no_sort">Total</th>
    <th class="to_hide_phone ue no_sort">Discount</th>
    <th class="to_hide_phone ue no_sort">Finaltotal</th>
    <!--<th class="to_hide_phone ue no_sort">Tax</th>
    <th class="to_hide_phone ue no_sort">Finaltotal</th>-->
    <th class="ms no_sort "> Actions </th>
  </tr>
</thead>
<tbody class="tablebody invoicetable">
</tbody>
</div>
</div>
<div class="row-fluid">
<div class="span9"></div>
<div class="span3">
  <table class="responsive table table-striped table-bordered  ">
    <tr>
      <td class="bold " style="text-align:right; width:85%;">Total Amount:</td>
      <td class="finalamount"><?php echo round($before['invoice']->total,2);?></td>
    </tr>
    <tr>
      <td class="bold " style="text-align:right; width:85%;">Total Discount:</td>
      <td class="finaldiscount"><?php echo round($before['invoice']->discount,2);?></td>
    </tr>
    <tr>
      <td class="bold " style="text-align:right; width:85%;">Final Total:</td>
      <td class="finaltotal totaltext"><?php echo round($before['invoice']->finaltotal,2);?></td>
    </tr>
    <tr>
      <td class="bold " style="text-align:right; width:85%;">Advance Paid:</td>
      <td class="finaladvancepaid"></td>
    </tr>
     <tr>
      <td class="bold " style="text-align:right; width:85%;">Balance Left:</td>
      <td class="balanceleft"></td>
    </tr>
  </table>
  <div class="advanceamountpaid" >Advance Paid:</div>
</div>
<div class="row-fluid" style="margin-bottom:100px;">
  <div class="span3" style="margin-left:20px;">
  <label class="control-label " for="description-field">Method of payment</label>
  <input type="text" id="normal-field methodofpaymentval "   class="row-fluid methodofpaymentval" name="quantity" value="<?php echo $before['invoice']->methodofpayment ;?>">
  </div>
  
  <div class="controls span3">
  <label class="control-label " for="description-field">Shop</label>
  <?php echo form_dropdown('shop',$shop,$before['invoice']->shop,'class="chzn-select shop" '); ?> 
  </div>
  <div class="controls span3" >
  <label class="control-label " for="description-field">Advance Paid</label>
  <input type="text" id="normal-field date "   class="row-fluid advancepaid" name="quantity" value="<?php //echo $before['advancepaid']->amount ;?>" >
  </div>
  <div class="controls span3" >
  <label class="control-label " for="description-field">Delivery Date:</label>
    <input type="text" id="datepicker1" data-date-format="dd/mm/yy" class="row-fluid date" name="date" value="<?php echo $before['invoice']->dateofdelivery ;?>">
  </div>
  </div>
</div>
</div>
<div class="center"><button class="btn btn-primary btn-large finalsubmit">Submit</button></div>
</div>

</div>
</div>
</div>
<script>
var srno=1;
function getURLParameter(name) {
    	return decodeURI(
        	(RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
    	);
	}	
$(document).ready(function(e) {
	$('#datepicker1').datepicker();
	$('.categorysubmit').attr('disabled','disabled');
	var form_data = {	
			id: getURLParameter('id'),
			}
		$.ajax({
			url: "<?php echo site_url('site/getadvancepaid'); ?>",
			type: 'POST',
			data: form_data,
			success: function(msg) {
					//console.log(msg);
					var totaladvanceamount=0;
					var balanceleft=0;
					var message= JSON.parse(msg);
					//console.log(message);
					for(var i=0;i<message.length;i++)
					{
						$('.advanceamountpaid').append('<br/>Amount:'+message[i].amount+'&nbsp;&nbsp;Date:'+message[i].date+'<br/>');				totaladvanceamount+=parseFloat(message[i].amount);
						
					}
					$('.finaladvancepaid').html(totaladvanceamount);
					balanceleft=parseFloat($('.finaltotal').text())-totaladvanceamount;
					$('.balanceleft').text(balanceleft.toFixed(2));
				}
				
			});
					
	
	 $(".chzn-select").chosen({
		  disable_search_threshold: 1
	});
	
	<?php foreach($before['invoiceentry'] as $row) { ?>
	$('tbody.tablebody').append("<tr ><td style='display:none;' class='tableid'>"+<?php echo $row->productid; ?>+"</td><td style='display:none;' class='categoryid'>"+<?php echo $row->category;?>+"</td><td ><?php echo $row->product;?></td><td class='quantitytable '>"+<?php echo $row->quantity;?>+"</td><td class='amount' >"+<?php echo $row->amount;?>+"</td><td class='total '>"+<?php echo $row->total;?>+"</td><td class='discount '>"+<?php echo $row->discount;?>+"%</td><td class='tax' style='display:none;'>"+<?php echo $row->tax;?>+"</td><td class='finalamounttable'>"+<?php echo $row->finaltotal;?>+"</td><td class='ms'><div class='btn-group'> <a class='btn btn-small editproduct' rel='tooltip' data-placement='left' data-original-title=' edit '><i class='gicon-edit'></i></a><a class='btn  btn-small deleteproduct' rel='tooltip' data-placement='bottom' data-original-title='Remove'><i class=' gicon-remove'></i></a> </div></td></tr>");
	<?php } ?>
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
						$('.discountval').val(($(this).parents('tr').children('.discount').text()).slice(0,-1));
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


$('.productidforbarcodesubmit').click(function(){
	var barcodeval=$('.productidforbarcode').val();
	barcodeval=barcodeval.slice(0,-1);
	barcodeval=parseInt(barcodeval)-1000000;
	var form_data = {
		product: barcodeval,
		}
		$.ajax({
				url: "<?php echo site_url('site/getproductdetails'); ?>",
				type: 'POST',
				data: form_data,
				success: function(msg) {
					var message= JSON.parse(msg);
					console.log(message);
					var product=parseInt(message.id);
					$('.category').val(message.category);
					$(".category").trigger("liszt:updated");
					$('.category').trigger('change');
					var form_data = {
							category: $('.category').val(),
						}
					$.ajax({
							url: "<?php echo site_url('site/getproducts'); ?>",
							type: 'POST',
							data: form_data,
							success: function(msg) {
								$('.product').val(product);
								$(".product").trigger("liszt:updated");
								$('.product').trigger('change');
							}
						});
					
				}
		});
});



$('.customersubmit').click(function(){
			var form_data = {
				customer: $('.customer').val(),
				}
			//console.log(form_data);
			$.ajax({
				url: "<?php echo site_url('site/customerdetails'); ?>",
				type: 'POST',
				data: form_data,
				success: function(msg) {
					//console.log(msg);
					var message= JSON.parse(msg);
					//console.log(message);
					$('.create').hide();
					$('.edit').show();
					$('.phone').val(message.phone);
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
				url: "<?php echo site_url('site/updatecustomerdetails'); ?>",
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


$('.newcustomer').click(function(){
				$('.name').val("");
				$('.email').val("");
				$('.phone').val("");
				$('.address').val("");
				//$('.category').val("");
				$('.create').show();
				$('.edit').hide();
				$('.customerdetails').show();
				$('.productdetails').show();
				$('.eyedetails').show();
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
				url: "<?php echo site_url('site/createcustomerdetails'); ?>",
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

$('.product').change(function(){
	if($('.product').val()=="")
	{
		$('.categorysubmit').attr('disabled','disabled');
		console.log($('.product').val());
	}
	else
	{
		$('.categorysubmit').removeAttr('disabled');
	var form_data = {
		product: $('.product').val(),
	}
	$.ajax({
				url: "<?php echo site_url('site/getdiscount'); ?>",
				type: 'POST',
				data: form_data,
				success: function(msg) {
					var message= JSON.parse(msg);
					console.log(message);
					$('.discountval').val(message.discount);
				}
	});
	}
});

$('.category').change(function(){
				$('.categorysubmit').show();
				$('.quantityval').show();
				$('.quantitylable').show();
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
					$('.product').html("");
					for(var i=0;i<message.length;i++)
					{
					$('.product').append("<option value='"+message[i].id+"'>"+message[i].name+"</option>");
					}
					$(".product").trigger("liszt:updated");
				}
			});
				
});


$('.customer').change(function(){
				$('.customerdetails').show();
				$('.productdetails').show();
				$('.eyedetails').show();
});

function totalcalc()
{
	var totalamount=0.0;
	var totaldiscount=0.0;
	var totaltax=0.0;
	var finaltotal=0.0;
	var invoicerows= new Array();
	var invoicerows=$('.invoicetable tr');
	//console.log(invoicerows);
	for(var i=0;i<invoicerows.length;i++)
	{
		totalamount+=parseFloat($(".invoicetable tr:eq("+i+")").children('.total').text());
		totaldiscount+=parseFloat($(".invoicetable tr:eq("+i+")").children('.discount').text())*parseFloat($(".invoicetable tr:eq("+i+")").children('.total').text())/100;
		finaltotal+=parseFloat($(".invoicetable tr:eq("+i+")").children('.finalamounttable').text());
	}
	
	$('.finalamount').text(totalamount.toFixed(2));
	$('.finaldiscount').text(totaldiscount.toFixed(2));
	$('.finaltotal').text(finaltotal.toFixed(2));
	
	var advanceamount=parseFloat($('.finaladvancepaid').text());
	var balanceleft=finaltotal-advanceamount;
	$('.balanceleft').text(balanceleft.toFixed(2));
}


$('.categorysubmit').click(function(){
				
				var form_data = {
				product: $('.product').val(),
				}
				//console.log(form_data)
				$.ajax({
				url: "<?php echo site_url('site/getproductdetails'); ?>",
				type: 'POST',
				data: form_data,
				success: function(msg) {
					var message= JSON.parse(msg);
					var quantity=$('.quantityval').val();
					var discountvalue=$('.discountval').val();
					if($('.quantityval').val()=="")
					{
						quantity=1;
					}
					if($('.discountval').val()=="")
					{
						discountvalue=0;
					}
					var discount=(((message.mrp*quantity))*discountvalue)/100;
					var total=((message.mrp*quantity)-discount).toFixed(2);
					var totalamount=(message.mrp*quantity).toFixed(2);
					var tax=(message.tax*total/100);
					var finaltotaltable=total+tax;
					//console.log(tax);
					//console.log(total);
					$('tbody.tablebody').append("<tr ><td style='display:none;' class='tableid'>"+message.id+"</td><td style='display:none;' class='categoryid'>"+message.category+"</td><td >"+message.name+"</td><td class='quantitytable '>"+quantity+"</td><td class='amount' >"+message.mrp+"</td><td class='total'>"+totalamount+"</td><td class='discount'>"+discountvalue+"%</td><td class='finalamounttable'>"+total+"</td><td class='finaltotaltable' style='display:none;'>"+finaltotaltable+"</td><td class='ms'><div class='btn-group'> <a class='btn btn-small editproduct' rel='tooltip' data-placement='left' data-original-title=' edit '><i class='gicon-edit'></i></a><a class='btn  btn-small deleteproduct' rel='tooltip' data-placement='bottom' data-original-title='Remove'><i class=' gicon-remove'></i></a> </div></td></tr>");
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
						$('.discountval').val(($(this).parents('tr').children('.discount').text()).slice(0,-1));
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
				}
				
			});
			
});

$('.finalsubmit').click(function(){
var invoicerows= new Array();
var invoicerows=$('.invoicetable tr');
var product=new Array();
var quantity= new Array();
var discount= new Array();
for(var i=0;i<invoicerows.length;i++)
{
	product.push(parseFloat($(".invoicetable tr:eq("+i+")").children('.tableid').text()));
	quantity.push(parseFloat($(".invoicetable tr:eq("+i+")").children('.quantitytable').text()));
	discount.push(parseFloat($(".invoicetable tr:eq("+i+")").children('.discount').text()));
}
console.log(product);
console.log(quantity);
var form_data = {
	finaltotal : $('.finaltotal').text(),
	finaldiscount : $('.finaldiscount').text(),
	finalamount : $('.finalamount').text(),
	id: getURLParameter('id'),
	shop : $('.shop').val(),
	dateofdelivery :$('.date').val(),
	advancepaid : $('.advancepaid').val(),
	methodofpayment : $('.methodofpaymentval').val(),
	customerid : $('.id2').val(),
	sphleft : $('.sphleft').val(),
	cylleft : $('.cylleft').val(),
	axisleft : $('.axisleft').val(),
	addleft : $('.addleft').val(),
	sphright : $('.sphright').val(),
	cylright : $('.cylright').val(),
	axisright : $('.axisright').val(),
	addright : $('.addright').val(),
	product : product,
	quantity : quantity ,
	discount : discount ,
	}
	console.log(form_data);
//console.log(invoicerows);	
	$.ajax({
		url: "<?php echo site_url('site/editinvoicesubmit'); ?>",
		type: 'POST',
		data: form_data,
		success: function(msg) {
						console.log("DONE")
			window.location.href = "<?php echo site_url('site/viewinvoices') ?>";
				
		}
		});

});


	

</script>