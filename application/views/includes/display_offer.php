<div class="box paint color_18">
            <div class="title">
              <h4> <i class=" icon-bar-chart"></i><span>View All Offers</span> </h4>
            </div>

<div class="content top">
              <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
                <thead>
                  <tr>
                   <th style="display:none;">ID</th>
                      <th class="to_hide_phone  no_sort">Name</th>
                      <th class="to_hide_phone  no_sort">Product</th>
                      <th class="to_hide_phone  no_sort">Description</th>
                      <th class="to_hide_phone  no_sort">Status</th>
                  
                       
                     
             
                  </tr>
                </thead>
                <tbody>
                <?php foreach($table as $row) { ?>
		<tr>
        	 <td style="display:none;"><?php echo $row->id;?></td>          
			<td><?php echo $row->name;?></td>
			<td><?php echo $row->pname;?></td>
                 <td ><?php echo $row->description;?></td>          
                  <td ><?php echo $row->status;?></td>  
                                  
           
            <td class="ms"><div class="btn-group"> <a href="<?php echo site_url('mycontroller/edit_offer?id=').$row->id;?>" class="btn btn-small" rel="tooltip" data-placement="left" data-original-title=" edit "><i class="gicon-edit"></i></a> <a class="btn btn-small" rel="tooltip" data-placement="top" data-original-title="View"><i class="gicon-eye-open"></i></a><a href="<?php echo site_url('mycontroller/delete_offer?id=').$row->id;?>" class="btn  btn-small" rel="tooltip" data-placement="bottom" data-original-title="Remove"><i class="gicon-remove "></i></a>  </div></td>
		</tr>
        	<?php } ?>
                </tbody>
 </div>               
 </div>
          

          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
     