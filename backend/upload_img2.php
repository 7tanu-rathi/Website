<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Astrology &amp; Horoscores</title>
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
        alignment           : 'center', 
        autoAdvance         : true,     
        mobileAutoAdvance   : true,
        //fx                    : 'simpleFade',
        height: '36%',
        hover: false,
        loader: 'none',
        navigation: false,
        navigationHover: true,
        mobileNavHover: true,
        playPause: false,
        pauseOnClick: false,
        pagination          : true,
        time: 7000,
        transPeriod: 1000,
        minHeight: '200px'
    });

    //  carouFredSel
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
            height: 'variable', //  optionally resize item-height             
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
     }

     table, td, tr 
     {
      border: 1px solid black;
      padding:10px;
      border-radius:5px;
     }
     tr:nth-child(even) {background: #FFF}
     tr:nth-child(odd) {background: #CCC}
</style>
</head>

<body class="main">
<div id="main">

<div class="top1_wrapper">
<div class="container">
<div class="row">
<div class="span12">
<div class="top1 clearfix">
    
<header><div class="logo_wrapper"><a href="http://www.template-preview.com/bootstrap-templates/300111766/template/index.html" class="logo"><img src="logo.png" alt=""></a></div></header>

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
<li class="active"><a href="http://www.template-preview.com/bootstrap-templates/300111766/template/index.html">Home</a></li>
<li><a href="http://www.template-preview.com/bootstrap-templates/300111766/template/index-1.html">About</a></li>
<li class="sub-menu sub-menu-1"><a href="http://www.template-preview.com/bootstrap-templates/300111766/template/index-2.html">Services</a>
<ul style="display: none;"> 
    <li class="sub-menu sub-menu-2"><a href="http://www.template-preview.com/bootstrap-templates/300111766/template/index-2.html">daily horoscope<em></em></a>
        <ul style="display: none;">
            <li><a href="http://www.template-preview.com/bootstrap-templates/300111766/template/index-2.html">lorem ipsum dolor</a></li>
            <li><a href="http://www.template-preview.com/bootstrap-templates/300111766/template/index-2.html">sit amet</a></li>
            <li><a href="http://www.template-preview.com/bootstrap-templates/300111766/template/index-2.html">adipiscing elit</a></li>
            <li><a href="http://www.template-preview.com/bootstrap-templates/300111766/template/index-2.html">nunc suscipit</a></li>
            <li><a href="http://www.template-preview.com/bootstrap-templates/300111766/template/404.html">404 page not found</a></li>
        </ul>
    </li>
    <li class="sub-menu sub-menu-2"><a href="http://www.template-preview.com/bootstrap-templates/300111766/template/index-2.html">business horoscope<em></em></a>
        <ul style="display: none;">
            <li><a href="http://www.template-preview.com/bootstrap-templates/300111766/template/index-2.html">lorem ipsum dolor</a></li>
            <li><a href="http://www.template-preview.com/bootstrap-templates/300111766/template/index-2.html">sit amet</a></li>
            <li><a href="http://www.template-preview.com/bootstrap-templates/300111766/template/index-2.html">adipiscing elit</a></li>
            <li><a href="http://www.template-preview.com/bootstrap-templates/300111766/template/index-2.html">nunc suscipit</a></li>                                    
        </ul>
    </li>
    <li><a href="http://www.template-preview.com/bootstrap-templates/300111766/template/index-2.html">travel horoscope</a></li>                     
</ul>                       
</li>
<li><a href="http://www.template-preview.com/bootstrap-templates/300111766/template/index-3.html">Astrology</a></li>
<li><a href="http://www.template-preview.com/bootstrap-templates/300111766/template/index-4.html">Horoscopes</a></li>
<li><a href="http://www.template-preview.com/bootstrap-templates/300111766/template/index-5.html">contact Us</a></li>                                           
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
    
<nav class="menu_ic">
  <ul id="menu_ic">
    <li>
      <a href="#" class="rollover">
        <div class="cube">
          <div class="front">
            <img src="ic1.png" alt="" class="img_front">            
            <div class="txt1">Aries</div>
          </div>
          <div class="back">
            <img src="ic1.png" alt="" class="img_back">            
            <div class="txt1">Aries</div>
          </div>
        </div>
      </a>
    </li>
    <li>
      <a href="taurus.php" class="rollover">
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
      <a href="gem.php" class="rollover">
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
      <a href="cancer.php" class="rollover">
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
    </li>
       
  </ul>
</nav>  

</div>  
</div>  
</div>  
</div>  
</div>
<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $image_name=$_FILES["fileToUpload"]["name"];
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
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
}

$id=$_REQUEST["id"];
$sql="UPDATE slidder
      SET image= '".$image_name."' 
      WHERE id='$id'";
mysql_query($sql);      
?>