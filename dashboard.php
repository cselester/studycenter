<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header('Location:admin.php');
    exit();
}
?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Book logo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='fa fa-book'></i>
      <span class="logo_name">Study Center Management</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Registrations</span>
          </a>
        </li>
       
        
       
        <li>
          <a href="messages.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        
        
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Registration</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
    </nav>

    <div class="home-content">
    <table border="1" align="center" width=100%>
    <tr bgcolor="#0A2558">
        <td><font color="white">Name<font></td>
        <td><font color="white">Mobile Number<font></td>
        <td><font color="white">Email<font></td>
        <td><font color="white">Address<font></td>
        <td><font color="white">Date<font></td>
        <td><font color="white">Time<font></td>
        <td><font color="white">Wifi<font></td>
        <td><font color="white">Desktype <font></td>

    </tr>
    <?php
    include 'db.php';

$sql = "SELECT * FROM registration";

// Run SQL query
$val=mysqli_query($con, $sql);
$num=1;
while($r=mysqli_fetch_array($val))
{
	echo "  
	 <tr  >
        <td >".$r['name']."</td>
        <td >".$r['contact_number']."</td>
        <td >".$r['email']."</td>
        <td >".$r['address']."</td>
        <td >".$r['date']."</td>
        <td >".$r['time']."</td>
        <td >".$r['wifi']."</td>
        <td >".$r['desk_type']."</td>
  </tr>
	"; ;    
   }
?>
    </div>
  </section>

  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
    sidebar.classList.toggle("active");
    if(sidebar.classList.contains("active")){
       sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
    }else
      sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
 </script>

</body>
</html>