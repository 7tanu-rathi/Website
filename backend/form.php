<?php include 'header.php';?>

<style>
  table
  {
    border-collapse: collapse;
    border-radius: 10px;
    text-align: center;
    background-color: black;
  }

  table, td, tr 
  {
    border: 1px solid black;
    padding:10px;
    border-radius:5px;
  }
</style>
<?php

  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
  	$zod=$content="";
  	$zod=$_POST["zod"];
  	$content=$_POST["content"];

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
  			$sql="INSERT INTO zodiac(zod,content)
  			      values('$zod','$content')";
  			mysql_query($sql);      
  		}
  	}
  }
?>

<form method="post">
 <table align="center" bgcolor="black">
  <tr>
   <td><p style="font-color:black;font-size:20px">Enter the zodiac sign<input type="text" style="font-size:20px; padding:10px;" name="zod" placeholder="Enter Zodiac" size="50"padding:5px required/></p></td>
  </tr>
  <tr>
   <td><p style="font-color:black;font-size:20px">Enter the content<input type="text" style="font-size:20px; padding:10px;" name="content" placeholder="Enter content" size="50"padding:5px required/></p></td>
  </tr>
  <!--<tr>
  	<td><form action="upload_img.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $_REQUEST["id"];?>">

    <p align="left" style="color:purple"><b>Select image to upload:</b></p>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
    </form></td><br><br>
  </tr>--> 
  </table>
 <div align="center"><input type="submit" align="center"name="submit" value="Submit" style="padding: 7px 10px;" /></div>
</form>	
