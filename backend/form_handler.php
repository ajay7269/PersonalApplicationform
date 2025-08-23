<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $userInput = $_POST['captcha_input'] ?? '';

  if (strtoupper($userInput) === $_SESSION["captcha"]) {
    echo "✅ Captcha verified successfully!";
    // Proceed with form processing and saving
  } else {
    echo "❌ Captcha verification failed. Please try again.";
  }
}
?>
