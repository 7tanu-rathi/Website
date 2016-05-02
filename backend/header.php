<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Astrology &amp; Horoscopes</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
      border: 1px solid black;
      padding:10px;
      border-radius:5px;
      font-color:black;
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
	
<nav class="menu_ic">
</nav>	

</div>	
</div>	
</div>	
</div>	
</div>