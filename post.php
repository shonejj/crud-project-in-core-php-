<html>
  <head>
    <title>view post </title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
      *{
  font-family: 'Poppins',sans-serif;
  transition: all 0.3s ease;
}

      .body1 {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        overflow:cover;
        display:none;
      }
      .header {
        display: flex;
        background-color:#4070f4;
      }
      img {
        width: 100%;
        height: 60%;
        opacity: 0.8 ;
      }
      h2 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color:rgb(29, 15, 15);
        font-size: 2em;
      }
      h3 {
        position: absolute;
        top: 60%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: rgb(29, 15, 15);
      }
      p {
        padding: 20px;
      }
      button {
        position: absolute;
        top: 10px;
        left: 10px;
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

/*loader ..........................................................................................................*/


.loader-wrapper{

  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background-colour: #fff;
  display:flex;
  justify-content:center;
}


.loader {
  width: 48px;
  height: 48px;
  margin: auto;
  position: relative;
  background-colour: #fff;
}

.loader:before {
  content: '';
  width: 48px;
  height: 5px;
  background: #f0808050;
  position: absolute;
  top: 60px;
  left: 0;
  border-radius: 50%;
  animation: shadow324 0.5s linear infinite;
  background-colour: #fff;
}

.loader:after {
  content: '';
  width: 100%;
  height: 100%;
  background: #f08080;
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 4px;
  animation: jump7456 0.5s linear infinite;
  background-colour: #fff;
}

@keyframes jump7456 {
  15% {
    border-bottom-right-radius: 3px;
  }

  25% {
    transform: translateY(9px) rotate(22.5deg);
  }

  50% {
    transform: translateY(18px) scale(1, .9) rotate(45deg);
    border-bottom-right-radius: 40px;
  }

  75% {
    transform: translateY(9px) rotate(67.5deg);
  }

  100% {
    transform: translateY(0) rotate(90deg);
  }
}

@keyframes shadow324 {

  0%,
    100% {
    transform: scale(1, 1);
  }

  50% {
    transform: scale(1.2, 1);
  }
}


    </style>
  </head>
  <body>

<div class="loader-wrapper">
  <div class="loader"></div>
</div>

<div class="body1">

<?php

include("dbconnect.php");

$id=$_GET['id'];


$qry = mysqli_query($conn, "SELECT * from upload WHERE id='$id'");
$row=mysqli_fetch_array($qry);
if($row)
{  
$content=$row['content'];
?>









<div class="header">
      <h2><?php echo $row['title']; ?></h2>
      <h1 style="color: white;">JJBLOGSITE</h1>
    </div>
    <img src="upload/<?php echo $row['img']; ?>" alt="post image"/>
    <h3><?php echo $row['date']; ?>  | by   <?php echo $row['uname']; ?></h3>
    <button class="button-name" onclick="history.go(-1)">Back</button>
    <p>
    <?php echo $row['title']; ?> : <?php echo $row['discription']; ?>
    </p>
    <p>
    <?php echo $row['content']; ?>
    </p>

<?php
}
?>

<script>

$(window).on("load",function() {
  $(".loader-wrapper").delay(2000).fadeOut(1000);
  $(".body1").delay(2000).fadeIn(1000);
});


</script>

</div>
</body>
</html>
