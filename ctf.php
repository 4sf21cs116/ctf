<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user's guess from the form input
    $guess = $_POST["guess"];

    // This is the array of numbers (ASCII values shifted by 3)
    $numbers = array(104, 101, 108, 108, 111,119,111,114,108,100);

    // This is the secret message
    $message = '';

    // Find the secret message
    foreach ($numbers as $number) {
        // Shift each ASCII value back by 3 to get the original character
        $message .= chr($number );
    }
    $data="FLAG{{$message}}";
    // Check if the user's guess matches the secret message
    if ($guess ==$data) {
        header('location:complete.php');
    } else {
       header('location:fail.php');
    }

 
}
?>