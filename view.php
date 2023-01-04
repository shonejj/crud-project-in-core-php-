<?php
include("dbconnect.php");
session_start();
$uname=$_SESSION['uname'];
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>admin home</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
  transition: all 0.3s ease;
}

html
{
    scroll-behavior:smooth;
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
row-gap:30px;
flex-wrap: wrap;
 

}

.flexx
{
width:200px;
height:200px;
}
.alg
{

display:flex;
text-align: center;
align-items: center;
padding: 80px;
}

.p1
 {
    margin: 0;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
   
  }
  

  .a1 {
    color: blue;
    width: 200px;
    height: 50px;
    display:block;
    text-decoration: none;
  }
  button {
 display: flex;
 flex-direction: column;
 justify-content: center;
 align-items: center;
 padding: 1em;
 border: 0px solid transparent;
 background-color: rgba(100,77,237,0.08);
 border-radius: 1.25em;
 transition: all 0.2s linear;
}

button:hover {
 box-shadow: 3.4px 2.5px 4.9px rgba(0, 0, 0, 0.025),
  8.6px 6.3px 12.4px rgba(0, 0, 0, 0.035),
  17.5px 12.8px 25.3px rgba(0, 0, 0, 0.045),
  36.1px 26.3px 52.2px rgba(0, 0, 0, 0.055),
  99px 72px 143px rgba(0, 0, 0, 0.08);
}

.tooltip {
 position: relative;
 display: inline-block;
}

.tooltip .tooltiptext {
 visibility: hidden;
 width: 4em;
 background-color: rgba(0, 0, 0, 0.253);
 color: #fff;
 text-align: center;
 border-radius: 6px;
 padding: 5px 0;
 position: absolute;
 z-index: 1;
 top: 25%;
 left: 110%;
}

.tooltip .tooltiptext::after {
 content: "";
 position: absolute;
 top: 50%;
 right: 100%;
 margin-top: -5px;
 border-width: 5px;
 border-style: solid;
 border-color: transparent rgba(0, 0, 0, 0.253) transparent transparent;
}

.tooltip:hover .tooltiptext {
 visibility: visible;
}

.button-name {
 align-items: center;
 appearance: none;
 background-color: #FCFCFD;
 border-radius: 4px;
 border-width: 0;
 box-shadow: rgba(45, 35, 66, 0.2) 0 2px 4px,rgba(45, 35, 66, 0.15) 0 7px 13px -3px,#D6D6E7 0 -3px 0 inset;
 box-sizing: border-box;
 color: #36395A;
 cursor: pointer;
 display: inline-flex;
 font-family: "JetBrains Mono",monospace;
 height: 48px;
 justify-content: center;
 line-height: 1;
 list-style: none;
 overflow: hidden;
 padding-left: 16px;
 padding-right: 16px;
 position: relative;
 text-align: left;
 text-decoration: none;
 transition: box-shadow .15s,transform .15s;
 user-select: none;
 -webkit-user-select: none;
 touch-action: manipulation;
 white-space: nowrap;
 will-change: box-shadow,transform;
 font-size: 18px;
}

.button-name:focus {
 box-shadow: #D6D6E7 0 0 0 1.5px inset, rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
}

.button-name:hover {
 box-shadow: rgba(45, 35, 66, 0.3) 0 4px 8px, rgba(45, 35, 66, 0.2) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
 transform: translateY(-2px);
}

.button-name:active {
 box-shadow: #D6D6E7 0 3px 7px inset;
 transform: translateY(2px);
}

</style>
</head> 
<body>

<div>
  <nav>
      <div class="navbar">
       <div class="logo"><a href="#">JJBLOGSITE</a></div>
        <ul class="nav-links">
          <li><a href="#">scroll up ^</a></li>
          <li><a href="signin.php">logout</a></li>
      </div>
  </nav>
</div>

</br>
</br>
</br>
<button role="button" class="button-name" onclick="location.href='userlogin.php'">Back</button>
<div class="alg">

<div class="flex">

 <?php  
  
  
  $folder="upload/";
  
  $qry=mysqli_query($conn, "select  * from upload");
  while ($row=mysqli_fetch_array($qry))
  { 
    $date=$row['date'];
    $dateString = date('F d, Y', strtotime($date));
  ?>

<div>
  <img src="<?php echo "$folder".$row['img']; ?>" width="200px" height="200px" >
    <div class="flexx">
    <h3><b><p class="p1"><?php   echo $row['title'];  ?></p></b></h3> 
    <h5><p class="p1"><?php   echo $row['discription'];  ?></p> </h5>
  </br>
    <p class="p1"><?php   echo $row['content'];  ?></p>
    <a href="post.php?id=<?php echo $row['id']?>" class="a1">Read more</a></br>
    <hr>
	<p><?php  echo $dateString," | by " , $row['uname'] ?></p>
	</div>
</div>


<?php 
  }
  ?>

</div>
</div>

</div>
</div>
      </body>
      </html>