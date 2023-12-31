<?php
include("db.php");
error_reporting(0);

if(isset($_POST["btn_submit"])) { // Change "submit" to "btn_submit"
  $name = $_POST["name"];
  $num = $_POST["num"];
  $email = $_POST["email"];
  $address = $_POST["Address"]; // Change "Address" to "address"
  $date = $_POST["date"];
  $time = $_POST["time"];
  $wifi = $_POST["Wifi"];
  $desktype = $_POST["desktype"];

  try {
    // Attempt to insert the data into the database
    $sql = "INSERT INTO `registration` (`name`, `contact_number`, `email`, `address`, `date`, `time`, `wifi`, `desk_type`) 
    VALUES ('$name', '$num', '$email', '$address', '$date', '$time', '$wifi', '$desktype')"; // Updated column names

    $result = $con->query($sql);

    if($result) {
      $success_message = "Registration successful!";
      // Perform any other actions upon successful registration
    } else {
      $error_message = "Registration failed!";
    }
  } catch (mysqli_sql_exception $e) {
    // Handle the duplicate entry error
    if ($e->getCode() == 1062) {
      $error_message = "Error: This username is already taken.";
      // Redirect or show an appropriate message to the user
    } else {
      $error_message = "Error: " . $e->getMessage();
      // Log the error details for further investigation
    }
  }
  $con->close();
}
?>



<html>
  <head>
    <title>Study Center Management</title>
    <link rel="stylesheet" href="cover.css">
    <style>
       
    </style>
    
  </head>
  <body>
    <div class="topnav">
      <a href="index.php">Student Study Center Management</a>
      <a class="active">Desk Registration</a>
      <a href="admin.php">Admin Login</a>
      <a href="contact.php">Contact</a>
    </div>
    <form action="" method="post" onsubmit="return validateForm()">
      <table>
        <tr>
          <td colspan="3"><h2>PERSONAL DETAILS</h2></td>
        </tr>
        <tr>
          <td>Name</td>
          <td colspan="2"><input type="text" name="name" id="name" /></td>
        </tr>
        <tr>
          <td>Email</td>
          <td colspan="2"><input type="email" name="email" id="email" /></td>
        </tr>
        <tr>
          <td>Contact No.</td>
          <td colspan="2"><input type="text" name="num" id="num" /></td>
        </tr>
        <tr>
          <td>Address</td>
          <td colspan="2"><input type="text" name="Address" id="Address" /></td>
        </tr>
        <tr>
          <td colspan="3"><h2>BOOK SEAT</h2></td>
        </tr>
        <tr>
          <td>Date</td>
          <td colspan="2"><input type="date" name="date" id="date" /></td>
        </tr>
        <tr>
          <td>Time</td>
          <td colspan="2">
            <select id="time" name="time">
              <option value="">Select Slot</option>
              <option value="10">10 am - 12 pm</option>
              <option value="12">12 pm - 02 pm</option>
              <option value="14">02 pm - 04 pm</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>WIFI</td>
          <td><input type="radio" name="Wifi" value="Yes" />Yes</td>
          <td><input type="radio" name="Wifi" value="No" />No</td>
        </tr>
        <tr>
          <td>Desktype</td>
          <td>
            <input type="radio" name="desktype" value="ac" />Air-Conditioned
          </td>
          <td><input type="radio" name="desktype" value="std" />Standard</td>
        </tr>
        <tr>
          <td colspan="3">
            <input type="submit" name="btn_submit" value="BOOK" />
          </td>
        </tr>
      </table>
    </form>

    <div class="message">
        <?php if(isset($success_message)): ?>
               <div class="success-message"><?php echo $success_message; ?></div>
          <?php endif; ?>

          <?php if(isset($error_message)): ?>
              <div class="error-message"><?php echo $error_message; ?></div>
          <?php endif; ?>
    </div>

    <script>
      function validateForm() {
        // Get form elements
        var name = document.getElementById("name").value;
        var num = document.getElementById("num").value;
        var email = document.getElementById("email").value;
        var address = document.getElementById("Address").value;
        var date = document.getElementById("date").value;
        var time = document.getElementById("time").value;
        var wifi = document.querySelector('input[name="Wifi"]:checked');
        var desktype = document.querySelector('input[name="desktype"]:checked');

        // Perform validation for other fields
        if (
          name === "" ||
          num === "" ||
          email === "" ||
          address === "" ||
          date === "" ||
          time === "" ||
          !wifi ||
          !desktype
        ) {
          alert("All fields are required!");
          return false;
        }

        // Validate name field
        if (!/^[a-zA-Z\s]+$/.test(name)) {
          alert("Name should only contain letters and spaces!");
          return false;
        }

        // Validate num field
        if (!/^\d+$/.test(num)) {
          alert("Contact Number should only contain numbers!");
          return false;
        }

        return true; // Allow form submission if validation passes
      }


      //displaying the messages
      document.addEventListener('DOMContentLoaded', function () {
        var messageContainer = document.querySelector('.message');
        var successMessage = document.querySelector('.success-message');
        var errorMessage = document.querySelector('.error-message');

        // Check if success or error message is present, then display the message container
        if (successMessage || errorMessage) {
          messageContainer.style.display = 'block';
        }
      });

    </script>

    <footer>
      <div class="footer">
        <p>&copy Copyrights Reserved</p>
      </div>
    </footer>
  </body>
</html>