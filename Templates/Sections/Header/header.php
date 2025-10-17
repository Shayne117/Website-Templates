<!-- header.php -->
<?php
// Default page title if not provided by parent page
$pageTitle = $pageTitle ?? "My Website";
?>

<header class="site-header">
  
  <!-- Main Navbar -->
<!-- HEADER -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm my-3 mx-3 py-2 rounded-pill rounded-0-sm">
  <div class="container d-flex align-items-center">

    <!-- Brand section (Logo + Name + Contact Info) -->
    <div class="d-flex align-items-center flex-wrap">
      
      <!-- Logo + Company Name -->
      <a class="navbar-brand fw-bold d-flex align-items-center m-0" href="index.php">
        <img src="assets/images/5643919.jpg" alt="Logo" width="55" class="me-2">
        MyCompany
      </a>

      <!-- Contact Info (Email + Phone) -->
      <!-- flex-column makes them stack vertically -->
      <div class="d-flex flex-column small ms-3 contact-info">
        <span class="d-flex align-items-center">
          <i class="bi bi-envelope-fill me-1"></i>
          <a href="mailto:info@mycompany.com" class="text-dark text-decoration-none">info@mycompany.com</a>
        </span>
        <span class="d-flex align-items-center mt-1">
          <i class="bi bi-telephone-fill me-1"></i>
          <a href="tel:0812345678" class="text-dark text-decoration-none">081 234 5678</a>
        </span>
      </div>
    </div>

    <!-- Mobile Hamburger Button -->
    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible Nav Links -->
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto align-items-center text-center text-lg-start">

        <li class="nav-item"><a class="nav-link px-2 py-1" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link px-2 py-1" href="#">About Us</a></li>
        <li class="nav-item"><a class="nav-link px-2 py-1" href="#">Our Services</a></li>
        <li class="nav-item"><a class="nav-link px-2 py-1" href="#">Hours and Fees</a></li>
        <li class="nav-item"><a class="nav-link px-2 py-1" href="#">Contact Us</a></li>

        <!-- Request a Call button -->
        <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
          <button class="btn btn-primary btn-sm px-3 rounded-pill" data-bs-toggle="modal" data-bs-target="#requestCallModal">
            Request a Call
          </button>
        </li>

      </ul>
    </div>
  </div>
</nav>



</header>

<!-- ===========================
     MODAL POPUP FOR REQUEST A CALL
=========================== -->
<div class="modal fade" id="requestCallModal" tabindex="-1" aria-labelledby="requestCallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-4 shadow">
      
      <!-- Modal header -->
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold" id="requestCallModalLabel">Request a Call</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal body with form -->
      <div class="modal-body">
        <form id="requestCallForm" method="POST" action="request_call.php">
          
          <!-- Full Name input -->
          <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="text" class="form-control rounded-3" id="fullname" name="fullname" placeholder="Enter your full name" required>
          </div>

          <!-- Phone input -->
          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control rounded-3" id="phone" name="phone" placeholder="e.g. 081 234 5678" required>
          </div>

          <!-- Submit button -->
          <div class="text-end">
            <button type="submit" class="btn btn-primary rounded-pill px-4">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
