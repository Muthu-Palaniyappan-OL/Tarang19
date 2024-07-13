<?php
	if(isset($_POST['contactusform'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['message'];

		$to='editorpsbb@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Contact Us Submission';
		$message="Name :".$name."\n"."Email :".$email."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			$text = "Sent Successfully! Thank you"." ".$name.", We will contact you shortly!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>