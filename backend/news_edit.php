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
 </head> 
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
  $id=$_GET["id"];

    $sql="SELECT * FROM news 
          WHERE id=$id";
    $rs=mysql_query($sql) ;
    $row=mysql_fetch_array($rs);  
  ?>
<form action="update_news.php">
<table style="width:100%;color:black">
  <tr>
    <td>News Heading</td><td><input type="text" size="200" name="news" value="<?php echo $row["heading"];?>"/></td>
  </tr>
  <tr>
    <td>News</td><td><textarea rows="4" cols="150" name="des" value="<?php echo $row["content"];?>"></textarea></td>
  </tr>
  <tr>
    <td>Enter Date</td><td><input type="text" id="datepicker" name="news_date"/></td>
  </tr>
</table><br><br>    
<input type="submit" name="submit" value="submit" >
</form>
</body>

