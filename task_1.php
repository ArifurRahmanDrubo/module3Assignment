<?php
$text = "The quick brown fox jumps over the lazy dog.";

function modifyText($inputText) {
    // Convert the string to all lowercase
    $lowercaseText = strtolower($inputText);
    
    // Replace "brown" with "red" in the string
    $modifiedText = str_replace("brown", "red", $lowercaseText);
    
    // Print the modified text
    echo $modifiedText;
}

// Call the function with the $text variable as an argument
modifyText($text);