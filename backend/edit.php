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
  		 $id = $_GET["id"];
      
       $sql = "select * from zodiac where id=$id";
       $rs = mysql_query($sql);
       $row = mysql_fetch_array($rs);      
  		}
  	}

?>

<form method="post" action="update.php">
  <input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
 <table align="center" bgcolor="black">
  <tr>
   <td><p style="font-color:black;font-size:20px">Enter the zodiac sign<input type="text" style="font-size:20px; padding:10px;" name="zod" value="<?php echo $row["zod"];?>" size="50"padding:5px required/></p></td>
  </tr>
  <tr>
   <td><p style="font-color:black;font-size:20px">Enter the content<input type="text" style="font-size:20px; padding:10px;" name="content" value="<?php echo $row["content"];?>" size="50"padding:5px required/></p></td>
  </tr> 
  </table>
 <div align="center"><input type="submit" align="center"name="submit" value="Submit" style="padding: 7px 10px;" /></div>
</form>	
