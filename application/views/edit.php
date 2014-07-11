<html>
<head>

</head>
<style>
    .disabled {
        opacity: 0.4;
    }
</style>

<body>
<?php  
if(isset($row_id))

    {
        $rowvalues=$this->db->query("select * from user where id=$row_id")->row();

       

?>
   
  
        <form method=post action=<?php echo site_url("mycontroller/editdb"); ?>>
        <input type=text value="<?php echo $rowvalues->id; ?>" name=id class="id">
        <input type="text" value="<?php echo $rowvalues->name ;?>" name="name" class="name">
        <input type="text" value="<?php echo $rowvalues->username ;?>" name="username" class="username">
        <input type="text" value="<?php echo $rowvalues->password ;?>" name="password" class="password">
        <input type="text" value="<?php echo $rowvalues->contactno ;?>" name="contactno" class="refby">
        <input type="text" value="<?php echo $rowvalues->accesslevel ;?>" name="accesslevel" class="refby">
        <input type="text" value="<?php echo $rowvalues->shop ;?>" name="shop" class="refby">
        <input type="submit" value="submit" class="submitbut">
        <p class="namevali">This value is already in the system</p>
    </form>
        <?php
    }

?>
</body>
<script>
    $(document).ready(function () {
var old_id = $(".id").val();
        var old_name = $(".name").val();
        var old_address = $(".address").val();
        var old_telno = $(".telno").val();
        var old_refby = $(".refby").val();
        $(".namevali").hide();

        var submit=1;
       // $(".submitbut").addClass("disabled");
        $(".submitbut").click(function () {
            if (submit == 0) {
                return false;

            }
        });

        $(".name").keyup(function () {
            var newvalue = $(this).val();
            if(old_name!=newvalue){
            if (newvalue == "") {
                submit = 0;
                $(".submitbut").addClass("disabled");
                $(".namevali").hide();
            } else {

                

                $.get("<?php echo site_url("mycontroller/checkname")?>", {name: newvalue}, function (msg) {
                    
                        if(msg=="0")
                        {
                            submit=1;
                            $(".submitbut").removeClass("disabled");
                            $(".namevali").hide();
                        }
                        else {
                            submit=0;
                            $(".submitbut").addClass("disabled");
                            $(".namevali").show();
                        }
                    
                    });
                $(".namevali").show();
            }}
        });
         $(".id").keyup(function () {
            var newvalue = $(this).val();
            if(old_id!=newvalue){
            if (newvalue == "") {
                submit = 0;
                $(".submitbut").addClass("disabled");
                $(".namevali").hide();
            } else {

                

                $.get("<?php echo site_url("mycontroller/checkid")?>", {id: newvalue}, function (msg) {
                    
                        if(msg=="0")
                        {
                            submit=1;
                            $(".submitbut").removeClass("disabled");
                            $(".namevali").hide();
                        }
                        else {
                            submit=0;
                            $(".submitbut").addClass("disabled");
                            $(".namevali").show();
                        }
                    
                    });
                $(".namevali").show();
            }}
        });
         $(".address").keyup(function () {
            var newvalue = $(this).val();
            if(old_address!=newvalue){
            if (newvalue == "") {
                submit = 0;
                $(".submitbut").addClass("disabled");
                $(".namevali").hide();
            } else {

                

                $.get("<?php echo site_url("mycontroller/checkaddress")?>", {address: newvalue}, function (msg) {
                    
                        if(msg=="0")
                        {
                            submit=1;
                            $(".submitbut").removeClass("disabled");
                            $(".namevali").hide();
                        }
                        else {
                            submit=0;
                            $(".submitbut").addClass("disabled");
                            $(".namevali").show();
                        }
                    
                    });
                $(".namevali").show();
            }}
        });
         $(".refby").keyup(function () {
            var newvalue = $(this).val();
            if(old_refby!=newvalue){
            if (newvalue == "") {
                submit = 0;
                $(".submitbut").addClass("disabled");
                $(".namevali").hide();
            } else {

                

                $.get("<?php echo site_url("mycontroller/checkrefby")?>", {refby: newvalue}, function (msg) {
                    
                        if(msg=="0")
                        {
                            submit=1;
                            $(".submitbut").removeClass("disabled");
                            $(".namevali").hide();
                        }
                        else {
                            submit=0;
                            $(".submitbut").addClass("disabled");
                            $(".namevali").show();
                        }
                    
                    });
                $(".namevali").show();
            }}
        });
         $(".telno").keyup(function () {
            var newvalue = $(this).val();
            if(old_telno!=newvalue){
            if (newvalue == "") {
                submit = 0;
                $(".submitbut").addClass("disabled");
                $(".namevali").hide();
            } else {

                

                $.get("<?php echo site_url("mycontroller/checktelno")?>", {telno: newvalue}, function (msg) {
                    
                        if(msg=="0")
                        {
                            submit=1;
                            $(".submitbut").removeClass("disabled");
                            $(".namevali").hide();
                        }
                        else {
                            submit=0;
                            $(".submitbut").addClass("disabled");
                            $(".namevali").show();
                        }
                    
                    });
                $(".namevali").show();
            }}
        });
    });
</script>
</html>