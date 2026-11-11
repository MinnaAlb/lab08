<?php
  // login is .php (not .html) so the server runs the include statements below
  $page_title = "Lab 08 - Login";
  $page_description = "Lab 08 login form that posts a username, password and hidden user token to process.php";
  include "header.inc";
?>
  <main>
    <?php
      // process.php sends the user back here with ?error=1 when the login is wrong
      if (isset($_GET["error"])) {
          echo "<p><strong>Invalid username or password. Please try again.</strong></p>";
      }
    ?>

    <!-- POST keeps the password out of the URL; process.php reads the values from $_POST -->
    <form method="post" action="process.php">
      <!-- Each label's "for" matches an input id so the W3C validator passes and screen readers link them -->
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required><br>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br>

      <!-- Hidden user token (first initial + student ID) sent with the form but not shown to the user -->
      <input type="hidden" name="token" value="M106195562">

      <input type="submit" value="Login">
    </form>
  </main>
<?php include "footer.inc"; ?>
