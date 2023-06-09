<?php
// MySQL database credentials
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'loginp';

// Establishing MySQL database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Checking MySQL database connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Validating login credentials
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) == 1) {
        // Valid login credentials
        // Redirect to dashboard or home page
        header('Location: discussion_form.php');
    } else {
        // Invalid login credentials
        echo "Invalid username or password!";
    }
}

// Closing MySQL database connection
mysqli_close($conn);
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
	<form action= "login.php" method="post" onsubmit="return validateForm()">
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

<div class="redirect-link">
		<a href="index.php">Go back to homepage</a>
		<style>
		.redirect-link {
	margin-top: 20px;
	text-align: center;
	font-family: 'Rubik', sans-serif;
	font-size: 18px;
}
.redirect-link a {
	color: #4CAF50;
	text-decoration: none;
}
.redirect-link a:hover {
	text-decoration: underline;
}
</style>
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
</body>
</html>