<?php
include("dbconnect.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
<title>user home</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
  transition: all 0.3s ease;
}
:root{
  --white: #fff;
  --black: #24292d;
  --nav-main: #4070f4;
  --switchers-main: #0b3cc1;
  --light-bg: #F0F8FF;
}
nav{
  position: fixed;
  height: 70px;
  width: 100%;
  background: var(--nav-main);
  box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
nav .navbar{
  display: flex;
  align-items: center;
  height: 100%;
  max-width: 1300px;
  margin: auto;
  padding: 0 30px;
  justify-content: space-between;
}
nav .navbar a{
  font-size: 30px;
  font-weight: 500;
  color: var(--white);
  text-decoration: none;
}
 .navbar .nav-links{
   display: flex;
 }
 .navbar .nav-links li{
   margin: 0 8px;
   list-style: none;
   display: flex;
 }
 .navbar .nav-links a{
   font-size: 18px;
   font-weight: 400;
   opacity: 1;
 }
  .navbar .nav-links a:hover{
    opacity: 1;
  }
 .navbar .appearance{
   display: flex;
   align-items: center;
 }
.home-content{
  height: 100vh;
  width: 100%;
  background: var(--light-bg);
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 0 60px;
}
.home-content h2{
  color: var(--black);
  font-size: 50px;
}
.home-content h3{
  color: var(--black);
  font-size: 42px;
  margin-top: -8px;
}
.home-content h3 span{
  color: var(--nav-main);
}

.home-content p{
  color: var(--black);
  font-size: 16px;
  width: 45%;
  text-align: justify;
  margin: 4px 0 30px 0;
}
.home-content a{
  color: #fff;
  font-size: 20px;
  padding: 12px 24px;
  border-radius: 6px;
  text-decoration: none;
  background: var(--nav-main);
}
.home-content a:hover{
  background: var(--switchers-main);
}
@media (max-width: 1050px) {
  .home-content p{
    width: 70%;
  }
}




.card {
 width: 190px;
 height: 254px;
 border-radius: 20px;
 background: #f5f5f5;
 position: relative;
 padding: 1.8rem;
 border: 2px solid #c3c6ce;
 transition: 0.5s ease-out;
 overflow: visible;
}

.card-details {
 color: black;
 height: 100%;
 gap: .5em;
 display: grid;
 place-content: center;
}

.card-button {
 transform: translate(-50%, 125%);
 width: 60%;
 border-radius: 1rem;
 border: none;
 background-color: #4070f4;
 color: #fff;
 font-size: 1rem;
 padding: .5rem 1rem;
 position: absolute;
 left: 50%;
 bottom: 0;
 opacity: 0;
 transition: 0.3s ease-out;
}

.text-body {
 color: rgb(134, 134, 134);
}

/*Text*/
.text-title {
 font-size: 1.5em;
 font-weight: bold;
}

/*Hover*/
.card:hover {
 border-color: #008bf8;
 box-shadow: 0 4px 18px 0 rgba(0, 0, 0, 0.25);
}

.card:hover .card-button {
 transform: translate(-50%, 50%);
 opacity: 1;
}


.flex-container {
  display: flex;
  flex-wrap: wrap;
  background-color: DodgerBlue;
  justify-content: space-between;
  align-items: center;
}


.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}


.flex
{
display:flex;
column-gap:30px;
flex-wrap: wrap;

}


.flexx
{
width:200px;
height:200px;
}

</style>
</head> 
<body>


  <nav>
    <div class="navbar">
      <div class="logo"><a href="#">JJBLOGSITE</a></div>
      <ul class="nav-links">
        <li><a href="signin.php">logout</a></li>
      </ul>
  </nav>
  <button role="button" class="button-name" onclick="location.href='signin.php'">Back</button>
  <section class="home-content">
    <div class="texts">
      <h2 class="text"><?php echo "welcome ".$_SESSION['uname']; ?></h2>
      <h3 class="text">With a <span>Beautiful Colours...</span></h3>
      <p>I built this website using a combination of HTML, CSS, JavaScript, PHP, and MySQL. I hope you enjoy it! If you would like to learn more about my skills and experience, you can download my resume by clicking the button below. Thank you for visiting my website!</p>
      <div class="button">
      <a href="upload/shone.pdf"download>download resume 
      <i class="fas fa-location-arrow"></i></a>
      
    </div>
</br>
    

<div class="flex">

  <div class="card">
  <div class="card-details">
    <p class="text-title">EDIT</p>
    <p class="text-body">Edit posts </p>
  </div>
  <button class="card-button" onclick="window.location='edit.php'">select</button>
</div>


<div class="card">
  <div class="card-details">
    <p class="text-title">DELETE</p>
    <p class="text-body">Delete posts </p>
  </div>
  <button class="card-button" onclick="window.location='delete.php'">select</button>
</div>


<div class="card">
  <div class="card-details">
    <p class="text-title">VIEW</p>
    <p class="text-body">View posts</p>
  </div>
  <button class="card-button" onclick="window.location='view.php'">select</button>
</div>

<div class="card" >
  <div class="card-details">
    <p class="text-title">UPLOAD</p>
    <p class="text-body">upload post</p>
  </div>
  <button class="card-button" onclick="window.location='upload.php'">select</button>
</div>


</div>

  </section>

</body>
</html>