<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // Perform any data processing or validation here

  // Store the data in a database or send it via email, etc.

  // Example: Print the collected data
  echo "Name: " . $name . "<br>";
  echo "Email: " . $email . "<br>";
  echo "Subject: " . $subject . "<br>";
  echo "Message: " . $message . "<br>";
}
?>
