<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Versatile Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a15b5a1603.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="history.js"></script>
    <style>
    body{
      background-color: #ffe6f2;
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
      i:hover{
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
        .abouts h3{
        margin-left: 257px;
        color:#ff3399;
      }
      .aboutsimg{
        height: 400px;
        width : 70px;
        margin-left: 257px;
        margin-right: 264px;
        border: 3px solid white;
      }
      .contacts h3{
        padding-left: 20px;
        color: white;
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
      #video{
        height: 400px;
        width: 1200px;
        margin-left: 150px;
      }
      .searching{
        padding-top:60px;
      }
      #search{
        width:40%;
        border-radius:20px;
        margin-left:30%;
        border:5px solid #ff3399;
        color:#cc0099;
      }
      .searchF input:hover{
        background-color:white;
      }
      ::placeholder{
        color:#ff3399;
        opacity:1;
      }
      #result{
        color:white;
        background-color:#ff3399;
        margin-left:257px;
        margin-right: 264px;
      }
      result a{
        color: #99004d;
      }
      .sidemenu i:hover{
        color: #cc0099;
      }
      #seabtn{
        background-color: #ff3399;
        color: white;
        border: 1px solid white;
        border-radius:20px;
      }
      #seabtn:hover{
        background-color:#cc0099;
      }
      #seabtn>i:hover{
        color: white;
      }
    </style>
  </head>
  <body>
    <header>
      <nav class="navbar">
        <ol>
          <li id="nothing"><i class="fas fa-align-justify" id="icon1" onclick="openFunction()"></i></li>
          <li><a href="home.php"><img src="image/translogo.png" alt="logo" height="42px" width="60px" id="logo"</a></li>
          <li id="serv"><a href="history.php" >History</a></li>
          <li id="about"><a href="#abouts">About</a></li>
          <li id="contact"><a href="#footer">Contact Us</a></li>
          <li id="contact"><a href="search.html">Search</a></li>
        </ol>
      </nav>
      <div class="sidemenu" id="menu">
        <a href="signin.php"><i class="fas fa-user-circle"> Account</i></a>
        <a href="history.php" ><i class="fas fa-sitemap"> History</i></a>
        <a href="#abouts"><i class="fas fa-info-circle"> About Us</i></a>
        <a href="#contacts"><i class="far fa-address-card"> Contact Us</i></a>
        <a href="search.html"><i class="fas fa-search"> Search</i></a>
        <a href="#" id="logout"><i class="fas fa-sign-out-alt" id="icon2"> Log Out</i></a>
        <a href="#" class="closebtn" onclick="closeFunction()">&times;</a>
      </div>
    </header><br><br>
    <div class="searching">
      <form class="searchF" id="form" method="post" action="" autocomplete="off">
        <div class="form-group">
          <input type="text" name="search" placeholder="Search" id="search">
          <button class="btn btn-danger btn-block" name="seabtn" type="submit"  id="seabtn"><i class="fas fa-search"></i></button>
        </div>
      </form>
    </div><br>
    <div id="result">

    </div>
    <br><br>
    <div class="abouts" id="abouts">
      <h3 id="abouth">About Us</h3>
      <div class="aboutsvid">
        <video src="video/abvid.mp4" type="video/mp4" id="video" autoplay mute></video>`
      </div>
    </div><br><br>
    <footer id="footer">
    <div class="contacts" id="contacts">
      <div class="contactdetails">
        <h3>Contact Us</h3><br>
        <form  action="feedback.php" method="post" autocomplete="off">
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
    </footer>
    <?php
    if(isset($_POST["seabtn"])){
    $username="root";
    $password="";
    $dbname="zeeza";
    $servername="localhost";
    $s = $_POST['search'];
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die('Database Error:' . $conn->connect_error);
    }
    $sql = "insert into history('name') values('$s')";
    if (!($conn ->query($sql))) {
      echo "error". $sql ."<br>". $conn->error;
    }
    $conn->close();
  }
    ?>
    <script type="text/javascript">
      function run(){
        console.log("hi");
      }
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
      $("#form").submit(function(e) {
        e.preventDefault()
        var query = $("#search").val()
        let result = ''
        var API_KEY = '4b9f6fc39cc36739ace9681016e2c1d9'
        var url='http://api.serpstack.com/search?access_key=' + API_KEY + '&type=web&query=' + query
        console.log(url);
        $.get(url, function(data){
          $("#result").html('')
          console.log(data);
          data.organic_results.forEach(res => {
            result=`
            <h1>${res.title}</h1><a target="_blank" href="${res.url}">${res.url}</a>
            <p>${res.snippet}</p>
            `
            $("#result").append(result)
          });
        })
      })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</html>
