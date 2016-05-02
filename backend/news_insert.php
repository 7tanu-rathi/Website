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
       font-color:black;
       }

     table, td, tr 
     {
      border: 1px solid black;
      padding:20px;
      border-radius:5px;
      align-content:center;
      font-color:black;
     }

     body
     {
      margin:10px;
      padding:5px;
      width:100%;
      font color:black;
     }
     tr:nth-child(even) {background: #FFF}
     tr:nth-child(odd) {background: #CCC}
 </style>
</head>	

<h2 align="center" style="color:white"> Insert news</h2>
<?php
  $conn=mysql_connect("localhost","root","");
  if(!$conn)
  {
  	die("connection cannot be established");
  }
  else
  {
  	$db=mysql_select_db("astro",$conn);
  	if(!$db)
  	{
  	   die("database cannot be connected");
  	}
  }
  $news=$des="";
  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
  	$news=$des="";
  	$news=$_POST["news"];
  	$des=$_POST["des"];
  	$news_date=$_POST['news_date'];
  	$news_date2=explode("/",$news_date);
    //print_r($news_date2);exit;
  	$news_date3="$news_date2[2]-$news_date2[0]-$news_date2[1]";
    //$news_date4=date($news_date,'%d-%m-%y');
    //echo $news_date4;
  	$sql="INSERT INTO news(heading,content,date)
        VALUES ('$news','$des','".$news_date3."')";
    mysql_query($sql) ;   
  }
  //header("location:news.php");
?>
<form method="post">
<table style="width:100%;color:black">
	<tr>
		<td>News Heading</td><td><input type="text" size="200" name="news" /></td>
	</tr>
	<tr>
		<td>News</td><td><textarea rows="4" cols="150" name="des"></textarea></td>
	</tr>
	<tr>
		<td>Enter Date</td><td><input type="text" id="datepicker" name="news_date"/></td>
	</tr>	
</table><br><br>		
<input type="submit" name="submit" value="submit" >
</form>
</body>
