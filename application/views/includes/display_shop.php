<div class="box paint color_18">
            <div class="title">
              <h4> <i class=" icon-bar-chart"></i><span>View All Shops</span> </h4>
            </div>

<div class="content top">
              <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
                <thead>
                  <tr>
                   <th style="display:none;">ID</th>
                      <th class="to_hide_phone  no_sort">Name</th>
                      <th class="to_hide_phone  no_sort">Contact Person</th>
                       <th class="to_hide_phone  no_sort">Company Name</th>
                        <th class="to_hide_phone  no_sort">Vat Tin</th>
                         <th class="to_hide_phone  no_sort">State</th>
                         <th class="to_hide_phone  no_sort">City</th>
                         <th class="to_hide_phone  no_sort">Area</th>
                    
                          <th class="to_hide_phone  no_sort">Office Phone</th>
                           <th class="to_hide_phone  no_sort">Contact Phone</th>
                     
             
                  </tr>
                </thead>
                <tbody>
                <?php foreach($table as $row) { ?>
		<tr>
        	 <td style="display:none;"><?php echo $row->id;?></td>          
			<td><?php echo $row->name;?></td>
			<td><?php echo $row->contact_person;?></td>
			<td><?php echo $row->company_name;?></td>
			<td><?php echo $row->vat_tin;?></td>
			<td><?php echo $row->state; ?></td>
			<td><?php echo $row->city;?></td>
			<td><?php echo $row->area;?></td>
			
			<td><?php echo $row->office_phone;?></td>
			<td><?php echo $row->contact_phone; ?></td>
			
			
           
            <td class="ms"><div class="btn-group"> <a href="<?php echo site_url('mycontroller/edit_shop?id=').$row->id;?>" class="btn btn-small" rel="tooltip" data-placement="left" data-original-title=" edit "><i class="gicon-edit"></i></a> <a class="btn btn-small" rel="tooltip" data-placement="top" data-original-title="View"><i class="gicon-eye-open"></i></a> <a href="<?php echo site_url('mycontroller/delete_shop?id=').$row->id;?>" class="btn  btn-small" rel="tooltip" data-placement="bottom" data-original-title="Remove"><i class="gicon-remove "></i></a> </div></td>
		</tr>
        	<?php } ?>
                </tbody>
 </div>               
 </div>
          

          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
     