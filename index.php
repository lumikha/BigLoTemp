<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title> BigLo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/">
	<link rel="stylesheet" type="text/css" href="style.css"><!--main stylesheet-->

	 <!--media queries-->
	
    <link rel="stylesheet" type="text/css" href="assets/css/mobile_landscape.css"> <!--480-768-->
  	<link rel="stylesheet" type="text/css" href="assets/css/tablet_portrait.css"> <!--768-1024-->
   	<link rel="stylesheet" type="text/css" href="assets/css/tablet_landscape.css"> <!--1024-1200-->
   	<link rel="stylesheet" type="text/css" href="assets/css/desktop.css"> <!--1200-->



</head>
<body>

<div class="main"> <!--contains everything; rocketship background-->
	<div class="header"> <!--.header-->
		<div class="logo"> <!--b logo-->
		
		<p> <a href=""><img src="/BigloTemp/assets/img/logo" id="logo_b"> </a> </p><!--change this to separate images-->
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
			
			<div class="caret_hidden"><p><a href=""><img src="/BigloTemp/assets/img/down-arrow" id="caret"> </a> </p> </div><!--down caret-->

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

		<div class="caret_shown"><p><a href=""><img src="/BigloTemp/assets/img/down-arrow" id="caret"> </a> </p></div><!--down caret-->

	</div> <!--end of .header--> 

	<div class="middle_transparent"> <!--main content; contains the form and the iphone image-->

		<div class="phone_image" > <!--iphone image left part of the middle container-->
			<img src="/BigloTemp/assets/img/iphone" id="iphone">
		</div> <!--end of iphone image-->

	</div> <!--end of middle_transparent-->

	<div class="middle_content">		
		

		<div class="form-group"> <!--form sign in form-->
			
			<form action="">
				<div class="form_title"> Let's Do This </div> 

 				<input type="text" class="name" name="Name" placeholder="Name*""> 
 				<input type="text" class="email" name="name" placeholder="Email*"">
 				<br>
 				<input type="text" class="message" name="Message" placeholder="Message*"">
  				
  				<button type="SUBMIT" value="SUBMIT"> SUBMIT </button> 

			</form>
		</div> <!--end of form group-->	
	</div> <!--end of middle_content-->

	<div class="footer"> <!--footer-->
		<p>&copy 2016 Atelier Lumikha</p>
	</div> <!--end of footer-->
</div> <!--end of .main-->

</body>
</html>

