<?php
$host = "localhost";
$username = "user";
$password = "";

// Create connection
$conn = new mysqli($host, $username, $password, "cyclones_and_anticyclones");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get values from the HTML form
$mid5 = $_POST['mid5'];
$mid6 = $_POST['mid6'];
$mid7 = $_POST['mid7'];
$mid8 = $_POST['mid8'];
$mid9 = $_POST['mid9'];
$mid10 = $_POST['mid10'];
$mid11 = $_POST['mid11'];
$mid12 = $_POST['mid12'];
$mid13 = $_POST['mid13'];
$mid14 = $_POST['mid14'];
$mid15 = $_POST['mid15'];
$mid16 = $_POST['mid16'];
$mid17 = $_POST['mid17'];

// SQL query to insert values into the table
$sql = "INSERT INTO mid_latitude(q1_5, q2_1_1, q2_1_2, q2_1_3, q2_1_4, q2_1_5, q2_1_6, q2_2_1, q2_2_2, q2_2_3, q2_2_4, q2_2_5, q2_2_6) VALUES ('$mid5', '$mid6', '$mid7', '$mid8', '$mid9', '$mid10', '$mid11', '$mid12', '$mid13', '$mid14', '$mid15', '$mid16', '$mid17')";

// Execute the query


    if ($conn->query($sql) === TRUE) {
    echo "Values inserted successfully!";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>