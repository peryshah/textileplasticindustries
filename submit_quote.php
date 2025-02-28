<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $company = htmlspecialchars($_POST['company']);
    $product = htmlspecialchars($_POST['product']);
    $quantity = htmlspecialchars($_POST['quantity']);
    $message = htmlspecialchars($_POST['message']);

    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($product) || empty($quantity)) {
        die("Please fill out all required fields.");
    }

    // Email configuration
    $to = "your-email@textileplasticindustries.com"; // Replace with your company's email address
    $subject = "New Quote Request from Textile Plastic Industries Website";
    $headers = "From: no-reply@textileplasticindustries.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Email body
    $email_body = "
        <h2>New Quote Request</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Company:</strong> $company</p>
        <p><strong>Product of Interest:</strong> $product</p>
        <p><strong>Quantity:</strong> $quantity</p>
        <p><strong>Additional Information:</strong> $message</p>
    ";

    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        // Redirect to a thank-you page
        header("Location: thank-you.html");
        exit();
    } else {
        die("Sorry, there was an error submitting your request. Please try again later.");
    }
} else {
    die("Invalid request method.");
}
?>