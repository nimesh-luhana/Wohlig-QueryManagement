<div class="box paint color_18">
    <div class="title">
        <h4> <i class=" icon-bar-chart"></i><span>View All Query</span> </h4>
    </div>

    <div class="content top">
        <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0;">
            
            <tr>
                <th style="display:none;">Company ID</th>
                <td style="display:none;">
                    <?php echo $row->company;?></td>
            </tr>
            <tr>
                <th style="display:none;">Query</th>
                <td style="display:none;">
                    <?php echo $row->query;?></td>
            </tr>
            
            <tr>
                <th class="to_hide_phone  no_sort">Name</th>
                <td>
                    <?php echo $row->name;?></td>
            </tr>
            <tr>
                <th class="to_hide_phone  no_sort">Email</th>
                <td>
                    <?php echo $row->email;?></td>
            </tr>
            <tr>
                <th class="to_hide_phone  no_sort">Phone</th>
                <td>
                    <?php echo $row->phone;?></td>
            </tr>

            <tr>
                <th class="to_hide_phone  no_sort">Time Stamp</th>
                <td>
                    <?php echo $row->time_stamp;?></td>
            </tr>
            <?php $json=json_decode($row->json); if(isset($json)) {foreach($json as $key=>$value) echo '
            <tr>
                <th class="to_hide_phone  no_sort">'.$key."</th>
                <td>".$value."</td>
            </tr>"; } ?>





    </div>
</div>










