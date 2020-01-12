<?php include './includes/header.php'; ?>

<?php
	if(isset($_POST[submit]))
	{  
		$message = "<strong>Dear $_POST[name],</strong><br />
					<strong>Your Email ID is :</strong> $_POST[email]<br />
					<strong>Message :-</strong> $_POST[comment]
					";
	
		sendmail("yashikachinz1997@gmail.com","Mail from Appoint My Staff",$message);		
	}
?>

<div class="container">

	<br>
	<div class="container ">
		<!-- Material form login -->
		<div class="card">

			<h5 class="card-header purple-gradient white-text text-center py-4">
				<strong>Contact Us</strong>
			</h5>

			<!--Card content-->
			<div class="card-body px-lg-5 pt-0">
				<div class="container text-center">
					<div class="row">
						<div class="col">
							<br>
							<h6><strong>Our Address</strong></h6>
							<p>
								1)Hongkong Bank Building, M.G. Road, Fort, Mumbai-400001.
								2)Prakashgad, Plot No. G-9, Anant Kanekar Marg Bandra (E), Mumbai–400051	
							</p>
						</div>
						<div class="col">
							<br>
							<strong>National Toll Free</strong>: 1912 / 19120<br />
							<strong>MSEDCL Toll Free</strong>: 1800-102-3435 <br>1800-233-3435</p>
						</div>
					</div>
					<br>
					<h6>Contact Us by entering following information</h6>
					<br>
					<form class="form-group" action="" method="post">
						<div class="row">
							<div class="col">
								<h5>Name (required) : </h5>
							</div>
							<div class="col">
								<input class="form-control" type="text" name="name" id="name" value="Your Name"  />
							</div>
						</div>
						<div class="row">
							<div class="col">
								<h5>Mail (required) : </h5>
							</div>
							<div class="col">
								<input class="form-control" type="text" name="email" id="email" value="Your Email"  />
							</div> 
						</div>
						<br>
						<textarea class="form-control" name="comment" id="comment" cols="100%" rows="5">Your Suggestion</textarea>
						<br>Comment (required)
						<br><br>
						<input name="submit" class="btn purple-gradient" type="submit" id="submit" value="Submit Form"  />
						&nbsp;
						<input name="reset" class="btn purple-gradient" type="reset" id="reset" tabindex="5" value="Reset Form" />
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
<br><br>
<?php
	function sendmail($toaddress,$subject,$message)
	{
		require 'PHPMailer-master/PHPMailerAutoload.php';
		
		$mail = new PHPMailer;
		
		//$mail->SMTPDebug = 3;                               // Enable verbose debug output
		
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'mail.dentaldiary.in';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'sendmail@dentaldiary.in';                 // SMTP username
		$mail->Password = 'q1w2e3r4/';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to
		
		$mail->From = 'sendmail@dentaldiary.in';
		$mail->FromName = 'Web Mall';
		$mail->addAddress($toaddress, 'Joe User');     // Add a recipient
		$mail->addAddress($toaddress);               // Name is optional
		$mail->addReplyTo('aravinda@technopulse.in', 'Information');
		$mail->addCC('cc@example.com');
		$mail->addBCC('bcc@example.com');
		
		$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML
		
		$mail->Subject = $subject;
		$mail->Body    = $message;
		$mail->AltBody = $subject;
		
		if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			echo '<center><strong><font color=green>Mail sent.</font></strong></center>';
		}
	}
?>

<?php include './includes/footer.php'; ?>