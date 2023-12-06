<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the user input from the form
    $userInput = $_POST["userInput"];

    // Store the user input in a text file
    $file = fopen("submissions.txt", "a"); // Open the file in append mode

    fwrite($file, $userInput . PHP_EOL);  // Write the user input to the file with a newline
    fclose($file);  // Close the file
}
?>
