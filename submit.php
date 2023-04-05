<?php
  // Connect to the database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "discussion_form";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Get the form data
  $title = $_POST["title"];
  $description = $_POST["description"];
  $author = $_POST["author"];

  // Insert the data into the database
  $sql = "INSERT INTO discussions (title, description, author) VALUES ('$title', '$description', '$author')";

  if ($conn->query($sql) === TRUE) {
    echo "Discussion saved successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>