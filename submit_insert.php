<?php

    include "head.html";   
    ini_set('display_errors', 1);    


    $servername = "35.226.114.124:5005";

    $username = "root";

    $password = "root"; // removed in this example

    $dbname = "comments";

    

    // Create connection

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection

    if ($conn->connect_error) {

        die("Connection failed: " . $conn->connect_error);

    }

    

    $category = $_POST['category'];

    $segment = $_POST['segment'];

    $year = $_POST['year'];

    $month = $_POST['month'];

    $comment = $_POST['comment'];

    $comment_username = $_POST['comment_username'];

    $comment_fullname = $_POST['comment_fullname'];

    

    $category = $conn->escape_string($category);

    $segment = $conn->escape_string($segment);

    $year = $conn->escape_string($year);

    $month = $conn->escape_string($month);

    $comment = $conn->escape_string($comment);

    $comment_username = $conn->escape_string($comment_username);

    $comment_fullname = $conn->escape_string($comment_fullname);

    

    echo "Category: $category<br>";

    echo "Segment: $segment<br>";

    echo "Year: $year<br>";

    echo "Month: $month<br>";

    echo "Comment: $comment<br>";

    echo "Submitting comment as: $comment_username ($comment_fullname)<br>";

    echo "<br>";

    

    // A better statement that will replace when necessary (assuming the keys are correctly defined)

    $sql = "INSERT INTO `comments_profitratio` (`category`, `segment`, `year`, `month`, `comment`, `username`, `fullname`, `insert_timestamp`) VALUES ('$category', '$segment', '$year', '$month', '$comment', '$comment_username', '$comment_fullname', now()) ON DUPLICATE KEY UPDATE `comment`='$comment', `username`='$comment_username', `fullname`='$comment_fullname', `insert_timestamp`=now()";

    if ($conn->query($sql) === TRUE) {

        echo "<p style='font-weight: bold'>Comment saved successfully.</p>";

    } else {

        echo "<p style='font-weight: bold; font-color: #990000'>Error: " . $sql . "<br>" . $conn->error . "</p>";

    }    $conn->close();

    

    include "foot.html";

    

?>