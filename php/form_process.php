<?php 

	if(isset($_POST['submit'])){
    $to = "bethanyjoycesibala@gmail.com"; // this is your Email address
    $from = $_POST['Email']; // this is the sender's Email address
    $Name = $_POST['Name'];
    $subject = "Form submission from Big Local";
    $Message = $Name . " " . $from . " wrote the following:" . "\n\n" . $_POST['Message'];
    $headers = "From:" . $from;
    $checkMail = mail($to,$subject,$Message,$headers);
   
    
	if($checkMail) {
    	header('Location: success.php');
		}
	 else {
		echo "Oopps! Error!";
		}

    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>