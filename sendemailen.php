<?php
	if(isset($_POST["submit"])){
		$name = $_POST["name"];
		$mailFrom = $_POST["email"];
		$subject = $_POST["subject"];
		$message = $_POST["message"];

		echo $name;
		$mailTo = "micheledegiorgi@mail.com";
		$headers = "From: ".$mailFrom;
		$txt = "You received an e-mail from".$name.".\n\n".$message;

		mail($mailTo,$subject,$message,$headers);
		header("Location: en.html?mailsend");
	}
?>
