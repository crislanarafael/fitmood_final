<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserPage</title>
    <link rel="stylesheet" href="Sidebar.css"/>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
   <div class="sidebar">
       <div class="logo_content">
           <div class="logo">
               
               <div class="logo_name">FitMood</div>
           </div>
           <i class='bx bx-menu' id="btn" ></i>
       </div>
       <ul class="nav_list">
           <li>
                <i class='bx bx-search' ></i>
                <input type="text" placeholder="Search...">
               </a>
             <span class="tooltip">Search</span>   
           </li>
           <li>
            <a href="#">
             <i class='bx bx-grid-alt' ></i>
             <span class="links_name">Dashboard</span>
            </a>
          <span class="tooltip">Dashboard</span>   
        </li>
        <li>
            <a href="#">
            <i class='bx bx-user' ></i>
             <span class="links_name">User</span>
            </a>
          <span class="tooltip">Profile</span>   
        </li>
        <li>
            <a href="#">
             <i class='bx bx-chat' ></i>
             <span class="links_name">Messages</span>
            </a>
          <span class="tooltip">Messages</span>   
        </li>
        <li>
            <a href="analytics.php">
             <i class='bx bx-pie-chart-alt' ></i>
             <span class="links_name">Analytics</span>
            
          <span class="tooltip">Analytics</span>  
          </a>
        </li>
        <li>
            <a href="#">
             <i class='bx bx-cog' ></i>
             <span class="links_name">Settings</span>
            </a>
          <span class="tooltip">Settings</span>   
        </li>
        <li>
            <a href="#">
            <i class='bx bx-help-circle' ></i>
             <span class="links_name">Help</span>
            </a>
          <span class="tooltip">Help</span>  
        </li>
       </ul>
       <div class="profile_content">
           <div class="profile">
               <div class="profile_details">
                  <img src="smile.png" alt="">
                 <div class="name_status">
                     <div class="name"><?=$_SESSION['name']?></div>
                     <div class="status">Member</div>
                 </div>
               </div>
               <a href="logout.php"><i class='bx bx-log-out' id="logOut"></i></a>
           </div>
       </div>       
   </div>
   <div class="profileCard">
    <div class="cardHeader">
      <div class="pic">
        <img src="smile.png" alt="">
      </div>
      <div class="name"><h1><?=$_SESSION['name']?>'s dashboard</h1></div>
      <div class="status">Member</div>
      <div class="sm">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-github"></a>
        <a href="#" class="fab fa-youtube"></a>
      </div>
      <a href="#" class="contact-btn">Contact Me</a>
    </div>
      <div class="cardFooter">
        <div class="Stats">
          <div class="items">
            <span>120</span>
            Days Worked Out
          </div>
          <div class="border"></div>
          <div class="items">
            <span>40</span>
            Miles Ran
          </div>
          <div class="border"></div>
          <div class="items">
            <span>3000</span>
            Calories per Day
          </div>
        </div>
      </div>
    </div>
   </div>

   <script>
     let btn = document.querySelector("#btn");
     let sidebar = document.querySelector(".sidebar");
     let searchBtn = document.querySelector(".bx-search");

     btn.onclick = function(){
       sidebar.classList.toggle("active");
     }

     searchBtn.onclick = function(){
       sidebar.classList.toggle("active");
     }


   </script>
   
</body>
</html>