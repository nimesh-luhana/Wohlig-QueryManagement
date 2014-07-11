
<div class="row-fluid">
  <div class="span12">
    <div class="box paint color_7">
      <div class="title">
        <h4> <i class="icon-book"></i><span>Customer Info</span> </h4>
      </div>
      <div class="content">
        <h2>List of Today's Birthday</h2>
        <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
          <thead>
            <tr>
             <th class="to_hide_phone  no_sort">Customername</th>
              <th class="to_hide_phone  no_sort">Contact</th>
              <th class="to_hide_phone  no_sort">Address</th>
              <th class="to_hide_phone ue no_sort">Email</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($data as $row) { ?>
            <?php  if($row->dateofbirth==date("Y-m-d")) {?>
            <tr>
              <td><?php echo $row->name;?></td>
              <td><?php echo $row->phone;?></td>
              <td><?php echo $row->address;?></td>
              <td><?php echo $row->email;?></td>
            </tr>
            <?php } }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>
  <div class="row-fluid">
  <div class="span12">
    <div class="box paint color_11">
      <div class="title">
        <h4> <i class="icon-tasks"></i> <span>Customer Info</span> </h4>
      </div>
      <div class="content top">
        <h2>List of Today's Anniversary</h2>
        <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
          <thead>
            <tr>
             <th class="to_hide_phone  no_sort">Customername</th>
              <th class="to_hide_phone  no_sort">Contact</th>
              <th class="to_hide_phone  no_sort">Address</th>
              <th class="to_hide_phone ue no_sort">Email</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($data as $row) { ?>
            <?php  if($row->anniversary==date("Y-m-d")) {?>
            <tr>
              <td><?php echo $row->name;?></td>
              <td><?php echo $row->phone;?></td>
              <td><?php echo $row->address;?></td>
              <td><?php echo $row->email;?></td>
            </tr>
            <?php } }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

