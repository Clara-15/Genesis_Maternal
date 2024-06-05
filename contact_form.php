
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if form fields are set
    $firstName = $_POST['first_name'] ;
    $lastName = $_POST['last_name'] ;
    $email = $_POST['email'];
    $message = $_POST['message'];
    $phone = $_POST['phone'];
    $to ="thecommunity.radiant@gmail.com";
    $headers="From: $email";
    
    
    // Send email
    if (mail($to, $phone, $message, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>

