<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Discussion Form</title>
	<!-- Link to CSS file -->
	<link rel="stylesheet" type="text/css" href="css/discussion_form.css">
	
	<!-- Link to JS file -->
	<script src="discussion_form.js"></script>
	  <!-- custom js login file link  -->
	  <script src="Login/login.js"></script>

</head>
<body>
	<h1>Discussion Form</h1>
	<form method="post" action="submit.php">
		<label for="author">Name:</label>
		<input type="text" id="author" name="author" required>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>

		<label for="title">Topic:</label>
		<input type="text" id="title" name="title" required>

		<label for="description">Message:</label>
		<textarea id="description" name="description" required></textarea>

		<button type="submit">Submit</button>
	</form>


	<div class="redirect-link">
		<a href="index.php">Go back to homepage</a>
	</div>


</body>
</html>
