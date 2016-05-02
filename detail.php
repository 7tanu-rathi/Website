<?php include 'header1.php';?>
<br><br>
<div class="container" style="height:600px;width=1000px" align="justify" style="font-size=25px;margin:100px 100px 100px 100px";>
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
		$sql="SELECT * FROM news 
		      WHERE id=$id";
		$rs=mysql_query($sql);
		$row=mysql_fetch_array($rs);?>
		
		<h3><?php echo $row["heading"];?></h3>
		<?php	
		echo $row["content"];      
	}
}
?>
<br><br></div></div>
<?php include 'footer.php';?>