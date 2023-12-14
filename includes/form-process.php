<?php

include_once 'dbh-live.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if name, email, and message are not empty
    if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["message"])) {
        $name = strip_tags(trim($_POST["name"]));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = strip_tags(trim($_POST["message"]));

        // Check if email is valid
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $to = "admin@allthepreaching.com"; // Replace with your email address
            $subject = "ATP Form Submission";
            $headers = "From: $email";

            // Send the email
            if (mail($to, $subject, $message, $headers)) {

                // Redirect to a thank you page after sending the email
                header("Location: message-sent.php");
                exit();
            } else {
                echo "An error occurred. Please try again later.";
            }
        } else {
            echo "Invalid email format.";
        }
    } else {
        echo "Please fill in all fields.";
    }
}
