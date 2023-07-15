<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Set up email parameters
  $to = "shamsu082277@gmail.com";  // Replace with your own email address
  $subject = "New Contact Form Submission";
  $body = "Name: " . $name . "\n\nEmail: " . $email . "\n\nMessage: " . $message;

  // Send email
  $headers = "From: " . $email . "\r\n";
  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for contacting us. We will get back to you soon.";
  } else {
    echo "Sorry, an error occurred. Please try again later.";
  }
}
?>
