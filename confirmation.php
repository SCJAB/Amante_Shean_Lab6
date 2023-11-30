<?php
session_start();

if (isset($_SESSION['form_data'])) {
    $form_data = $_SESSION['form_data'];

    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Registration Details</title>";
    echo "</head>";
    echo "<body>";

    echo "<h2>Registration Details</h2>";
    echo "<div class='details'>";
    echo "<label>Last Name:</label>";
    echo "<p>" . $form_data['last_name'] . "</p>";

    echo "<label>First Name:</label>";
    echo "<p>" . $form_data['first_name'] . "</p>";

    echo "<label>Middle Initial:</label>";
    echo "<p>" . $form_data['middle_initial'] . "</p>";

    echo "<label>Age:</label>";
    echo "<p>" . $form_data['age'] . "</p>";

    echo "<label>Contact No.:</label>";
    echo "<p>" . $form_data['contact_no'] . "</p>";

    echo "<label>Email:</label>";
    echo "<p>" . $form_data['email'] . "</p>";

    echo "<label>Address:</label>";
    echo "<p>" . $form_data['address'] . "</p>";
    echo "</div>";

    echo "<a href='./index.php'><button>Back</button></a>";

    echo "<style>";
    echo "body {";
    echo "font-family: Arial, sans-serif;";
    echo "background-color: rgb(211, 211, 255);";
    echo "margin: 0;";
    echo "padding: 20px;";
    echo "}";
 
    echo "<style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: rgb(211, 211, 255);
                    margin: 0;
                    padding: 20px;
                }

                h2 {
                    color: #333;
                }

                .details {
                    margin-top: 20px;
                    padding: 40px;
                    border-radius: 30px;
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.534);
                }

                .details label {
                    font-weight: bold;
                    margin-bottom: 5px;
                }

                .details p {
                    margin: 5px 0;
                }

                button{
                    padding: 10px;
                    margin-top: 40px;
                    border-radius: 10px;
                    cursor: pointer;
                    border: none;
                    background-color: darkslategrey;
                    color: white;
                }
        </style>";

    echo "</body>";
    echo "</html>";

    unset($_SESSION['form_data']);
} else {
    echo "Form data not found.";
}
?>