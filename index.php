<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title> BigLo</title>
	<link rel="Shortcut icon" href="assets/img/favicon_logo.ico"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/">
	<link rel="stylesheet" type="text/css" href="style.css"><!--main stylesheet-->

	 <!--media queries-->
	
    <link rel="stylesheet" type="text/css" href="assets/css/mobile_landscape.css"> <!--480-768-->
    <link rel="stylesheet" type="text/css" href="assets/css/small_tablet_portrait.css"> <!--600-800 additional breakpoint-->
  	<link rel="stylesheet" type="text/css" href="assets/css/tablet_portrait.css"> <!--768-1024-->
   	<link rel="stylesheet" type="text/css" href="assets/css/tablet_landscape.css"> <!--1024-1200-->
   	<link rel="stylesheet" type="text/css" href="assets/css/desktop.css"> <!--min 1200-->
   	<link rel="stylesheet" type="text/css" href="assets/css/large_desktop.css"> <!--min 1200-->

   	<!--php scripts-->

</head>
<body>

<div class="main"> <!--contains everything; rocketship background-->
	<div class="header"> <!--.header-->
		<div class="logo"> <!--b logo-->
		
		<p> <a href=""><img src="assets/img/logo.png" id="logo_b"> </a> </p>
		</div> <!--end of logo-->

		<div class="header_details"> <!--header text with <h1> to <h6>tags-->
			<div class="h1"> Big Local is Taking Off  </div>  
			<div class="h2"> 

				<p><div id="word1">Business Website </div> 
				<div id="plus1"> &nbsp; + </div>
				<div id="word2"> &nbsp; Actionable Reporting </div> 
				<div id="plus2"> &nbsp; + </div> 
				<div id="word3"> &nbsp; Local Optimization</div>
				</p>
			</div> 
			
			<div class="caret_hidden"><p><a href=""><img src="assets/img/down-arrow.png" id="caret"> </a> </p> </div><!--down caret-->

			<div class="h3"> 
							<p><div id="word1"> Get a beta account today &nbsp;  </div> 
							<div id="word2"> and help us make Big Local &nbsp;</div>
							<div id="word3"> bigger and localler. &nbsp; </div> 
							</p>
							
							<p><div id="word1"> Beta Subscription:&nbsp; </div>
							<div id="word2"> $4.99/month. &nbsp; </div>
							<div id="word3"> Forever. </div> </p>
			</div> <!--end of h3--> 
			
		</div> <!--end of header_details-->

		<div class="caret_shown"><p><a href="#middle_transparent"><img src="assets/img/down-arrow.png" id="caret"> </a> </p></div><!--down caret-->

	</div> <!--end of .header--> 

	<div class="middle_transparent" id="middle_transparent"> <!--main content; contains the form and the iphone image-->

		<div class="phone_image" > <!--iphone image left part of the middle container-->
			<img src="assets/img/iphone.png" id="iphone">
		</div> <!--end of iphone image-->

	</div> <!--end of middle_transparent-->

	<div class="middle_content" id="middle_content">		

		<div class="form-group"> <!--form sign in form-->
			
			<form id="biglo_form" action="form_process.php" method="POST">

				<div class="form_title"> Let's Do This </div> 

 				<input type="text" class="name" name="Name" placeholder="Name*""> 
 				<input type="text" class="email" name="Email" placeholder="Email*"">
 				<br>
 				<input type="text" class="message" name="Message" placeholder="Message*"">
  				
  				<button type="submit" name="submit" value="SUBMIT"> SUBMIT </button> 

			</form>
		</div> <!--end of form group-->	
	</div> <!--end of middle_content-->

	<div class="footer"> <!--footer-->
		<p> &copy 2017 Atelier Lumikha </p>
	</div> <!--end of footer-->
</div> <!--end of .main-->

</body>
</html>

