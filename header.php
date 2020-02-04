<?php
$a = "I love Machine language";
$b = " what about u?";
$c = "i love php";
$e = 50;
$f= 50;
$fonts ='Roboto Condensed';
$color = "yellow";
$bg_color = "#00bcd4";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=d, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title>PHP Syntax</title><!--Start learning Php from now...-->
    <style>
    *{
        margin:0;
        padding:0;
    }
    body{
        font-family:<?php echo $fonts ?>
    }
    .phpcode{
        width:1000px;
        margin:0 auto;
        background:#000;
        color:#fff;

    }
    .headerOption, .footerOption{
        background:#09F6E9;
        text-align:center;
        padding:20px;

    }

    .maincode{
        min-height:400px;
        width: auto;
        background: #b3b3b3;
        border: 5px solid #000;
        margin:10px;
        padding:10px;

    }
    h3{
        padding:5px;
        color:#09f6e9;
        font-size:25px;
    }
    hr{        
        margin-top:5px;
    }


    </style>
</head>
<body>

            <!--Header-->
        <div class="headerOption">
            <?php echo "<h2>$c ".($e+$f)."%</h2>" ?>
        </div>
