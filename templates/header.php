<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/school/css/bulma.min.css">
    
    <title>
        <?php
        if (isset($title) == false) {
            echo "SchoolApp";
        } else {
            echo $title;    
        }
        ?>
    </title>
    <style>
        .is-horizontal-center {
            justify-content: center;
        }

        .is-vcentered {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }
    </style>
</head>

<body>