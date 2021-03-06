<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();

$sql = "SELECT cardio, strength, balance, flexibility FROM fitnessdata JOIN accounts ON fitnessdata.user_id = accounts.id";
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
    <link rel="stylesheet" href="dashboard.css"/>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src='https://cdn.plot.ly/plotly-2.3.0.min.js'></script>
    <script src="graph.js"></script>
        
    

</head>
<body>
   <div class="sidebar">
       <div class="logo_content">
           <div class="logo">
               <i class='bx bxl-html5'></i>
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
            <a href="">
             <i class='bx bx-grid-alt' ></i>
             <span class="links_name">Dashboard</span>
            </a>
          <span class="tooltip">Dashboard</span>   
        </li>
        <li>
            <a href="">
            <i class='bx bx-user' ></i>
             <span class="links_name">User</span>
            </a>
          <span class="tooltip">Profile</span>   
        </li>
        <li>
            <a href="">
             <i class='bx bx-chat' ></i>
             <span class="links_name">Messages</span>
            </a>
          <span class="tooltip">Messages</span>   
        </li>
        <li>
            <a href="home.html">
             <i class='bx bx-pie-chart-alt' ></i></a>
             <a href="home.html"><span class="links_name">Analytics</span></a>
            
          <a href="home.html"><span class="tooltip">Analytics</span></a>
          
        </li>
        <li>
            <a href="">
             <i class='bx bx-cog' ></i>
             <span class="links_name">Settings</span>
            </a>
          <span class="tooltip">Settings</span>   
        </li>
        <li>
            <a href="">
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
                     <div class="name">John Doe</div>
                     <div class="status">Member</div>
                 </div>
               </div>
               <a href="logout.php"><i class='bx bx-log-out' id="logOut"></i></a>
           </div>
       </div>       
   </div>
   <div class="profileCard">
    <h1><?=$_SESSION['name']?>'s analytics page</h1>
    <br>
    <?php echo $sql; ?>
    <label for="workout-select">Select the Type of Workout You Did Today:</label>

<select name="workout" id="workout-select">
    <option value="">--Please choose an option--</option>
    <option value="cardio">Cardio</option>
    <option value="strength">Strength Training</option>
    <option value="balance">Balance Training</option>
    <option value="flexibility">Flexibility Training</option>
</select>
<button onclick="getWorkout()">Enter Selected Workout</button>
    <div id='myDiv'><!-- Plotly chart will be drawn inside this DIV --></div>
        <!-- INSERT PLOT HERE-->
    <button onclick="summarizeData()">Summarize My Progress</button>
   <br>
   <button onclick="saveData()">Save My Progress</button>
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