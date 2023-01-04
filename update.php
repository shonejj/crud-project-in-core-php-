<?php
include("dbconnect.php");
session_start();



extract($_POST);
if(isset($_POST['btn2']))
{
$uname=$_SESSION['uname'];
$date = date('Y-m-d');
$id=$_SESSION['id'];

$file_name=$_FILES['img']['name'];
$file_loc=$_FILES['img']['tmp_name'];
$folder="upload/";

$path=move_uploaded_file($file_loc,$folder.$file_name);

$qry2 = mysqli_query($conn, "UPDATE upload SET title='$title', discription='$discription', content='$content', img='$file_name', uname='$uname', date='$date' WHERE id='$id'");

if($qry2)
{
echo '<script>alert("post uploaded succesfully")</script>';
}
else
{
    echo '<script>alert(" uploaded was not completed there is a error please try again ")</script>';
}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>UPDATE</title>

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


.icon-btn {
  width: 50px;
  height: 50px;
  border: 1px solid #4070f4;
  background: white;
  border-radius: 25px;
  overflow: hidden;
  position: relative;
  transition: width 0.2s ease-in-out;
  font-weight: 500;
  font-family: inherit;
}

.add-btn:hover {
  width: 120px;
}

.add-btn::before,
.add-btn::after {
  transition: width 0.2s ease-in-out, border-radius 0.2s ease-in-out;
  content: "";
  position: absolute;
  height: 4px;
  width: 10px;
  top: calc(50% - 2px);
  background: #4070f4;
}

.add-btn::after {
  right: 14px;
  overflow: hidden;
  border-top-right-radius: 2px;
  border-bottom-right-radius: 2px;
}

.add-btn::before {
  left: 14px;
  border-top-left-radius: 2px;
  border-bottom-left-radius: 2px;
}

.icon-btn:focus {
  outline: none;
}

.btn-txt {
  opacity: 0;
  transition: opacity 0.2s;
}

.add-btn:hover::before,
.add-btn:hover::after {
  width: 4px;
  border-radius: 2px;
}

.add-btn:hover .btn-txt {
  opacity: 1;
}

.add-icon::after,
.add-icon::before {
  transition: all 0.2s ease-in-out;
  content: "";
  position: absolute;
  height: 20px;
  width: 2px;
  top: calc(50% - 10px);
  background: #4070f4;;
  overflow: hidden;
}

.add-icon::before {
  left: 22px;
  border-top-left-radius: 2px;
  border-bottom-left-radius: 2px;
}

.add-icon::after {
  right: 22px;
  border-top-right-radius: 2px;
  border-bottom-right-radius: 2px;
}

.add-btn:hover .add-icon::before {
  left: 15px;
  height: 4px;
  top: calc(50% - 2px);
}

.add-btn:hover .add-icon::after {
  right: 15px;
  height: 4px;
  top: calc(50% - 2px);
}

.wave-group {
  position: relative;
}

.wave-group .input {
  font-size: 16px;
  padding: 10px 10px 10px 5px;
  display: block;
  width: 200px;
  border: none;
  border-bottom: 1px solid #515151;
  background: transparent;
}

.wave-group .input:focus {
  outline: none;
}

.wave-group .label {
  color: #999;
  font-size: 18px;
  font-weight: normal;
  position: absolute;
  pointer-events: none;
  left: 5px;
  top: 10px;
  display: flex;
}

.wave-group .label-char {
  transition: 0.2s ease all;
  transition-delay: calc(var(--index) * .05s);
}

.wave-group .input:focus ~ label .label-char,
.wave-group .input:valid ~ label .label-char {
  transform: translateY(-20px);
  font-size: 14px;
  color: #5264AE;
}

.wave-group .bar {
  position: relative;
  display: block;
  width: 200px;
}

.wave-group .bar:before,.wave-group .bar:after {
  content: '';
  height: 2px;
  width: 0;
  bottom: 1px;
  position: absolute;
  background: #5264AE;
  transition: 0.2s ease all;
  -moz-transition: 0.2s ease all;
  -webkit-transition: 0.2s ease all;
}

.wave-group .bar:before {
  left: 50%;
}

.wave-group .bar:after {
  right: 50%;
}

.wave-group .input:focus ~ .bar:before,
.wave-group .input:focus ~ .bar:after {
  width: 50%;
}

.input1 {
  max-width: 190px;
  height: 44px;
  background-color: #05060f0a;
  border-radius: .5rem;
  padding: 0 1rem;
  border: 2px solid transparent;
  font-size: 1rem;
  transition: border-color .3s cubic-bezier(.25,.01,.25,1) 0s, color .3s cubic-bezier(.25,.01,.25,1) 0s,background .2s cubic-bezier(.25,.01,.25,1) 0s;
}

.label1 {
  display: block;
  margin-bottom: .3rem;
  font-size: .9rem;
  font-weight: bold;
  color: #05060f99;
  transition: color .3s cubic-bezier(.25,.01,.25,1) 0s;
}

.input1:hover, .input1:focus, .input1-group1:hover .input1 {
  outline: none;
  border-color: #05060f;
}

.input1-group1:hover .label1, .input1:focus {
  color: #05060fc2;
}

.click {
 display: inline-block;
 padding: 12px 24px;
 border: 1px solid #4f4f4f;
 border-radius: 4px;
 transition: all 0.2s ease-in;
 position: relative;
 overflow: hidden;
 font-size: 19px;
 color: black;
 z-index: 1;
}

.click:before {
 content: "";
 position: absolute;
 left: 50%;
 transform: translateX(-50%) scaleY(1) scaleX(1.25);
 top: 100%;
 width: 140%;
 height: 180%;
 background-color: rgba(0, 0, 0, 0.05);
 border-radius: 50%;
 display: block;
 transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
 z-index: -1;
}

.click:after {
 content: "";
 position: absolute;
 left: 55%;
 transform: translateX(-50%) scaleY(1) scaleX(1.45);
 top: 180%;
 width: 160%;
 height: 190%;
 background-color: #4070f4;
 border-radius: 50%;
 display: block;
 transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
 z-index: -1;
}

.click:hover {
 color: #4070f4;
 border: 1px solid #4070f4;
}

.click:hover:before {
 top: -35%;
 background-color: #4070f4;
 transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
}

.click:hover:after {
 top: -45%;
 background-color: #4070f4;
 transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
}
#preview-container {
    display: inline-block;   
    width: 60px; /* Set the width of the container */
  height: 50px; /* Set the height of the container */
  overflow: hidden; /* Hide any part of the image that overflows the container */
  vertical-align: top;
}

#preview {
  width: 100%; /* Set the width of the image to fill the container */
  height: auto; /* Set the height of the image to maintain the aspect ratio */
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

  <nav>
    <div class="navbar">
      <div class="logo"><a href="#">JJBLOGSITE</a></div>
      <ul class="nav-links">
      <li><a href="signin.php">logout</a></li>
      </ul>
  </nav>

  <section class="home-content">
    <div class="texts">
      <h2 class="text"><?php echo "welcome ".$_SESSION['uname']; ?></h2>
      <h3 class="text">With a <span>Beautiful Colours...</span></h3>
      <p>Lorem ipsum dolor sited and ametvel, nobised, minimali! Quibusdam temporibus, placeate reessed veritatis optio aliquam illum debitis at, perspiciatis consequatur iure vel, quae ratione. Praesentium, at.</p>
      
      
 <div>


      <form method="post" action="#" enctype="multipart/form-data">


      <div class="wave-group">

<input type="text" name="title"  class="input" required />
<span class="bar"></span>
  <label class="label">
    <span class="label-char" style="--index: 0">T</span>
    <span class="label-char" style="--index: 1">i</span>
    <span class="label-char" style="--index: 2">t</span>
    <span class="label-char" style="--index: 3">l</span>
    <span class="label-char" style="--index: 4">e</span>
  </label>

</div>


<div class="input1-group1">
    <label class="label1">Discription</label>
    <input type="text" autocomplete="off" placeholder="give an discription" name="discription" class="input1" required />
    <div></div></div>

<div class="input1-group1">
    <label class="label1">Content</label>
    <input type="text" autocomplete="off" placeholder="give an discription" name="content" class="input1" required />
    <div></div></div>

<lable>image</lable>

<div>

      <div class="button">
     <button class="icon-btn add-btn" id="add-photo-btn" name="btn">
  <div class="add-icon"></div>
  <div class="btn-txt">Add Photo</div>
</button>
<input type="file" id="image-input" name="img" accept="image/*" style="display: none;" onchange="previewImage()" required />
<div id="preview-container">
  <img id="preview" src="" alt="Image preview">
</div>
</br>
</div>




</div>
</br>
<input type="submit" name="btn2" value="update" class="click"/> <button role="button" class="button-name" onclick="location.href='edit.php'">Back</button>




</form>
 
</div>
</section>




<script>
  const addPhotoBtn = document.getElementById('add-photo-btn');
  const imageInput = document.getElementById('image-input');

  addPhotoBtn.addEventListener('click', function() {
    // Programmatically click the image input element
    imageInput.click();
  });
</script>   
<script>
    function previewImage() {
  var input = document.querySelector('input[type="file"]');
  var file = input.files[0];
  var preview = document.querySelector('#preview');
  
  // Create a URL for the selected file
  var url = URL.createObjectURL(file);
  
  // Set the src attribute of the img element to the URL
  preview.src = url;
}
</script>
</body>
</html>
