<?php
// Assuming you have a database connection already set up
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user's name and score from the POST data 
    
    $userName = $_POST["username"];
    $score = $_POST["score"];

    // Check if the user already exists in the users table
    $checkUserQuery = "SELECT sno FROM quizmaze WHERE username = '$userName'";
    $userResult = $conn->query($checkUserQuery);


    if ($userResult->num_rows > 0) {
        $userRow = $userResult->fetch_assoc();
        $userId = $userRow["sno"];
    } else {
        // If the user does not exist, insert the user into the users table
        $insertUserQuery = "INSERT INTO quizmaze(username) VALUES ('$userName')";
        $conn->query($insertUserQuery);
        $userId = $conn->insert_id;
    }

    // Insert the score into the quiz_scores table
    $insertScoreQuery = "INSERT INTO quiz_scores (sno, score) VALUES ($userId, $score)";

    if ($conn->query($insertScoreQuery) === TRUE) {
        echo "Score submitted successfully";
    } else {
        echo "Error: " . $insertScoreQuery . "<br>" . $conn->error;
    }
}

$conn->close();
?>