<?php

declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.html');
    exit;
}

$name = trim((string) ($_POST['name'] ?? ''));
$visitor_email = trim((string) ($_POST['email'] ?? ''));
$subject = trim((string) ($_POST['subject'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));
$honeypot = trim((string) ($_POST['website'] ?? ''));

// Silently reject likely bot submissions.
if ($honeypot !== '') {
    header('Location: contact.html?status=success');
    exit;
}

if ($name === '' || $subject === '' || $message === '' || !filter_var($visitor_email, FILTER_VALIDATE_EMAIL)) {
    header('Location: contact.html?status=error');
    exit;
}

// Prevent header injection and keep submitted values within reasonable limits.
$name = preg_replace('/[\r\n]+/', ' ', $name);
$subject = preg_replace('/[\r\n]+/', ' ', $subject);
$visitor_email = preg_replace('/[\r\n]+/', '', $visitor_email);

$name = substr($name, 0, 120);
$subject = substr($subject, 0, 200);
$message = substr($message, 0, 5000);

$to = 'fgciwg@gmail.com';
$email_subject = 'TYCITC Website Contact: ' . $subject;

$email_body = "User Name: {$name}\n" .
              "User Email: {$visitor_email}\n" .
              "Subject: {$subject}\n\n" .
              "Message:\n{$message}\n";

// Use an address on the receiving domain as From and the visitor as Reply-To.
$headers = "From: TYCITC Website <fgciwg@gmail.com>\r\n" .
           "Reply-To: {$visitor_email}\r\n" .
           "Content-Type: text/plain; charset=UTF-8\r\n";

$sent = mail($to, $email_subject, $email_body, $headers);

header('Location: contact.html?status=' . ($sent ? 'success' : 'error'));
exit;
