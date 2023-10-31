<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $website = $_POST["website"];
    $message = $_POST["message"];

    $to = "amidpro@icloud.com";  // Replace with your email address
    $subject = "New Form Submission from $name";
    $headers = "From: $email";

    $email_message = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\nMessage:\n$message";

    if (mail($to, $subject, $email_message, $headers)) {
        // Email sent successfully
        header("Location: index.html");  // Replace with your thank-you page
    } else {
        // Email sending failed
        header("Location: index.html");  // Replace with your error page
    }
} else {
    // If the request is not a POST request, redirect to the contact page
    header("Location: index.html/contact");  // Replace with your contact page
}
?>
