<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $company = htmlspecialchars($_POST['company']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Validate required fields
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        die("Please fill out all required fields.");
    }

    // Email configuration
    $to = "textileplasticindustries@gmail.com"; // Your email address
    $email_subject = "New Contact Form Submission: $subject";
    $headers = "From: no-reply@textileplasticindustries.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Email body
    $email_body = "
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Company:</strong> $company</p>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Message:</strong> $message</p>
    ";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        // Redirect to a thank-you page
        header("Location: thank-you.html");
        exit();
    } else {
        die("Sorry, there was an error submitting your message. Please try again later.");
    }
} else {
    die("Invalid request method.");
}
?>