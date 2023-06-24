<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=!, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      
    <div class="background-photo" >
        <img src="assets/election-women-kudumbashree copy.png " >
        </div>
    <div class="headermain">
        <div style = "position:absolute; left:80px;"> 
            <img src="assets/kudumbashree-removebg-preview.png" width="130px" >
        </div>
       <div class="header-buttons">
        <a href="/index.html">
        <button class="button">HOME</button>


       </a>
   
       <a href="/store.html"> 
           <button class="button">STORE</button> 
       </a>
       <a href="landlease1.html">
          <button class="button">LAND LEASE</button>
       </a>
       <a href="foodstore.html">
           <button class="button">ORDER FOOD</button></a>
       <a href="about.html">
           <button class="button">ABOUT</button>
       </a>
       
       </div>
       <a href="logout.php">
        <button class="signinbutton">Logout</button>
       </a>
    </div>
   
</body>
</html>