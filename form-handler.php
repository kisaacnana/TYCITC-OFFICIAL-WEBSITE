<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name'] ?? '');
    $visitor_email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Basic validation
    if (empty($name) || empty($visitor_email) || empty($subject) || empty($message) || !filter_var($visitor_email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact.html?error=1");
        exit();
    }

    // Sanitize input
    $name = htmlspecialchars($name, ENT_QUOTES);
    $subject = htmlspecialchars($subject, ENT_QUOTES);
    $message = htmlspecialchars($message, ENT_QUOTES);

    $email_from = 'no-reply@yourdomain.com'; // Use a real email address
    $email_subject = 'New Form Submission';
    $email_body = "User Name: $name\n".
                  "User Email: $visitor_email\n".
                  "Subject: $subject\n".
                  "User Message: $message\n";

    $to = 'fgciwg@gmail.com';
    $headers = "From: $email_from\r\n";
    $headers .= "Reply-To: $visitor_email\r\n";

    if (mail($to, $email_subject, $email_body, $headers)) {
        header("Location: contact.html?success=1");
    } else {
        header("Location: contact.html?error=1");
    }
    exit();
} else {
    header("Location: contact.html");
    exit();
}
?>
