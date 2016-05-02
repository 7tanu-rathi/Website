<?php include 'header.php';?>

<head>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
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
</head>
<?php

  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
  	$zod=$content=$date=$id="";
    $id=$_POST["id"];
  	$zod=$_POST["zod"];
  	$content=$_POST["content"];
    $date=$_POST['date'];
  	$date2=explode("/",$date);
    //print_r($news_date2);exit;
  	$date3="$date2[2]-$date2[0]-$date2[1]";
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
  			$sql="INSERT INTO horo(id,zod,content,date)
  			      values('$id','$zod','$content','".$date3."')";
  			mysql_query($sql);      
  		}
  	}
  }
?>

<form method="post">
 <table align="center" style="color:black" bgcolor="black">
  <tr>
    <td><p style="font-color:black;font-size:20px">Enter id</td><td><input type="text" style="font-size:20px; padding:10px;" name="id" placeholder="Enter id" size="50"padding:5px required/></p></td>
  <tr>
   <td><p style="font-color:black;font-size:20px">Enter the zodiac sign</p></td>
   <td>
  <select name="zod">
      <option value="Aries">Aries</option>
      <option value="Taurus">Taurus</option>
      <option value="Gemini">Gemini</option>
      <option value="Cancer">Cancer</option>
      <option value="Leo">Leo</option>
      <option value="Virgo">Virgo</option>
      <option value="Libra">Libra</option>
      <option value="Scorpio">Scorpio</option>
      <option value="Sagittarius">Sagittarius</option>
      <option value="Capricorn">Capricorn</option>
      <option value="Aquarius">Aquarius</option>
      <option value="Pisces">Pisces</option>
   </select>
   </td>    
  </tr>
  <tr>
   <td><p style="font-color:black;font-size:20px">Enter the horoscope</td><td><textarea rows="4" cols="150" name="content"></textarea></p></td>
  </tr>
  <tr>
  	<td><p style="font-color:black;font-size:20px">Enter Date</td><td><input type="text" style="font-size:20px; padding:10px;" id="datepicker" name="date"/></p></td>
  </tr>	
  </table>
 <div align="center"><input type="submit" align="center"name="submit" value="Submit" style="padding: 7px 10px;" /></div>
</form>	