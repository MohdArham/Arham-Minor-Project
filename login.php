<?php
$servername = "localhost"; // Change this to your server name
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$dbname = "loginp"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Escape user inputs for security
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepare and bind parameters to the insert statement
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $hashed_password);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement
$stmt->close();


    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
	
}

// Close connection
$conn->close();
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page Online Student Help Desk</title>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="Login/login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" href="css/style.css">

	<script src="Login/login.js"></script>
</head>
<body>
	<div class="container">
	<h1>Login Page</h1>
	<form action="#" method="post" onsubmit="return validateForm()">
		<div class="form-group">
			<label for="username"><h2>Username:</h2></label>
			<input type="text" id="username" name="username" placeholder="Enter your username">
			<span id="username-error" class="error"></span>
		</div>
		<div class="form-group">
			<label for="password"><h2>Password:</h2></label>
			<input type="password" id="password" name="password" placeholder="Enter your password">
			<span id="password-error" class="error"></span>
		</div>
		<div class="form-group">
			<button type="submit" name="login">Login</button>
		</div>
	</form>
</div>

 <footer class="footer">

      <section>
   
         <div class="share">
            <a href="https://www.facebook.com/jamiahamdardofficial" target="_blank" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/jamia_hamdard" target="_blank" class="fab fa-twitter"></a>
            <a href="https://www.linkedin.com/in/jamia-hamdard-564653242/" target="_blank" class="fab fa-linkedin"></a>
            <a href="https://www.instagram.com/jamia_hamdardofficial/" target="_blank" class="fab fa-instagram"></a>
            <a href="https://www.youtube.com/channel/UCMN0N45UfpGT1zOBniYF73A" target="_blank" class="fab fa-youtube"></a>
         </div>
         <div class="credit">&copy; copyright @ 2023 Jamia Hamdard | @All Rights Reserved ! <span> Mohd Arham</span></div>
   
      </section>
   
   </footer>


<!-- 
	<script src="login.js"></script> -->
</body>
</html>
