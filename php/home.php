<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home l A Leading Christian University</title>
<link href="../logo-small.png" rel="icon" sizes="68x55" type="image/png">
<link href="../css/idea.css" rel="stylesheet">
<link href="../css/home.css" rel="stylesheet">
</head>
<body>
<div id="wb_Text2" style="position:absolute;left:336px;top:258px;width:694px;height:255px;text-align:center;z-index:0;">
<span style="color:#000000;font-family:APOLLO;font-size:96px;">Feel Free to <br>Share Your Ideas</span></div>
<div id="wb_Text3" style="position:absolute;left:484px;top:513px;width:398px;height:18px;text-align:center;z-index:1;">
<span style="color:#000000;font-family:'DISCIPLINA PERSONAL USE';font-size:15px;">Courtecy of St. Paul's University</span></div>
<?php
   $conn = mysqli_connect("localhost", "root", "", "spublog");
   $show = "SELECT * FROM blog";
   $query = mysqli_query($conn, $show);

   ?>

   <div id="Blog1" style="overflow:hidden;position:absolute;left:119px;top:716px;width:1165px;z-index:2;">
   <?php foreach ($query as $q) { ?>
      <div class="blogitem">
            <?php
            echo '<div class="blogthumb"><img src="../images/' . $q['image'] . '"></div>';
            ?>
            <div class="bloginfo">
               <?php
               echo '<span class="blogsubject">' . $q['title'] . '</span>';
               ?>
               <?php
               echo '<p><span style="color:#000000;">' . $q['content'] . '</span></p>';
               ?>
            </div>
         </div>
         <div class="clearfix visible-col1"></div>
      <?php } ?>
   </div>
   <div id="wb_addpost" style="position:absolute;left:1227px;top:42px;width:104px;height:42px;z-index:3;">
<a class="ui-button ui-corner-all" id="addpost" href="../addpost.html" style="width:100%;height:100%;">Add Post</a></div>
</body>
</html>