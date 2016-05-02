<?php include 'header1.php';?>

<div class="container" style="height:400px;width=1000px" align="justify" style="font-size=25px;margin:100px 100px 100px 100px";>
<div class="row">
<?php
$conn=mysql_connect("localhost","root","");
if(!$conn)
{
	die("Connection cannot be established");
}
else
{
	$db=mysql_select_db("astro",$conn);
	if(!$db)
	{
		die("Database cannot be connected");
	}

	else
	{
		$id=$_GET["id"];
		$sql="SELECT * FROM horo 
		      WHERE id=$id";
		$rs=mysql_query($sql);
		$row=mysql_fetch_array($rs);?>
		
		<h1><?php echo $row["zod"];?></h1>
		<?php	
		echo $row["content"];      
	}
}
?>
</div></div>
<?php include 'footer.php';?>