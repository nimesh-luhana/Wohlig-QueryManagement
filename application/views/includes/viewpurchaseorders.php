<div class="box paint color_18">
            <div class="title">
              <h4> <i class=" icon-bar-chart"></i><span>View All Purchase Bill</span> </h4>
            </div>

<div class="content top">
              <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
                <thead>
                  <tr>
                    <th class="jv no_sort"> <label class="checkbox ">
                        <input type="checkbox">
                      </label>
                    </th>
                      <th >ID</th>
                      <th class="to_hide_phone  no_sort">Vendor</th>
                      <th class="to_hide_phone  no_sort">Total</th>
                      <!--<th class="to_hide_phone ue no_sort">Tax</th>
                      <th class="to_hide_phone ue no_sort">Finaltotal</th>-->
                      <th class="to_hide_phone ue no_sort">Status</th>
                      <th>Cancel order?</th>
                      <th class="ms no_sort "> Actions </th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($table as $row) { ?>
		<tr>
        	<td class="no_sort"> <label class="checkbox ">
                        <input type="checkbox">
                      </label></td>
            <td ><?php echo $row->id+1000000;?></td>          
			<td><?php echo $row->vendor; ?></td>
			<td><?php echo $row->total;?></td>
            <!--<td><?php echo $row->tax;?></td>
            <td><?php echo $row->finaltotal;?></td>-->
            <td><?php echo $row->status;?></td>
            <td ><?php if($row->status=='ordered' ) {?><a style="color:white;" href="<?php echo site_url('site/cancelpurchase?id=').$row->id; ?>" >Cancel</a><?php } ?></td>
            <td class="ms"><div class="btn-group"><a href="<?php echo site_url('site/editpurchaseorderentry?id=').$row->id;?>" class="btn btn-small" rel="tooltip" data-placement="left" data-original-title=" edit "><i class="gicon-edit"></i></a> </div></td>
		</tr>
        	<?php } ?>
                </tbody>
 </div>               
 </div>