<?php
  // Resume the session so we can check who is logged in
  session_start();

  // Not logged in: redirect before any HTML is sent, otherwise header() fails
  if (!isset($_SESSION["user"])) {
      header("Location: login.php");
      exit();
  }

  // htmlspecialchars stops any HTML stored in the session from running on this page
  $user  = htmlspecialchars($_SESSION["user"]);
  $token = htmlspecialchars($_SESSION["token"] ?? "");

  $page_title = "Lab 08 - Welcome";
  $page_description = "Lab 08 welcome page shown only to a logged-in user";
  include "header.inc";
?>
  <main>
    <h2>Welcome, <?php echo $user; ?>!</h2>
    <p>You are logged in. Your hidden token is <strong><?php echo $token; ?></strong>.</p>
  </main>
<?php include "footer.inc"; ?>
