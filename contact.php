<?php
if(isset($_POST["submit"]))
{
    include 'db.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];

    $sql = "INSERT INTO `contact` (`name`, `email`, `comment`) 
            VALUES ('$name', '$email', '$comment')";

    if($conn->query($sql) == true)
    {
        echo "<div class='success-messagec'>Successfully inserted</div>";   
    }
    else
    {
        echo "<div class='error-messagec'>Error: $sql <br> $conn->error</div>";
    }
    $conn->close();
}
?>
<html>
  <head>
    <title>Study Center Management</title>
    <link rel="stylesheet" href="cover.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="topnav">
      <a href="index.php">Student Study Center Management</a>
      <a href="reg.php">Desk Registration</a>
      <a href="admin.php">Admin Login</a>
      <a class="active">Contact</a>
    </div>

    <div class="container1">
      <div class="content">
        <div class="left-side">
          <div class="address details">
            <i class="fas fa-map-marker-alt"></i>
            <div class="topic">Address</div>
            <div class="text-one">United University</div>
            <div class="text-two">Rawatpur,Jhalwa,Prayagraj</div>
          </div>
          <div class="phone details">
            <i class="fas fa-phone-alt"></i>
            <div class="topic">Phone</div>
            <div class="text-one">+91 94542 04427</div>
            <div class="text-two">+91 96343 45678</div>
          </div>
          <div class="email details">
            <i class="fas fa-envelope"></i>
            <div class="topic">Email</div>
            <div class="text-one">tushartripathi2002@gmail.com</div>
            <div class="text-two">contact@uniteduniversity.edu.in</div>
          </div>
        </div>
        <div class="right-side">
          <div class="topic-text">Send us a message</div>
          <p>If you have any kind of problem regarding registration feel free to contact or else drop us a message.</p>
          <form id="contact" method="post" action="contact.php">
            <div class="input-box">
              <input type="text" id="name" name="name" placeholder="Enter your name">
            </div>
            <div class="input-box">
              <input type="text" id="email" name="email" placeholder="Enter your email">
            </div>
            <div class="input-box message-box">
              <textarea name="comment" id="comment" placeholder="Enter your message"></textarea>
            </div>
            <div class="button">
              <input type="submit" value="submit" name="submit" id="submit" >
            </div>
          </form>
      </div>
      </div>
    </div>

    <br>
    <br>
    <br>
    
    <div class="footer">
      <p>&copy Copyrights Reserved</p>
    </div>
</body>
</html>