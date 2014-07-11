<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-barcode.js"); ?>"></script>
<style>
div.b128 {
	border-left: 1px black solid;
	height: 20px;
}
body {
	margin-top: 0px;
	margin-left: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.ean8 {
	padding:0 18px !important;
	
}
.ean8 div {
height: 30px !important;
}
</style>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <?php  foreach($table as $row) { 
		
		for($i=0;$i<$row->quantity;$i++)
		{
	?>
    	
    <tr class="main"> <td style="display:none" class="barcode"><?php echo $row->id; ?></td>
      <td width="123" height="65" class="ean8">
      </td>
      <td width="110" style="padding-left:9px;"><table border="0" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td style="font-size:10px"><?php echo $row->name;?></td>
            </tr>
            <tr>
              <td style="font-size:10px"> MRP :&#8377;<?php echo $row->mrp;?></td>
            </tr>
            <tr>
              <td style="font-size:10px"><?php  echo $row->gender;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $row->shop;?></td>
            </tr>
            <tr>
              <td style="font-size:10px"></td>
            </tr>
          </tbody>
        </table></td>
    </tr>
    <?php }} ?>
  </tbody>
</table>
<script>
$(document).ready(function() {
    var alltr=$("tr.main");
	
	
	for(var i=0;i<alltr.length;i++)
	{
		var barcode=$("tr.main .barcode:eq("+i+")").text();
		var barcode2=parseInt(barcode)+1000000;
		$("tr.main .ean8:eq("+i+")").barcode(barcode2+"", "ean8");
		//$("tr.main .ean8:eq("+i+")").html(barcode2+"");
	}

});
</script>
</body>
</html>