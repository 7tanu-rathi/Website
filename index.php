<!DOCTYPE html> <html lang="en"><head> <meta http-equiv="content-type"
content="text/html; charset=UTF-8"> <title>Astrology &amp;
Horoscopes</title> <meta charset="utf-8"> <meta name="viewport"
content="width=device-width, initial-scale=1.0"> <meta
name="description" content="Your description"> <meta name="keywords"
content="Your keywords"> <meta name="author" content="Your name">
<link rel="icon" href="http://www.template-preview.com/bootstrap-
templates/300111766/template/images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="http://www.template-
preview.com/bootstrap-
templates/300111766/template/images/favicon.ico" type="image/x-icon">

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
</head>

<body class="main">
<div id="main">

<div class="top1_wrapper">
<div class="container">
<div class="row">
<div class="span12">
<div class="top1 clearfix">
	
<header><div class="logo_wrapper"><a href="index.php" class="logo"><img src="logo.png" alt=""></a></div></header>

<div class="top2 clearfix">

<div class="top3_wrapper">
<div class="top3 clearfix">
<div class="social_wrapper clearfix">
	<ul class="social clearfix">
	    <li><a href="#"><img src="social_ic1.png"></a></li>
	    <li><a href="#"><img src="social_ic2.png"></a></li>
	    <li><a href="#"><img src="social_ic3.png"></a></li>	    
	    <li><a href="#"><img src="social_ic4.png"></a></li>	    
	    <li><a href="#"><img src="social_ic5.png"></a></li>	    
	</ul>
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
<li class="active"><a href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li class="sub-menu sub-menu-1"><a href=#>Services</a>
<ul style="display: none;">	
	<li class="sub-menu sub-menu-2"><a href=#>daily horoscope<em></em></a>
		<ul style="display: none;">
			<li><a href=#>lorem ipsum dolor</a></li>
			<li><a href=#>sit amet</a></li>
			<li><a href=#>adipiscing elit</a></li>
			<li><a href=#>nunc suscipit</a></li>
			<li><a href=#>404 page not found</a></li>
		</ul>
	</li>
	<li class="sub-menu sub-menu-2"><a href=#>business horoscope<em></em></a>
		<ul style="display: none;">
			<li><a href=#>lorem ipsum dolor</a></li>
			<li><a href=#>sit amet</a></li>
			<li><a href=#>adipiscing elit</a></li>
			<li><a href=#>nunc suscipit</a></li>									
		</ul>
	</li>
	<li><a href=#>travel horoscope</a></li>						
</ul>						
</li>
<li><a href=#>Astrology</a></li>
<li><a href=#>Horoscopes</a></li>
<li><a href="contact.php">contact Us</a></li>											
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
    $sql="SELECT * FROM zodiac";
    $rs=mysql_query($sql);
  }
 }

?>  

<nav class="menu_ic">
  <ul id="menu_ic">
    <?php
    //$count=0;
    while($row = mysql_fetch_array($rs))
    { //echo $row["id"];
  ?>
    <li>
      <a href="zod.php?id=<?php echo $row["id"];?>" class="rollover">
        <div class="cube">
          <div class="front">
            <img src="backend/uploads/<?php echo $row["Image"];?>" alt="" class="img_front">            
            <div class="txt1"><?php echo $row["zod"];?></div>
          </div>
          <div class="back">
            <img src="backend/uploads/<?php echo $row["Image"];?>" alt="" class="img_back">            
            <div class="txt1"><?php echo $row["zod"];?></div>
          </div>
        </div>
      </a>
    </li>
    <?php
  //$count=$count+1;
    } 
  ?>
<!--
    <li>
      <a href="#" class="rollover">
        <div class="cube">
          <div class="front">
            <img src="ic2.png" alt="" class="img_front">            
            <div class="txt1">Taurus</div>
          </div>
          <div class="back">
            <img src="ic2.png" alt="" class="img_back">            
            <div class="txt1">Taurus</div>
          </div>
        </div>
      </a>
    </li>
    <li>
      <a href="#" class="rollover">
        <div class="cube">
          <div class="front">
            <img src="ic3.png" alt="" class="img_front">            
            <div class="txt1">Gemini</div>
          </div>
          <div class="back">
            <img src="ic3.png" alt="" class="img_back">            
            <div class="txt1">Gemini</div>
          </div>
        </div>
      </a>
    </li>
    <li>
      <a href="#" class="rollover">
        <div class="cube">
          <div class="front">
            <img src="ic4.png" alt="" class="img_front">            
            <div class="txt1">Cancer</div>
          </div>
          <div class="back">
            <img src="ic4.png" alt="" class="img_back">            
            <div class="txt1">Cancer</div>
          </div>
        </div>
      </a>
    </li>
    <li>
      <a href="#" class="rollover">
        <div class="cube">
          <div class="front">
            <img src="ic5.png" alt="" class="img_front">            
            <div class="txt1">Leo</div>
          </div>
          <div class="back">
            <img src="ic5.png" alt="" class="img_back">            
            <div class="txt1">Leo</div>
          </div>
        </div>
      </a>
    </li>
    <li>
      <a href="#" class="rollover">
        <div class="cube">
          <div class="front">
            <img src="ic6.png" alt="" class="img_front">            
            <div class="txt1">Virgo</div>
          </div>
          <div class="back">
            <img src="ic6.png" alt="" class="img_back">            
            <div class="txt1">Virgo</div>
          </div>
        </div>
      </a>
    </li>
    <li>
      <a href="#" class="rollover">
        <div class="cube">
          <div class="front">
            <img src="ic7.png" alt="" class="img_front">            
            <div class="txt1">Libra</div>
          </div>
          <div class="back">
            <img src="ic7.png" alt="" class="img_back">            
            <div class="txt1">Libra</div>
          </div>
        </div>
      </a>
    </li>
    <li>
      <a href="#" class="rollover">
        <div class="cube">
          <div class="front">
            <img src="ic8.png" alt="" class="img_front">            
            <div class="txt1">Scorpio</div>
          </div>
          <div class="back">
            <img src="ic8.png" alt="" class="img_back">            
            <div class="txt1">Scorpio</div>
          </div>
        </div>
      </a>
    </li>
    <li>
      <a href="#" class="rollover">
        <div class="cube">
          <div class="front">
            <img src="ic9.png" alt="" class="img_front">            
            <div class="txt1">Sagittarius</div>
          </div>
          <div class="back">
            <img src="ic9.png" alt="" class="img_back">            
            <div class="txt1">Sagittarius</div>
          </div>
        </div>
      </a>
    </li>
    <li>
      <a href="#" class="rollover">
        <div class="cube">
          <div class="front">
            <img src="ic10.png" alt="" class="img_front">            
            <div class="txt1">Capricorn</div>
          </div>
          <div class="back">
            <img src="ic10.png" alt="" class="img_back">            
            <div class="txt1">Capricorn</div>
          </div>
        </div>
      </a>
    </li>
    <li>
      <a href="#" class="rollover">
        <div class="cube">
          <div class="front">
            <img src="ic11.png" alt="" class="img_front">            
            <div class="txt1">Aquarius</div>
          </div>
          <div class="back">
            <img src="ic11.png" alt="" class="img_back">            
            <div class="txt1">Aquarius</div>
          </div>
        </div>
      </a>
    </li>
    <li>
      <a href="#" class="rollover">
        <div class="cube">
          <div class="front">
            <img src="ic12.png" alt="" class="img_front">            
            <div class="txt1">Pisces</div>
          </div>
          <div class="back">
            <img src="ic12.png" alt="" class="img_back">            
            <div class="txt1">Pisces</div>
          </div>
        </div>
      </a>
    </li>-->
       
  </ul>
</nav>	

</div>	
</div>	
</div>	
</div>	
</div>
<?php

  $connect = mysql_connect("localhost","root","");
  if(!$connect)
  die("Server Not connected");
  $db = mysql_select_db("astro",$connect);
  if(!$db)
  die("Database not Connected");

  $sql1= "SELECT * from slidder";
  $retvalue=mysql_query($sql1);
?>
    
<div class="slider_wrapper2">
<div id="slider_wrapper">
  <div id="slider" class="clearfix">
    <div id="camera_wrap">
      <?php
    while($row = mysql_fetch_array($retvalue))
    {
  ?>
      <div data-src="uploads/<?php echo $row["image"];?>">
        <div class="camera_caption fadeIn">
        </div>     
      </div>
      <?php
    } 
  ?>      
    </div>  
  </div>    
</div>  
</div>

<div id="slider3_wrapper">
<div class="container">
<div class="row">
<div class="span12">
<div id="slider3">
<div class="slider3_txt">What We Offer</div>  
<a class="prev3" href="#"></a>
<a class="next3" href="#"></a>    
<div class="carousel-box row">
  <div class="inner span12">      
    <div class="carousel main">
      <ul>
        <li>
          <div class="banner banner1">
            <div class="banner_inner">              
              <img src="images/banner1.jpg" alt="" class="img">
              <div class="txt1">Personal Horoscopes</div>
              <div class="txt2">Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus.</div>
              <a href="#" class="button1">More Info</a>     
            </div>            
          </div>
        </li>
        <li>
          <div class="banner banner2">
            <div class="banner_inner">              
              <img src="images/banner2.jpg" alt="" class="img">
              <div class="txt1">Matrimonial Horoscopes</div>
              <div class="txt2">Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus.</div>
              <a href="#" class="button1">More Info</a>     
            </div>            
          </div>
        </li>
        <li>
          <div class="banner banner3">
            <div class="banner_inner">              
              <img src="images/banner3.jpg" alt="" class="img">
              <div class="txt1">Daily Horoscopes</div>
              <div class="txt2">Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus.</div>
              <a href="#" class="button1">More Info</a>     
            </div>            
          </div>
        </li>
        <li>
          <div class="banner banner4">
            <div class="banner_inner">              
              <img src="images/banner4.jpg" alt="" class="img">
              <div class="txt1">Business Horoscopes</div>
              <div class="txt2">Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus.</div>
              <a href="#" class="button1">More Info</a>     
            </div>            
          </div>
        </li>
                                  
      </ul>
    </div>
  </div>
</div>
</div>	
</div>	
</div>	
</div>	
</div>

<div class="slogan1_wrapper">
<div class="container">
<div class="row">
<div class="span12">
<div class="slogan1">
	
<div class="txt1">Your Daily Horoscope</div>
<div class="txt2">Praesent vestibulum molestie lacus. Aenean nonummy 
hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis 
natoque penatibus et magnis dis parturient montes, nascetur ridiculus 
mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio.</div>

</div>	
</div>	
</div>	
</div>	
</div>




<div id="content">
<div class="container">
<div class="row">
<div class="span4">

<h2>Welcome</h2>

<div class="thumb1">
  <div class="thumbnail clearfix">
    <figure class="img-polaroid"><img src="home01.jpg" alt=""></figure>
    <div class="caption">
      <h4>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.</h4>
      <p>
        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.  
      </p>
      <a href="#" class="button1">Read more</a>
    </div>
  </div>
</div>	
</div>


<div class="span4">
  
<h2>Latest News</h2>
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

    $sql="SELECT * FROM news LIMIT 2"; 
    $rs=mysql_query($sql);
  ?>
<?php
 while($row=mysql_fetch_array($rs))
{?>
<div class="date1"><?php echo date('d F,Y',strtotime($row["date"]));?></div>

<h5><a href="detail.php?id=<?php echo $row["id"];?>"><?php echo $row["heading"];?></a></h5>

<p>
  Eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac integer rutrum ante eu lacus.
</p>
<?php
}?>

<br><br>

<!--<div class="date1">Apr 21, 2012</div>

<h5>Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor.</h5>

<p>
  Eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac integer rutrum ante eu lacus.
</p>-->

<a href="news1.php" class="button2">View more...</a>





</div>
<div class="span4">
  
<div class="test1">
  
<div class="txt1">Test</div>

<div class="txt2">Yourself</div>

<div class="txt3">Lorem ipsum dolor sit amet conse ctetur adipisicing 
elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum 
dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor.</div>

<a href="#" class="join1">Join Now</a>



</div>

</div>	
</div>	
</div>	
</div>

<div class="bot1_wrapper">
<div class="container">
<div class="row">
<div class="span12">
<div class="bot1 clearfix">
	
<div class="menu_bot">
    <ul id="menu_bot" class="clearfix">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href=#>Services</a></li>
      <li><a href=#>partners</a></li>
      <li><a href=#>projects</a></li>
      <li><a href="contact.php">contact us</a></li>                       
    </ul>
</div>

<div class="pnone1_wrapper"><div class="phone1">+91 982 919 55 42</div></div>

</div>	
</div>	
</div>	
</div>	
</div>

<div class="bot2_wrapper">
<div class="container">
<div class="row">
<div class="span12">
<div class="bot2 clearfix">
	
<footer><div class="copyright">Astrology   © 2016. All rights reserved.&nbsp;&nbsp; | &nbsp;&nbsp;<a href="#">Privacy Policy</a></div></footer>

</div>	
</div>	
</div>	
</div>	
</div>


	
</div>
<script type="text/javascript" src="bootstrap.js"></script>

<a style="display: none;" href="#" id="toTop"><span id="toTopHover"></span></a></body></html>