<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        *{margin:0; padding:0;}
        ul{list-style: none;}
        .main{width: 290px; height:400px;  border: solid 3px red;}
        .main_show{width: 290px; height: 50px; border: 1px solid #ccc;}
        .main_button{width: 290px; height: 340px; margin-top:5px;}
        .main_button ul li{float: left; width: 70px; height: 70px; margin: 1px;}
        .main_button ul li button{width: 70px; height: 70px; font-size:25px; font-weight: bold;}
    </style>
    <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.js"></script>
</head>
<body>
    <a href="<?php echo U('Index/index/init');?>">Thinkphp3.2 Curd Test</a>
</body>
</html>
<script>
    $(document).ready(function() {
        $(".m").click(function() {

        });
    });
</script>