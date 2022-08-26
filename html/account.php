<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BUY/SELL PROPERTY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a15b5a1603.js" crossorigin="anonymous"></script>
    <style>
    body{
      background-color: #ffe6f2;
      width: 100%;
    }
    .navbar{
      position: fixed;
      transition: 0.3s;
      background-color: #ff3399;
      margin-top: 0px;
      height: 50px;
      width: 100%;
      z-index: 1;
    }
      ol{
        list-style: none;
      }
      .navbar li{
        float: left;
      }
      .navbar ol{
        overflow: auto;
      }
      ol a{
        color: white;
        text-decoration: none;
        font-weight: bolder;
        font-family: garamond, serif;
        font-size: 22px;
        margin-top: 40px;
      }
      .sidemenu{
        position: fixed;
        top: 0px;
        left: 0px;
        height: 100%;
        width: 0px;
        overflow:hidden;
        background-color: #ff3399;
        z-index: 1;
        overflow-x: hidden;
        color: white;
        border: 2px solid #ffe6f2;
        padding-top: 50px;
        margin-top: 50px;
        transition: all 0.2s;
      }
      #icon1{
        transition: all 0.6s;
      }
      .sidemenu a {
        padding-left: 55px;
        text-decoration: none;
        font-size: 24px;
        color: white;
        display: block;
        padding-top: 25px;
      }
      .sidemenu a:hover{
        color:#99004d;
      }
      .sidemenu .closebtn{
        position: absolute;
        top: -18px;
        right: 35px;
        font-size: 36px;
        margin-left: 32px;

      }
      .navbar li a {
        padding-left: 20px;
      }
      i{
        margin-top: 9px;
        color: white;
      }
      ol a:hover{
        color: #99004d;
      }
      #icon1:hover{
        color:#99004d;
      }
      #logo{
        padding-left: 20px;
      }
      #heading{
        color: #ff3399;
        margin-top: 380px;
        margin-left: 257px;
      }
      #logout{
        padding-top: 250px;
      }
      div input:hover{
        background-color: #cc0099;
        color: white;
      }
      .services div:hover{
        background-color: #cc0099;
        color: white;
      }
        .abouts h3{
        margin-left: 257px;
        color:#ff3399;
      }
      .aboutsimg{
        height: 400px;
        width:70px;
        margin-left: 257px;
        margin-right: 264px;
        border: 3px solid white;
      }
      .contacts h3{
        padding-left: 20px;
        color: white;
      }
      .contacts{
        width: 100%;
      }
      .contactdetails{
        background-color: #ff3399;
        height: 400px;
      }
      .feedback{
        border: 3px solid white;
        margin-left:600px;
      }
      .feedback label{
        color: white;
        font-weight: bold;
      }
      .info{
        color: white;
        text-align: center;
      }
      #submit{
        margin-left: 120px;
        color: #ff3399;
        background-color: white;
      }
      .contactdetails h3{
        text-align: center;
      }
      .social{
        text-align: center;
      }
      .social li{
        display: inline;
      }
      .social i{
        color: white;
      }
      #submit:hover{
        color:white;
        background-color: #cc0099;
      }
      .social i:hover{
        color: #cc0099;
      }
      .feedback label{
        margin-left: 15px;
        padding-bottom: 30px;
      }
      .feedback input{
        margin-right: 30px;
      }
      .contacts{
        width: 100%;
      }
      #video{
        height: 400px;
        width: 1200px;
        margin-left: 150px;
      }
      .shopping div{
        border:2px solid white;
        background-color: #ff3399;
        height: 250px;
        width: 900px;
        margin-left: 250px;
        margin-top: 75px;
        margin-right: 400px;
      }
      #shopsec img{
        height: 200px;
        width: 300px;
        position: relative;
        left: 20px;
        top: 25px;
      }
      .shopping #shopart{
        color:white;
        position: relative;
        left: 340px;
        top: -170px;
        font-size: 20px;
      }
      #shopart h5{
        font-weight: bolder;
      }
      .shopping a{
        text-decoration: none;
      }
      #shopsec{
        height: 250px;
      }
      #shopsec:hover{
        background-color: #cc0099;
      }
      .shopping div{
        margin-top: 20px;
      }
      .sidemenu i:hover{
        color: #cc0099;
      }
      #photo {
        font-size: 200px;
        margin-left: 45%;
        color: #ff3399;
      }
      #chpass:hover {
        background-color: blue;
      }
      #passch{
        background-color: #cc0099;
      }
      #change {
        background-color: white;
        color: #ff3399;
        margin-left:35%;
      }
    </style>
  </head>
  <body>
    <header>
      <nav class="navbar">
        <ol>
          <li id="nothing"><i class="fas fa-align-justify" id="icon1" onclick="openFunction()"></i></li>
          <li><a href="home.php"><img src="image/translogo.png" alt="logo" height="42px" width="60px" id="logo"</a></li>
          <li id="serv"><a href="#account">ACCOUNT</a></li>
          <li id="about"><a href="#abouts">About</a></li>
          <li id="contact"><a href="#contacts">Contact Us</a></li>
          <li id="contact"><a href="search.html">Search</a></li>

        </ol>
      </nav> <br><br>

        <div class="account" id="account">
          <i class="far fa-user-circle" id="photo"></i> <br>
          <div id="details" style="color:white;font-size:40px;text-align:left;padding:20px;">
        <?php
          $username="root";
          $password="";
          $dbname="zeeza";
          $servername="localhost";
          $email = "mdazeezulla2001@gmail.com";
          $uname = "zeeza18";
          $conn = new mysqli($servername, $username, $password, $dbname);
          $sql="select * from signin where uname = '$uname' and email = '$email' ";
          $res = mysqli_query($conn, $sql);
          echo "<table border='5' style='margin-left:25%;margin-right:auto;background-color:#ff3399;border: 3px solid #ff3399;'>";
          if(mysqli_num_rows($res)>0)
          {
          	while($row=mysqli_fetch_assoc($res))
          	{
          	echo "<tr><td>USERNAME : </td><td>".$row["uname"]."</td></tr><tr><td>PHONE NUMBER : </td><td>".$row["phno"]."</td></tr><tr>";
          	echo "<td>EMAIL : </td><td>".$row["email"]."</td>"."</tr>";
          	}
          	echo "</table>";
          }
          ?> <br>
          </div>
    </div><br>
    <div class="contacts" id="contacts">
      <div class="contactdetails">
        <h3>Contact Us</h3><br>
        <form  action="feedback.php" method="post">
          <table class="feedback">
            <tr>
              <td><label for="name">Name: </label></td>
              <td>  <input type="text" name="name"  placeholder="Enter Your Name"><br><br></td>
            </tr>
            <tr>
              <td><label for="phone">Phone No :</label></td>
              <td><input type="tel" name="phone"  placeholder="Enter Your Phone No"><br><br></td>
            </tr>
            <tr>
              <td><label for="mail">Email-id: </label></td>
              <td><input type="mail" name="mail" placeholder="Enter Your Email"><br><br></td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit" id="submit" name="submit" value="SUBMIT"></td>
            </tr>
        </table>
        </form>
        <div class="info">
          <p>The rights for the website are reserved. Any violation to disobey laws is under cyber crime any issue of use or copyright may lead to an offence <br>The content
          is authorized by &#169;<strong> Copyright Act 1957</strong> </p>
        </div>
        <div class="social">
          <a href="https://www.instagram.com/versatileengine/" target="_blank"><li><i class="fab fa-instagram-square" style="font-size : 40px;"></i></li></a>
          <a href="https://www.facebook.com/profile.php?id=100075057470078" target="_blank"><li><i class="fab fa-facebook-square" style="font-size : 40px;"></i></li></a>
          <a href="mailto:versatile.engine.2001@gmail.com" target="_blank"><li><i class="fas fa-envelope-square" style="font-size : 40px;"></i></li></a>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      function openFunction(){
        document.getElementById("menu").style.width="259px";
        document.getElementById("icon1").style.visibility="hidden";
        document.getElementById("icon1").style.transition = "0.01s";
      }
      function closeFunction(){
        document.getElementById("menu").style.width="0px";
        document.getElementById("icon1").style.visibility="visible";
      }
      var video = document.querySelector('video');
      video.muted = true;
      video.play()
      video.loop = true;
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>
