<?php

$news=$des="";
$news=$_POST["news"];
$des=$_POST["des"];

$connect = mysql_connect("localhost","root","");
  if(!$connect)
  die("Server Not connected");
  $db = mysql_select_db("astro",$connect);
  if(!$db)
  die("Database not connected");

  $id = $_GET["id"];

  $sql="UPDATE news 
        SET heading='$news',content='$des'
        WHERE id=$id";
  mysql_query($sql);

  header("location:news.php");

?>