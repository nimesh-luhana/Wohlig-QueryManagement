<div class="box paint color_18">
            <div class="title">
              <h4> <i class=" icon-bar-chart"></i><span>View All Products</span> </h4>
            </div>

<div class="content top">
<?php $this->config_model->pagenodisplay($total); ?>

              <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
                <thead>
                  <tr>
                     <th style="display:none;">ID</th>
                      <th class="to_hide_phone  no_sort">Name</th>
                      <th>Image</th>
                      <th class="to_hide_phone  no_sort">Model Number</th>
                      <th class="to_hide_phone  no_sort">Brand</th>
                      <th class="to_hide_phone ue no_sort">Gender</th>
                      <th class="to_hide_phone ue no_sort">Category</th>
                      <!--<th class="to_hide_phone ue no_sort">Frametype</th>
                      <th class="to_hide_phone  no_sort">Framesize</th>
                      <th class="to_hide_phone  no_sort">Description</th>
                      <th class="to_hide_phone  no_sort">Productnature</th>
                      <th class="to_hide_phone  no_sort">Producttype</th>
                      <th class="to_hide_phone  no_sort">Color</th>
                      <th class="to_hide_phone  no_sort">Color Number</th>
                      <th class="to_hide_phone  no_sort">Declareimage</th>
                      <th class="to_hide_phone  no_sort">Declareprice</th>-->
                      <th class="to_hide_phone  no_sort">MRP</th>
                      <th class="to_hide_phone  no_sort">Discount</th>
                      <!--<th class="to_hide_phone  no_sort">Tax</th>
                      <th class="to_hide_phone  no_sort">Cost</th>
                      <th class="to_hide_phone  no_sort">Status</th>-->
                      <th>Uploadimages</th>
                      <th class="ms no_sort "> Actions </th>
                  </tr>
                </thead>
                <tbody>
                
                <?php foreach($table as $row) { ?>
		<tr>
        	<td style="display:none;"><?php echo $row->id;?></td> 
            <td><?php echo $row->name; ?></td>
            <td ><img src="<?php echo base_url("uploads");?><?php echo "/".$row->image;?>" style="height:100px;"/></td>        
			<td><?php echo $row->modelno; ?></td>
			<td><?php echo $row->brand;?></td>
            <td><?php echo $row->gender;?></td>
            <td><?php echo $row->category;?></td>
            <!--<td><?php echo $row->frametype;?></td>
            <td><?php echo $row->framesize;?></td>
            <td><?php echo $row->description;?></td>
            <td><?php echo $row->productnature;?></td>
            <td><?php echo $row->producttype;?></td>
            <td><?php echo $row->color;?></td>
            <td><?php echo $row->colorno;?></td>
            <td><?php echo $row->declareimage;?></td>
            <td><?php echo $row->declareprice;?></td>-->
            <td><?php echo $row->mrp;?></td>
             <td><?php echo $row->discount;?>%</td>
            <!--<td><?php echo $row->tax;?></td>-->
           <!-- <td><?php echo $row->cost;?></td>-->
            <!--<td><?php echo $row->status;?></td>-->
            <td><a style="color:white;" href="<?php echo site_url('site/createimageupload?id=').$row->id;?>">Upload</a></td>
            
            <td class="ms"><div class="btn-group"> <a href="<?php echo site_url('site/editproduct?id=').$row->id;?>" class="btn btn-small" rel="tooltip" data-placement="left" data-original-title=" edit "><i class="gicon-edit"></i></a> <a class="btn btn-small" rel="tooltip" data-placement="top" data-original-title="View"><i class="gicon-eye-open"></i></a> <a href="<?php echo site_url('site/deleteproduct?id=').$row->id;?>" class="btn  btn-small" rel="tooltip" data-placement="bottom" data-original-title="Remove"><i class="gicon-remove "></i></a> </div></td>
		</tr>
        	<?php } ?>
                </tbody>
                
                
               </table>
                <?php $this->config_model->pagenodisplay($total); ?>
 </div>               
 </div>