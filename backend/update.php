<?php

$zod=$_POST["zod"];
$content=$_POST["content"];

$connect = mysql_connect("localhost","root","");
  if(!$connect)
  die("Server Not connected");
  $db = mysql_select_db("form",$connect);
  if(!$db)
  die("Database not Connected");

  $id = $_GET["id"];

  $sql="UPDATE zodiac
        SET zod='$zod', content='$content'
        WHERE id=$id";
  mysql_query($sql);

  header("location:master.php");
  ?>
        