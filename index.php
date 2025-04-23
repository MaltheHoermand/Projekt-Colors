<?php


$colors = require_once("decode_json.php");
    require_once("classes/View.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colors</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>
<body>

<div class="container" style="margin-top:50px;">
    <div class="row">

        <?php View::print_card($colors); ?>

    </div><!--/.row-->
</div><!--/.container-->
</body>
</html>