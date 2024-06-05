<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if form fields are set
    $firstName = $_POST['first_name'] ;
    $lastName = $_POST['last_name'] ;
    $email = $_POST['email'];
    $location = $_POST['location'];
    $phone = $_POST['phone'];
    $to ="thecommunity.radiant@gmail.com";
    $headers="From: $email";
    
    
    // Send email
    if (mail($to, $phone, $location, $headers)) {
        echo "Thank you for joining our community!";
    } else {
        echo "There was an error sending your request. Please try again.";
    }
}
?>
