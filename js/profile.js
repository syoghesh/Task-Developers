$(document).ready(function() {
    $.ajax({
      url: "backend.php",
      type: "GET",
      success: function(response) {
        var data = JSON.parse(response);
        $("#username").text(data.username);
        $("#email").text(data.email);
        $("#mobile").text(data.mobile);
        $("#dob").text(data.dob);
        $("#age").text(data.age);
        $("#address").text(data.address);
        $("#location").text(data.location);
        $("#zipcode").text(data.zipcode);
        $("#state").text(data.state);
        $("#country").text(data.country);
      },
      error: function() {
        alert("Error retrieving data from server.");
      }
    });
  });

  // Check if user is logged in
if (localStorage.getItem("user") !== null) {
    // Retrieve user data from local storage
    var user = JSON.parse(localStorage.getItem("user"));
  
    // Display user data on profile page
    document.getElementById("username").innerText = user.username;
    document.getElementById("email").innerText = user.email;
    document.getElementById("mobile").innerText = user.mobile;
    document.getElementById("dob").innerText = user.dob;
  } else {
    // Redirect to login page
    window.location.href = "login.html";
  }
  
  