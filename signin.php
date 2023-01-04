<?php 
include("dbconnect.php");
session_start();
extract($_POST);
if(isset($_POST['btn']))
{
$qry=mysqli_query($conn,"select * from register where uname='$uname'&& psw='$psw'");
$count=mysqli_num_rows($qry);
if($count>0)
{
$_SESSION['uname']=$uname;
header("location:userlogin.php");
}

else
{
echo'<script>alert("user name or passwod wrong")</script>';
}
}




if(isset($_POST['btn2']))
{
extract($_POST);
$qry=mysqli_query($conn,"select * from register where uname='$uname'");
$count=mysqli_num_rows($qry);
if($count>0)
{
echo '<script>alert("user name already exists enter different user name")</script>';
}
else
{
$qry2=mysqli_query($conn,"insert into register values('','$uname','$email','$psw')");
if($qry2)
{
echo '<script>alert("registered succesfully")</script>';
}
else
{
  echo '<script>alert("something went wrong.registeration failed! ")</script>';
}
}
}
?>
<html>
<head>
<title>signin</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}


section{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  background: #f2f2f2;

}
body{
  background: #f2f2f2;
  background: linear-gradient(-135deg, #c850c0, #4158d0); 
  background-image: url("bg/bg.png");
   background-size: cover; 
}
.bc
{
display: grid;  
background-image: url("upload/bc2.png");
height: 100%;
width: 100%;
place-items: center;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}


::selection{
  background: #4158d0;
  color: #fff;
}
.wrapper{
  width: 380px;
  background: #fff;
  border-radius: 15px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
  
}
.wrapper .title{
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  line-height: 100px;
  color: #fff;
  user-select: none;
  border-radius: 15px 15px 0 0;
  background: linear-gradient(-135deg, #c850c0, #4158d0);
}
.wrapper form{
  padding: 10px 30px 50px 30px;
}
.wrapper form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
  position: relative;
}
.wrapper form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  font-size: 17px;
  padding-left: 20px;
  border: 1px solid lightgrey;
  border-radius: 25px;
  transition: all 0.3s ease;
}
.wrapper form .field input:focus,
form .field input:valid{
  border-color: #4158d0;
}
.wrapper form .field label{
  position: absolute;
  top: 50%;
  left: 20px;
  color: #999999;
  font-weight: 400;
  font-size: 17px;
  pointer-events: none;
  transform: translateY(-50%);
  transition: all 0.3s ease;
}
form .field input:focus ~ label,
form .field input:valid ~ label{
  top: 0%;
  font-size: 16px;
  color: #4158d0;
  background: #fff;
  transform: translateY(-50%);
}
form .content{
  display: flex;
  width: 100%;
  height: 50px;
  font-size: 16px;
  align-items: center;
  justify-content: space-around;
}
form .content .checkbox{
  display: flex;
  align-items: center;
  justify-content: center;
}
form .content input{
  width: 15px;
  height: 15px;
  background: red;
}
form .content label{
  color: #262626;
  user-select: none;
  padding-left: 5px;
}
form .content .pass-link{
  color: "";
}
form .field input[type="submit"]{
  color: #fff;
  border: none;
  padding-left: 0;
  margin-top: -10px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
  background: linear-gradient(-135deg, #c850c0, #4158d0);
  transition: all 0.3s ease;
}
form .field input[type="submit"]:active{
  transform: scale(0.95);
}
form .signup-link{
  color: #262626;
  margin-top: 20px;
  text-align: center;
}
form .pass-link a,
form .signup-link a{
  color: #4158d0;
  text-decoration: none;
  
}
form .pass-link a:hover,
form .signup-link a:hover{
  text-decoration: underline;
  cursor:pointer;
}
.shadow-pop-br:hover {
	animation: shadow-pop-br 0.4s cubic-bezier(0.470, 0.000, 0.745, 0.715) both;
    border-radius: 15px;
}

 @keyframes shadow-pop-br {
  0% {
    box-shadow: 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e;
    transform: translateX(0) translateY(0);
  }
  100% {
    box-shadow: 1px 1px #3e3e3e, 2px 2px #3e3e3e, 3px 3px #3e3e3e, 4px 4px #3e3e3e, 5px 5px #3e3e3e, 6px 6px #3e3e3e, 7px 7px #3e3e3e, 8px 8px #3e3e3e;
    transform: translateX(-8px) translateY(-8px);
  }
}


/* The Modal (background) */
.modal {
  display:none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 0px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(1,2,7); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 0px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 30px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}







nav{
  position: fixed;
  height: 70px;
  width: 100%;
  background: #4070f4;
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
  color: white;
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


.move
{
  display: flex;
  height: 100%;
  width: 100%;
  place-items: center;
  text-align:center;
  justify-content:center;

}
</style>
</head>
<body>

<nav>
    <div class="navbar">
      <div class="logo"><a href="">JJBLOGSITE</a></div>
      <ul class="nav-links">
        <li><a href="signin.php">login</a></li>
      </ul>
  </nav>
<div class="move">
<selction>

<div class="wrapper">
<div class="shadow-pop-br">
      <div class="title">Login Form</div>
      <form method=post action="#">
        <div class="field">
          <input type="text" name="uname" title= " please enter your user name " autocomplete="off" required>
          <label>User Name</label>
        </div>
        <div class="field">
          <input type="password" name="psw" required>
          <label>Password</label>
        </div>
        
        <div class="field">
          <input type="submit" value="Login" name="btn">
                  </div>
        <div class="signup-link">Not a member? <a id="myBtn">Signup now</a></div>
      </form>
    </div>
</div>




<div id="myModal" class="modal">
  <div class="modal-content" >
  <span class="close">&times;</span> 
      <div class="bc">

       
    <div class="wrapper">
      
      <div class="shadow-pop-br">
        <div class="title">Registration Forum</div>
        <form method=post action="#" enctype="multipart/form-data">
  
        <div class="field">
              <input type="text" name="uname" title= "use numbers uppercase and lower case letter,symbol is not permitted " autocomplete="off" required>
              <label>User Name</label>
            </div>
  
          <div class="field">
            <input type="text" name="email" title= " please enter your email address " autocomplete="off" required>
            <label>Email Address</label>
          </div>
  
          <div class="field">
            <input type="password" name="psw" title= "set pasword with 8 characters with signs,letters,numbers" required>
            <label>Password</label>
          </div>
  
          <div class="field">
            <input type="submit" value="signup" name="btn2">
          </div>
        </form>
      </div>
  </div>


      </div>

</section>
      
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</div>
</body>
</html>