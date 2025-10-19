<!-- =====================================================
     MAIN INDEX PAGE
     -----------------------------------------------------
     Purpose:
     - Acts as the main container for your one-page website.
     - Dynamically loads modular sections using PHP includes.
     - Each section (About, Contact, etc.) has its own file,
       styles, and theme variables for easy reuse.
====================================================== -->

<?php
  // ------------------------------------------------------
  // Optional: define a theme or site-wide settings here
  // ------------------------------------------------------
  $siteTitle = "Your Company Name";
  $themeColor = "#20232a"; // Example variable for branding
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- ===== META TAGS ===== -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $siteTitle; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <!-- ===== GLOBAL STYLES ===== -->
  <!-- ===== FONT IMPORT ===== -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <!-- ===== FAVICON (optional) ===== -->
  <link rel="icon" href="images/favicon.png">
  <?php include './Templates/sections/Navbar/navbar-section.php'; ?>
</head>
<body>
    
    <?php include './Templates/sections/Header/header-section.php'; ?>
    <?php include './Templates/sections/AboutUs/aboutus-section.php'; ?>
    <?php include './Templates/sections/WhatWeOffer/whatweoffer-section.php'; ?>
    <?php include './Templates/sections/HoursAndFees/hoursandfees-section.php'; ?>
    <?php include './Templates/sections/ContactUs/contactus-section.php'; ?>
    <?php include './Templates/sections/Footer/footer-section.php'; ?>
</body>
</html>
