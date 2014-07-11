<script type="application/javascript"?>
$(document).ready(function(e) {
  
 window.print();
});
</script>

<div class="print">
  <div class="head1">
  
  </div>
 <h2 class="center">Tax Invoice</h2>
  <div class="url" style="display:none;"><?php echo site_url('site/printbill?id=').$invoiceid; ?></div>
  <div>
    <table class="custommer">
      <thead>
      	 <tr>
          <td>Date:</td>
          <td><?php echo $table['table2']->date;?></td>
        </tr>
        <tr>
          <td>Customer Name:</td>
          <td><?php echo $table['table2']->name;?></td>
        </tr>
        <tr>
          <td>Customer Address:</td>
          <td><?php echo $table['table2']->address;?></td>
        </tr>
        <tr>
          <td>Customer Phone number:</td>
          <td><?php echo $table['table2']->phone;?></td>
        </tr>
        <tr>
          <td>Invoice Number:</td>
          <td><?php echo $this->input->get('id')+1000000 ?></td>
        </tr>
       
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
  <div class="table1">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>S.No</th>
          <th style="width: 354px;">Product Name</th>
          <th>Quantity</th>
          <th>Amount &#8377;</th>
          <th>Discount</th>
          <th>Total &#8377;</th>
          <!-- <th>Tax</th> 
          <th>Finaltotal</th>-->
              
        </tr>
      </thead>
      <tbody>
        <?php 
		$i=1;
		$finaltotal=0;
		$total=0;
		$tax=0;
		$discount=0;
		foreach($table['table1'] as $row) {
		$total+=round($row->total,2);
		$discount1=($row->discount*$row->total)/100;
		$discount+=round($discount1,2);
		$finaltotal+=round($row->finaltotal,2);
		$tax+=round($row->tax,2); 
		?>
        <tr>
          <td><?php echo $i++;?></td>
          <td><?php echo $row->name.'-'.$row->color.'-'.$row->frametype.'-'.$row->framesize;?></td>
          <td><?php echo $row->quantity;?></td>
          <td><?php echo round($row->amount,2);?></td>
          <td><?php echo round($row->discount,2);?>%</td>
          <td><?php echo round($row->total,2)-((round($row->total,2)*round($row->discount,2))/100);?></td>
         <!-- <td><?php echo round($row->tax,2);?></td>
          <td><?php echo round($row->finaltotal,2);?></td>-->
          
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <table class="table table-bordered tableeye" style="margin-top: 40px;width: 25%;">
  <thead>
  <tr><th class="tabletd"></th><th class="tabletd">SPH</th><th class="tabletd">CYL</th><th>Axis</th><th>ADD</th></tr>
  </thead>
  <tbody>
 
  <tr>
  		<td> <b>Right:</b></td>
        <td><?php echo $table['table3']->sphright ; ?></td>
         <td><?php echo $table['table3']->cycright ; ?></td>
         <td><?php echo $table['table3']->axisright ; ?></td>
        <td><?php echo $table['table3']->addright; ?></td>
   </tr>
   
   <tr>    
   		<td><b>Left:</b></td> 
        <td><?php echo $table['table3']->sphleft ; ?></td>
        <td><?php echo $table['table3']->cycleft ; ?></td>
        <td><?php echo $table['table3']->axisleft ; ?></td>
        <td><?php echo $table['table3']->addleft ; ?></td>
   </tr>
   
      </tbody>
  </table>
  <div class="table2 ">
  
  <?php $balanceleft=($total-$discount)-$table['table4']->advance; ?>
    <table class="table table-bordered"  style="margin-top: 40px;">
      <tr>
          <td class="bold " >Total Amount:</td>
          <td class="finaltax ">Rs.<?php echo $total; ?></td>
        </tr>
        <tr>
          <td class="bold " >Total Discount:</td>
          <td class="finaltax ">Rs.<?php echo $discount; ?></td>
        </tr>
      <tr>
        <td class="bold ">Final Total &#8377;:</td>
        <td class="finalamount total"><?php echo $total-$discount;  ?></td>
      </tr>
      
       <!--<tr>
          <td class="bold " >Total Tax:</td>
          <td class="finaltax ">Rs.<?php echo $tax; ?></td>
        </tr>
     	<tr>
          <td class="bold " >Final Total:</td>
          <td class="finaltotal ">Rs.<?php  echo $finaltotal; ?></td>
        </tr>-->
        <tr>
          <td class="bold " >Advance Paid &#8377;:</td>
          <td class="advance right" style="text-align:right;"><?php echo $table['table4']->advance; ?></td>
        </tr>
     	<tr>
          <td class="bold " >Balance Left &#8377;:</td>
          <td class="balance " style="text-align:right;"><?php  echo $balanceleft; ?></td>
        </tr>
    </table>
  </div>
 
<div class="footertext"> "Thanks for Shopping with us!"</div>
