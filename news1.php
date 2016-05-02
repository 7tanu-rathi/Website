<?php include 'header1.php';?>

<style>
  table 
     {
       border-collapse: collapse;
       border-radius: 10px;
       text-align: center;
       }

     table, td, tr 
     {
      border: 1px solid white;
      padding:20px;
      border-radius:8px;
      align-content:center;
      font-color:black;
      opacity:0.8;
     }

     body
     {
      width:100%;
      font color:black;
      text-align: center;
     }
     tr:nth-child(even) {background-color: #000}
     tr:nth-child(odd) {background-color: #111}
 </style>
 <body>
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
  <br><br>
  <div class="container" style="height:600px;width=1000px" align="justify" style="font-size=25px;margin:100px 100px 100px 100px";>
<div class="row"> 
  <table style="width:100%;color:white">
    <tr>
      <td>S.no.</td><td>News Heading</td><td>Date</td><td>View details</td>
    </tr>
    <?php
      $count=1;
        while($row=mysql_fetch_array($rs))
        {?>
            <tr>
              <td><?php echo $count;?></td><td><?php echo $row["heading"];?></td><td><?php echo date('d F,Y',strtotime($row["date"]));?></td><td><a href="detail.php?id=<?php echo $row["id"];?>">Details</a></td>
            </tr>
            <?php
            $count=$count+1;
        }
      ?>
    <tr>
    </tr>  
  </table>
  </div></div>      
</body><br><br>
<?php include 'footer.php';?>