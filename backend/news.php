<?php include 'header.php';?>
<style>
  table 
     {
       border-collapse: collapse;
       border-radius: 10px;
       text-align: center;
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
 <body>
 <a href="news_insert.php" align="right" style="color:white; display:block;padding:10px">Add news</a>
  <?php
    $conn=mysql_connect("localhost","root","");
    if(!$conn)
    {
      die("connection cannot be established");
    }
    else
    {
      $db=mysql_select_db('astro',$conn);
      if(!$db)
      {
        die("Database cannot be connected");
      }
    }

    $sql="SELECT * FROM news"; 
    $rs=mysql_query($sql);
  ?>
  <table style="width:100%;color:black">
    <tr>
      <td>S.no.</td><td>News Heading</td><td>Date</td><td>Operation</td>
    </tr>
    <?php
        while($row=mysql_fetch_array($rs))
        {?>
            <tr>
              <td><?php echo $row["id"];?></td><td><?php echo $row["heading"];?></td><td><?php echo date('d F,Y',strtotime($row["date"]));?></td>
              <td><a href="news_edit.php?id=<?php echo $row["id"] ;?>">Edit</a>&nbsp;&nbsp;
              <a href="news_delete.php?id=<?php echo $row["id"] ;?>">Delete</a></td>
            </tr>
            <?php
        }
      ?>
    <tr>
    </tr>  
  </table>      
</body>