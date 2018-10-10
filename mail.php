<form action="" method="POST">
<input type="email" name="to" placeholder="email to which the mail needs to be sent" required>
<input type="text" name="subject" placeholder="subject" required>
<input type="text" name="message" placeholder="message" required>
<input type="submit" name="sub" value="send mail">

</form>

<?php
if(isset($_POST["sub"])){
$email = $_POST["to"];
$subject=$_POST["subject"];
$message = $_POST["message"];

mail($email,$subject,$message,"From: [write the email address that is configured as per your domain name removing the box brackets]");

echo "mail has been sent successfully";

}

?>
