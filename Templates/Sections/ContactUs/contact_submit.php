<?php
// =====================================================
// CONTACT FORM HANDLER (with Google reCAPTCHA v2)
// =====================================================

$to = "info@wondrwisecreations.co.za";
$subject = "New Contact Form Submission";
$secretKey = "6LdjD_orAAAAAGyhDHq2bWUG3Ds9iFXsDzyMZYWm"; // Replace with your secret key

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Ensure reCAPTCHA exists
    if (!isset($_POST['g-recaptcha-response'])) {
        die("<span style='color:red;'>Please complete the reCAPTCHA.</span>");
    }

    $recaptchaResponse = $_POST['g-recaptcha-response'];
    $userIP = $_SERVER['REMOTE_ADDR'];

    // Verify with Google
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaResponse}&remoteip={$userIP}");
    $responseData = json_decode($response);

    if (!$responseData->success) {
        die("<span style='color:red;'>reCAPTCHA verification failed. Please try again.</span>");
    }

    // Sanitize inputs
    $firstName = htmlspecialchars(strip_tags($_POST['firstName']));
    $lastName = htmlspecialchars(strip_tags($_POST['lastName']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(strip_tags($_POST['message']));

    // Basic validation
    if (empty($firstName) || empty($lastName) || empty($email) || empty($message)) {
        die("<span style='color:red;'>Please fill in all required fields.</span>");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("<span style='color:red;'>Please enter a valid email address.</span>");
    }

    // Prevent header injection
    $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $email);

    // Build message
    $body = "New contact form submission:\n\n";
    $body .= "Name: $firstName $lastName\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send main email
    if (mail($to, $subject, $body, $headers)) {
        echo "<span style='color:green;'>Thank you! Your message has been sent successfully.</span>";

        // Optional confirmation email to sender
        $confirmationSubject = "Thank you for contacting Wondrwise Creations";
        $confirmationBody = "Hi $firstName,\n\n"
          . "Thank you for reaching out to us! We have received your message and will get back to you shortly.\n\n"
          . "Best regards,\n"
          . "Wondrwise Creations Team";
        mail($email, $confirmationSubject, $confirmationBody, "From: info@wondrwisecreations.co.za\r\n");

    } else {
        echo "<span style='color:red;'>Sorry, there was a problem sending your message.</span>";
    }

} else {
    die("<span style='color:red;'>Invalid request.</span>");
}
?>
