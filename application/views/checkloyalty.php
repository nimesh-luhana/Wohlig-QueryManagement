<?php $this->load->view("imageblank/header"); ?>
<h2 style="
    font: normal 30px 'Copse';  color: #0895D8;  width: 50%;  left: 0;
    text-transform: none;
">
Check Loyalty Points</h2>
<input type="text" placeholder="Enter your Loyalty Card Number" style="
    width: 300px;
    height: 30px;
">
<input type="submit" value="Submit" class="btn btn-primary loyaltybut">

<div class="points" style="
    font: normal 20px 'Copse';  color: #0895D8;
    line-height: 41px;
"></div>
<script>
$(document).ready(function(e) {
    $(".loyaltybut").click(function(e) {
        $(".points").html("You have 0 points.");
    });
});
</script>
<?php $this->load->view("imageblank/footer"); ?>