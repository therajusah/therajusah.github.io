<?php

if (isset($_POST['submit'])) {
 $name = $_POST['name'];
 $email = $_POST['subject'];
 $message = $_POST['message'];

 $mailTo = "workwithrajukumar@outlook.com";
 $headers = "From: ".$email;
 $txt = "You have received an e-mail from ".$name.".\n\n".$message;

 mail($mailTo, $subject, $txt, $headers);
 header("Location: backend.php?mailsend");

 mail();
}