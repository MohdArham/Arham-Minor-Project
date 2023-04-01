// function login() {
//   var username = document.getElementById("username").value;
//   var password = document.getElementById("password").value;

//   // Check if the username and password are valid (replace with your own validation logic)
//   if (username === "m" && password === "m") {
//     // Redirect to the index page on successful login
//     // window.location.href = "pages/index.html";
//     // console.log("Redirecting to index.html...");
//     console.log("Login button clicked");
//     window.location.href = "index.html";

   
//   } else {
//     // Display an error message if the username or password is invalid
//     alert("Invalid username or password. Please try again.");
//   }
// }
function validateForm() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  // Check if the username and password are empty
  if (username === "" || password === "") {
    alert("Please fill in all fields.");
    return false;
  }
}

function login() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  // Check if the username and password are valid (replace with your own validation logic)
  if (username === "m" && password === "m") {
    // Redirect to the index page on successful login
    console.log("Login button clicked");
    window.location.href = "index.html";
  } else {
    // Display an error message if the username or password is invalid
    alert("Invalid username or password. Please try again.");
  }
}
