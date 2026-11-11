<?php
  // Start (or resume) the session before any output, so $_SESSION can be written
  session_start();

  // Read the form values; ?? "" avoids a warning if the page is opened without the form
  $username = trim($_POST["username"] ?? "");
  $password = trim($_POST["password"] ?? "");
  $token    = trim($_POST["token"] ?? "");

  // Correct login is my name and my student ID
  if ($username === "Minna" && $password === "106195562") {
      // Remember who logged in, plus the hidden token, for the welcome page
      $_SESSION["user"]  = $username;
      $_SESSION["token"] = $token;
      header("Location: welcome.php");
      exit();
  } else {
      // Wrong details: send the user back to the login page with an error flag
      header("Location: login.php?error=1");
      exit();
  }
?>