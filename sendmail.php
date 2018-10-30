<form>
<form action="" method="POST">
<input type="email" name="reciever" placeholder="mailid" required>
<input type="text" name="subject" placeholder="subject" required>
<input type="text" name="message" placeholder="message" required>
<input type="submit" name="submit" value="send">
 </form>
 <?php
if(isset($_POST["submit"])){
$email = $_POST["reciever"];
$subject=$_POST["subject"];
$message = $_POST["message"];
 mail($email,$subject,$message);
 echo "mail has been sent successfully";
 }
 ?>
