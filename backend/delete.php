<?php
    $connect=mysql_connect("localhost","root","");
    if(!$connect)
    {
    	die("Connection not established");
    }

    $db=mysql_select_db("astro",$connect);
    if(!$db)
    {
    	die("Database not connected");
    }

    $id = $_GET["id"];

    $sql = "DELETE from zodiac where id=$id";

    mysql_query($sql); 
    header("location:master.php");
?>