function validateForm() {
    let username = document.getElementById("username").value.trim();
    let password = document.getElementById("password").value.trim();
  
    let usernameError = document.getElementById("username-error");
    let passwordError = document.getElementById("password-error");
  
    usernameError.innerHTML = "";
    passwordError.innerHTML = "";
  
    let isValid = true;
  
    if (username === "") {
      usernameError.innerHTML = "Please enter your username.";
      isValid = false;
    }
  
    if (password === "") {
      passwordError.innerHTML = "Please enter your password.";
      isValid = false;
    }
  
    if (isValid) {
      // Call a function to authenticate the user
      authenticateUser(username, password);
    }
  
    return isValid;
  }
  
  function authenticateUser(username, password) {
    // Use AJAX to send the username and password to the server for authentication
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "authenticate.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        if (xhr.responseText === "success") {
          // Redirect the user to the dashboard page if authentication is successful
          window.location.href = "dashboard.php";
        } else {
          // Display an error message if authentication fails
          alert("Invalid username or password.");
        }
      }
    };
    xhr.send("username=" + username + "&password=" + password);
  }
  