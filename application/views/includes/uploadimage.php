
<div class="box paint color_20">
            <div class="title">
              <h4> <i class=" icon-bar-chart"></i><span>View Images</span> </h4>
            </div>

<div class="content top">
			 <div class="form-row control-group row-fluid">
             <form class="form-horizontal row-fluid" method="post" enctype="multipart/form-data" action="<?php echo site_url('site/imageupload?id='.$before->id );?>">
               	 <label class="control-label span2" for="search-input">Image Upload</label>
                  <div class="controls span3">
                    <div class="input-append row-fluid">
                      <input type="file" class="spa1n6 fileinput" id="search-input" name="image" class="imagename" >
                    </div>
                  </div>
                  <div class="span3"> <button class="btn btn-primary imagesubmit">Submit</button></div>
             </form>
         </div>			
              <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
                <thead>
                  <tr>
                      <th class="to_hide_phone  no_sort">Name</th>
                      <th>Status</th>
                      <th>Make it Default?</th>
                      <th>Order Number</th>
                     <th class="ms no_sort "> Actions </th>
                  </tr>
                </thead>
                <tbody class="tablebody">
                <tr>
                 <?php foreach($table as $row) { ;?>
                <td style="display:none;" class="rowid"><?php echo $row->id;?></td>          
				<td ><img src="<?php echo base_url("uploads");?><?php echo "/".$row->image;?>" style="height:100px;"/></td>
                <td><?php if($row->is_default=="1") { echo "Image is default"; } else { echo "";} ?></td>
                <td><a style="color:white;" href="<?php echo site_url('site/defaultimage?imageid='.$row->id.' && id='.$before->id);?>">Default</a></td>
                <td style="width:30px;"><?php if($row->is_default=="1") { echo ''; } else { echo '<input type="text" id="normal-field" class="order3" value="'.$row->order.'" class="row-fluid" name="ordernumber">';} ?></td>
                <td class="ms"><div class="btn-group"><a href="<?php echo site_url('site/deleteimage?imageid='.$row->id.' && id='.$before->id );?>" class="btn  btn-small deleteimage" rel="tooltip" data-placement="bottom" data-original-title="Remove"><i class="gicon-remove "></i></a> </div></td>
                </tr>
               <?php } ?>
                </tbody>
        </table>
        <script>
		$(document).ready(function(e) {
            $('.order3').keyup(function() {
				var form_data={
					order: $(this).val(),
					id: parseInt($(this).parents('tr').children('.rowid').text()),
				};
				//console.log(form_data);
				$.post("<?php echo site_url("site/changeorder"); ?>", form_data);
			});
        });
		</script>
</div>               
</div>

