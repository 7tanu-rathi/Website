<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Astrology &amp; Horoscopes</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<link rel="icon" href="http://www.template-preview.com/bootstrap-templates/300111766/template/images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="http://www.template-preview.com/bootstrap-templates/300111766/template/images/favicon.ico" type="image/x-icon">

<link rel="stylesheet" href="bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="bootstrap-responsive.css" type="text/css" media="screen">    
<link rel="stylesheet" href="camera.css" type="text/css" media="screen">
<link rel="stylesheet" href="style.css" type="text/css" media="screen">

<script type="text/javascript" src="jquery_004.js"></script>  
<script type="text/javascript" src="jquery_006.js"></script>
<script type="text/javascript" src="superfish.js"></script>

<script type="text/javascript" src="jquery_002.js"></script>

<script type="text/javascript" src="camera.js"></script>
<script type="text/javascript" src="jquery_005.js"></script>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery_003.js"></script>
<script>
$(document).ready(function() { 
	// camera
	$('#camera_wrap').camera({
		//thumbnails: true
		alignment			: 'center', 
		autoAdvance			: true,		
		mobileAutoAdvance	: true,
		//fx					: 'simpleFade',
		height: '36%',
		hover: false,
		loader: 'none',
		navigation: false,
		navigationHover: true,
		mobileNavHover: true,
		playPause: false,
		pauseOnClick: false,
		pagination			: true,
		time: 7000,
		transPeriod: 1000,
		minHeight: '200px'
	});

	//	carouFredSel
	$('#slider3 .carousel.main ul').carouFredSel({
		auto: {
			timeoutDuration: 8000					
		},
		responsive: true,
		prev: '.prev3',
		next: '.next3',
		width: '100%',
		scroll: {
			items: 1,
			duration: 1000,
			easing: "easeOutExpo"
		},			
		items: {
        	width: '400',
			height: 'variable',	//	optionally resize item-height			  
			visible: {
				min: 1,
				max: 3
			}
		},
		mousewheel: false,
		swipe: {
			onMouse: true,
			onTouch: true
			}
	});
	$(window).bind("resize",updateSizes_vat).bind("load",updateSizes_vat);
	function updateSizes_vat(){		
		$('#slider3 .carousel.main ul').trigger("updateSizes");
	}
	updateSizes_vat();

}); //
$(window).load(function() {
	//

}); //
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
      border: 1px solid purple;
      padding:10px;
      border-radius:5px;
      font-color:black;
     }
     tr:nth-child(even) {background: #000}
     tr:nth-child(odd) {background: #000}
</style>
</head>

<body class="main">
<div id="main">

<div class="top1_wrapper">
<div class="container">
<div class="row">
<div class="span12">
<div class="top1 clearfix">
	
<header><div class="logo_wrapper"><a href=# class="logo"><img src="logo.png" alt=""></a></div></header>

<div class="top2 clearfix">

<div class="top3_wrapper">
<div class="top3 clearfix">
<div class="social_wrapper clearfix">
  <p><i>You are logged in as an administrator</i></p>
</div>
</div>	
</div>

<div class="menu_wrapper2">
<div class="menu_wrapper">
<div class="navbar navbar_">
	<div class="navbar-inner navbar-inner_">
		<a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		<div class="nav-collapse nav-collapse_ collapse">
			<ul class="nav sf-menu clearfix sf-js-enabled">
<li class="active"><a href="master.php">Home</a></li>
<li><a href="news.php">News</a></li> 
<li><a href="horo.php">Astrology</a></li>
<li><a href="slidder.php">Slidder</a></li>
<li><a href="index.php">Logout</a></li>											
    </ul>
		</div>
	</div>
</div>	
</div>	
</div>

</div>

</div>	
</div>	
</div>	
</div>	
</div>	

<div class="ic_wrapper">
<div class="container">
<div class="row">
<div class="span12">
<div class="ic clearfix">
	

   <?php
  $connect = mysql_connect("localhost","root","");
  if(!$connect)
  die("Server Not connected");
  $db = mysql_select_db("astro",$connect);
  if(!$db)
  die("Database not Connected");

  $sql1= "SELECT id, zod, image from zodiac";
  $retvalue=mysql_query($sql1);


?>
<a href="form.php" align="right" style="color:white; display:block;padding:10px">Insert Record</a>
<table style="width:100%;color:purple;" >
  <tr height="20">
      <td height="25"><b>Id</b></td><td height="25"><b>Zodiac Sign</b></td><td height="25"><b>Image</b></td><td height="25"><b>Edit Image</b></td><td height="25"><b>Operation</b></td>
  </tr>
  <?php
    $count=1;
    while($row = mysql_fetch_array($retvalue))
    {
  ?>
  <tr>
      <td><?php echo $count?></td>
      <td><?php echo $row["zod"];?></td>
      <td><a class="fancybox" href="uploads/<?php echo $row["image"];?>">
        <img src="uploads/<?php echo $row["image"];?>" style="width:50px"/></a> 
      </td>
      <td><a href="add_image.php?id=<?php echo $row['id'];?>">Edit Image</a></td>
      <td><a href="edit.php?id=<?php echo $row["id"];?>">Edit</a>&nbsp;&nbsp;<a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
  </tr>
  <?php
  $count=$count+1;
    } 
  ?>
</table>
</body>
</html>
<br>  
<footer><div class="copyright" align="center">Astrology   © 2014. All rights reserved.&nbsp;&nbsp; | &nbsp;&nbsp;<a href="#">Privacy Policy</a></div></footer>
