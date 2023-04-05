<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contacts"; // update the database name to "contacts"

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$course = $_POST['course'];
$gender = $_POST['gender'];

// Escape user inputs for security
$name = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);
$number = mysqli_real_escape_string($conn, $number);
$course = mysqli_real_escape_string($conn, $course);
$gender = mysqli_real_escape_string($conn, $gender);

// Prepare and bind parameters to the insert statement
$stmt = $conn->prepare("INSERT INTO users (name, email, number, course, gender) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssiss", $name, $email, $number, $course, $gender);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement
$stmt->close();

// Close connection
$conn->close();
?>