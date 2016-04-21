<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
    $suggestion = trim(filter_input(INPUT_POST,"suggestion",FILTER_SANITIZE_SPECIAL_CHARS));
    
    if ($name == "" || $email == "" || $suggestion == "") {
        $mail_error_message = "<p class='error-message'>Please fill in the required fields: Name, Email, and Suggestion</p>";
    }
    if (!isset($mail_error_message) && $_POST["honeypot"] != "") {
        $mail_error_message = "Bad form input";
    }
    
    require("inc/phpmailer/class.phpmailer.php");
	require("inc/phpmailer/class.smtp.php");
	
	$mail = new PHPMailer;
    
    if (!isset($mail_error_message) && !$mail->ValidateAddress($email)) {
        $mail_error_message = "Invalid Email Address";
    }
    
    if (!isset($mail_error_message)) {
        $email_body = "";
        $email_body .= "Name " . $name . "\n";
        $email_body .= "Email " . $email . "\n";
        $email_body .= "Suggestion " . $suggestion . "\n";
        		
		$mail->isSMTP();
		
		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug = 0;
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAuth = true;
		$mail->Username = "lsomerset561test@gmail.com";
		$mail->Password = "test1234?!";
		
        $mail->setFrom($email, $name);
        $mail->addAddress('lsomerset561test@gmail.com', 'Lindsey T. Somerset');     // Add a recipient
        
        $mail->isHTML(false);                                  // Set email format to HTML
        
        $mail->Subject = 'Date Jar Suggestion from ' . $name;
        $mail->Body    = $email_body;
        
        if($mail->send()) {
            header("location:suggest.php?status=thanks");
            exit;
        }
        $mail_error_message = '<p class="error-message"> Message could not be sent. ';
        $mail_error_message .= 'Mailer Error: ' . $mail->ErrorInfo;
    }
    
}

include("inc/header.php"); 
?>
<h1 class="text-center col-xs-12">Make a Suggestion</h1>
<div class="text-center col-xs-12">
	<?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
		echo "<h4>Thanks for the email! I&rsquo;ll check out your suggestion shortly!</h4>";
	} else {
		if (isset($mail_error_message)) {
			echo "<p class='message'>". $mail_error_message . "</p>";
		} else {
			echo "<h4>If you think there is a way I can make this site better, let me know! Complete the form to send me an email.</h4><br />";
		}
	?>
</div>
<form method="post" action="suggest.php">
	<div class="form-horizontal">
	  		<div class="form-group">
	  			<label for="name" class="col-xs-3 col-xs-offset-1 col-md-2 col-md-offset-3 col-lg-1 col-lg-offset-4">Name:</label>
		  <input type="text" id='name' name="name" class="col-xs-7 col-md-5 col-lg-4" value="" />
	  		</div>
	  	</div> <!-- name -->
	<div class="form-horizontal">
		<div class="form-group">
			<label for="email" class="col-xs-3 col-xs-offset-1 col-md-2 col-md-offset-3 col-lg-1 col-lg-offset-4">Email:</label>
		<input type="email" id='email' name="email" class="col-xs-7 col-md-5 col-lg-4" value="" />
		</div>

	</div> <!-- email -->
	<div class="form-horizontal">
		<div class="form-group">
			<label for="suggestion" class="col-xs-3 col-xs-offset-1 col-md-2 col-md-offset-3 col-lg-1 col-lg-offset-4">Suggestion:</label>
			<textarea id='suggestion' name="suggestion" class="col-xs-7 col-md-5 col-lg-4"></textarea>
		</div>

	</div> <!-- email -->
	<div class="form-horizontal" style="display:none">
		<div class="form-group">
			<label for="email" class="col-xs-3 col-xs-offset-2">Email:</label>
		<input type="email" id='honeypot' name="honeypot" value="" />
		<p>Please leave this field blank</p>
		</div>

	</div> <!-- honeypot spammers -->
	<input type="submit" class="btn btn-default btn-lg col-xs-5 col-xs-offset-4 col-sm-4 col-md-3 col-md-offset-5 col-lg-2" name="send" value="SEND" />
		</form>
<?php 
	}

include("inc/footer.php"); ?>