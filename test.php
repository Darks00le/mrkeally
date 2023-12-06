<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the user input from the form
    $userInput = $_POST["userInput"];

    // Display the user input
    echo "You submitted: " . $userInput;
}
?>
