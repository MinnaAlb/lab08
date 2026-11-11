<?php
  // Shared top of every page. Each page sets $page_title and $page_description
  // before including this file, so one header serves all pages.
  $page_title = $page_title ?? "Lab 08";
  $page_description = $page_description ?? "Lab 08 PHP sessions, include files and hidden fields";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $page_description; ?>">
  <meta name="keywords" content="PHP, session, include, hidden field, login, lab 08">
  <meta name="author" content="Minna">
  <title><?php echo $page_title; ?></title>
</head>
<body>
  <!-- Site header shared by all pages through include -->
  <header>
    <h1><?php echo $page_title; ?></h1>
  </header>
