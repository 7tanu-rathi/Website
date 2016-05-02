<?php include 'header.php';?>

<?php
  $connect = mysql_connect("localhost","root","");
  if(!$connect)
  die("Server Not connected");
  $db = mysql_select_db("astro",$connect);
  if(!$db)
  die("Database not Connected");

  $sql1= "SELECT id, name, image from slidder";
  $retvalue=mysql_query($sql1);
?>

<a href="form.php" align="right" style="color:white; display:block;padding:10px">Insert Record</a>
<table style="width:100%;color:black;" >
  <tr height="20">
    <td height="25"><b>Id</b></td><td height="25"><b>Name</b></td><td height="25"><b>Image</b></td><td height="25"><b>Edit Image</b></td>
  </tr>
  <?php
    $count=1;
    while($row = mysql_fetch_array($retvalue))
    {
  ?>
    <tr>
     <td><?php echo $count?></td>
     <td><?php echo $row["name"];?></td>
     <td><a class="fancybox" href="uploads/<?php echo $row["image"];?>">
       <img src="uploads/<?php echo $row["image"];?>" style="width:50px"/></a> 
     </td>
     <td><a href="add_image2.php?id=<?php echo $row['id'];?>">Edit Image</a></td>
    </tr>
   <?php
  $count=$count+1;
    } 
  ?>
</table>  