<html>

<head>
    <script src="<?php base_url("assets/js/jquery.min.js")?>"></script>
</head>

<body>
    <div class="container">
        <form action="<?php echo site_url(" welcome/createsubmit ");?>" method="post">

            <input type="text" placeholder="Name" name="name" class="form-control">
            <input type="text" placeholder="lastname" name="lastname" class="form-control">
            <input type="text" placeholder="Roll No." name="rollno" class="form-control">

            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</body>

</html>
