<html>
<head>
    <title> 
    Database Access
    </title>
    </head>
<body>
    <form  >
        <a href="<?php echo site_url('mycontroller/create_user')?>"><input class="btn btn-danger" type=button value="Create User" ></a>
        <a href="<?php echo site_url('mycontroller/display_data_user')?>"><input class="btn btn-danger" type=button value="View/Update User"></a><br><br>
        <a href="<?php echo site_url('mycontroller/create_company')?>"><input class="btn btn-warning" type=button value="Create Company" ></a>
        <a href="<?php echo site_url('mycontroller/display_data_company')?>"><input class="btn btn-warning" type=button value="View/Update Company "></a><br><br>
        <a href="<?php echo site_url('mycontroller/create_usercompany')?>"><input class="btn btn-success" type=button value="Create User Company" ></a>
        <a href="<?php echo site_url('mycontroller/display_data_usercompany')?>"><input class="btn btn-success" type=button value="View/Update User Company"></a><br><br>
        <a href="<?php echo site_url('mycontroller/create_query')?>"><input class="btn btn-info" type=button value="Create Query" ></a>
        <a href="<?php echo site_url('mycontroller/display_data_query')?>"><input class="btn btn-info" type=button value="View/Update Query"></a><br><br>
          
        </form>
    </body>
</html>