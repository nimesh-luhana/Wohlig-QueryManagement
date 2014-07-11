<div class="box paint color_18">
            <div class="title">
              <h4> <i class=" icon-bar-chart"></i><span>View All Invoices</span> </h4>
            </div>

<div class="content top">
              <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
                <thead>
                  <tr>
                   <th >Invoice Number</th>
                      <th class="to_hide_phone  no_sort">Customer</th>
                      <th class="to_hide_phone  no_sort">Total</th>
                      <!--<th class="to_hide_phone ue no_sort">Tax</th>-->
                       <!--<th class="to_hide_phone ue no_sort">Discount</th>
                     <th class="to_hide_phone ue no_sort">Finaltotal</th>-->
                      <th class="to_hide_phone ue no_sort">Advancepaid</th>
                      <th class="to_hide_phone ue no_sort">Balanceleft</th>
                       <th class="to_hide_phone ue no_sort">Dateofdelivery</th>
                      <th class="to_hide_phone ue no_sort">Methodofpayment</th>
                      <th class="to_hide_phone ue no_sort">Date</th>
                      <th class="to_hide_phone ue no_sort">Status</th>
                      <!--<th class="to_hide_phone ue no_sort">Feedback</th>-->
                     <th class="ms no_sort "> Actions </th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($table as $row) {
					
					 ?>
                
		<tr>
        	 <td ><?php echo $row->id+1000000;?></td>          
			<td><?php echo $row->customer; ?></td>
			<td><?php echo $row->finaltotal;?></td>
            <!--<td><?php echo $row->tax;?></td>-->
            <!--<td><?php echo $row->discount;?></td>
            <td><?php echo $row->finaltotal;?></td>-->
            <td><?php echo $row->advancepaid;?></td>
            <td><?php echo ($row->finaltotal)-($row->advancepaid);?></td>
            <td><?php echo $row->dateofdelivery;?></td>
            <td><?php echo $row->methodofpayment;?></td>
            <td><?php echo $row->date;?></td>
            <td><?php echo $row->status;?></td>
           <!-- <td><?php echo $row->feedback;?></td>-->
            <td class="ms"><div class="btn-group"> <a href="<?php echo site_url('site/editinvoice?id=').$row->id;?>" class="btn btn-small" rel="tooltip" data-placement="left" data-original-title=" edit "><i class="gicon-edit"></i></a> <a href="<?php echo site_url('site/printinvoice?id=').$row->id;?>" target="_blank" class="btn btn-small" rel="tooltip" data-placement="top" data-original-title="Print out"><i class="gicon-eye-open"></i></a><a href="<?php echo site_url('site/blackinvoice?id=').$row->id;?>" class="btn btn-small" rel="tooltip" data-placement="top" data-original-title="Make Black"><i class="gicon-eye-close"></i></a></div></td>
		</tr>
        	<?php } ?>
                </tbody>
 </div>               
 </div>