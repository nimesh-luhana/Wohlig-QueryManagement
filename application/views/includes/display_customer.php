<div class="box paint color_18">
    <div class="title">
        <h4> <i class=" icon-bar-chart"></i><span>View All Companies</span> </h4>
    </div>

    <div class="content top">
        <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
            <thead>
                <tr>
                    <th style="display:none;">ID</th>

                    <th class="to_hide_phone  no_sort" style="width:95%;">Company</th>
                    <th class="to_hide_phone  no_sort">View</th>


                </tr>
            </thead>
            <tbody>
                <?php foreach($table as $row) { ?>
                <tr>
                    <td style="display:none;">
                        <?php echo $row->id;?></td>

                    <td>
                        <?php echo $row->company;?></td>


                    <td class="ms">
                        <div class="btn-group"> <a href=<?php echo site_url( 'customer/display_data_queries'). "?id=".$row->c_id;?> class="btn btn-small" rel="tooltip" data-placement="top" data-original-title="View Queries"><i class="gicon-eye-open"></i></a> 
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
    </div>
</div>










