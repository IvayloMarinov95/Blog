<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>Personal Blog a Blogging Category Flat Bootstarp  Responsive Website Template | post :: w3layouts</title>
	<link href="../../css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="../../css/style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Personal Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" 
	/>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Oswald:100,400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<!--end slider -->
		<!--script-->
<script type="text/javascript" src="../../js/move-top.js"></script>
<script type="text/javascript" src="../../js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!---->

</head>
<body>
<!---header---->			
<div class="header">  
	 <div class="container">
		  <div class="logo">
			  <a href="http://localhost/simpleblog/public/post/index/"><img src="../../images/logo.jpg" title="" /></a>
		  </div>
			 <!---start-top-nav---->
			 <div class="top-menu">
				 <div class="search">
					 <form>
					 <input type="text" placeholder="" required="">
					 <input type="submit" value=""/>
					 </form>
				 </div>
				  <span class="menu"> </span> 
				   <ul>
						<li class="active"><a href="http://localhost/simpleblog/public/post/index/">HOME</a></li>						
						<li><a href="http://localhost/simpleblog/public/post/add/">ADD POST</a></li>	
						<div class="clearfix"> </div>
				 </ul>
			 </div>
			 <div class="clearfix"></div>
					<script>
					$("span.menu").click(function(){
					$(".top-menu ul").slideToggle("slow" , function(){
					});
					});
					</script>
				<!---//End-top-nav---->					
	 </div>
</div>
<!--/header-->

						 <?php
                        foreach($data['posts'] as $posts){
							echo "<div class='content'>";
							echo " <div class='container'>";
							echo " <div class='content-grids'>";
							echo "<div class='col-md-8 content-main'>";
							echo "<div class='content-grid'>";
							echo "<div class='content-grid-info'>";
							echo "<div class='post-info'>"; 
						 	echo "<h4><a href='http://localhost/simpleblog/public/post/info?id=" . $posts['id'] . "'>" . $posts['title'] .  "</a></h4>";
						 	echo "<p>" . $posts['text'] . "</p>";
						 	echo "<a href='http://localhost/simpleblog/public/post/info?id=" . $posts['id'] . "'><span></span>READ MORE</a>";
						 	echo "<a href='http://localhost/simpleblog/public/post/edit?id=" . $posts['id'] . "'><span></span>EDIT</a>";
							echo "<a href='http://localhost/simpleblog/public/post/delete?id=" . $posts['id'] . "'><span></span>DELETE</a>";
							echo "</div>";
							echo "</div>";
							echo "</div>";
							echo "<div class='clearfi'></div>";
							echo "</div>";
							echo "</div>";
							echo "</div>";
							echo "</div>";
						
						}
					?>

<!---->
</body>
<div class="footer">
	 <div class="container">
	 <p>Copyrights © 2015 Blog All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
	 </div>
</div>

	
