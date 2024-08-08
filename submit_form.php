<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  // TODO: Add email sending logic here
  // For example, using PHP's mail() function:
  // mail($to, $subject, $message, $headers);

  echo "Thank you, $name! Your message has been sent.";
} else {
  echo "There was an error sending your message. Please try again.";
}
?>
