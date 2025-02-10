<?php

// Check of de shit is gestuurd
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pak de data ouleh
    $firstName = $_POST['Fname'];
    $lastName = $_POST['Lname'];

    // Check of beide fields ingevuld zijn
    if (!empty($firstName) && !empty($lastName)) {
        // Maak schoon tegen XSS Attacks niffo
        $firstName = htmlspecialchars($firstName);
        $lastName = htmlspecialchars($lastName);

        // Display de message
        echo "Hello $firstName $lastName!";
    } else {
        // Geef error als niet is ingevuld beide
        echo "Please fill in both fields.";
    }
} else {
    // Als niet gestuurd is, zeg je moeder
    echo "Form not submitted.";
}
?>