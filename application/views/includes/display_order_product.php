<div class="box paint color_18">
            <div class="title">
              <h4> <i class=" icon-bar-chart"></i><span>View All Order Product</span> </h4>
            </div>

<div class="content top">
              <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
                <thead>
                  <tr>
                   <th style="display:none;" >O_ID</th>
                   <th style="display:none;">ID</th>
                      <th class="to_hide_phone  no_sort">Product Attribute</th>
                      <th class="to_hide_phone  no_sort">Quantity</th>
                      <th class="to_hide_phone  no_sort">Price</th>
                      <th class="to_hide_phone  no_sort">Amount</th>
                 
                       
                     
             
                  </tr>
                </thead>
                <tbody>
                <?php foreach($table as $row) { ?>
		<tr>
       	 <td style="display:none;"><?php echo $row->o_id;?></td> 
        	 <td style="display:none;"><?php echo $row->id;?></td>          
			<td><?php if(!isset($row->pattribute)) echo "none"; else echo $row->pattribute;?></td>
		
                                              
          
                 <td ><?php echo $row->quantity;?></td>          
                  <td ><?php echo $row->price;?></td>  
                   <td ><?php echo $row->amount;?></td>                  
           
            <td class="ms"><div class="btn-group"> <a href="<?php echo site_url('mycontroller/edit_order_product?id=').$row->id."&o_id=".$row->o_id;?>" class="btn btn-small" rel="tooltip" data-placement="left" data-original-title=" edit "><i class="gicon-edit"></i></a> <a class="btn btn-small" rel="tooltip" data-placement="top" data-original-title="View"><i class="gicon-eye-open"></i></a><a href="<?php echo site_url('mycontroller/delete_order_product?id=').$row->id."&o_id=".$row->o_id;?>" class="btn  btn-small" rel="tooltip" data-placement="bottom" data-original-title="Remove"><i class="gicon-remove "></i></a>  </div></td>
		</tr>
        	<?php } ?>
                </tbody>
 </div>               
 </div>
          

          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
     