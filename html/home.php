<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Versatile Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a15b5a1603.js" crossorigin="anonymous"></script>
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
      .services{
        margin-left: 257px;
        display: inline;
      }
      .shoppingbar{
        height: 275px;
        margin-left: 257px;
        margin-right: 950px;
        border : 5px solid white;
        background-color: #ff3399;
      }
      .foodbar{
        height: 275px;
        border : 5px solid white;
        margin-left: 600px;
        margin-top: -275px;
        margin-right: 607px;
        background-color: #ff3399;
      }
      .cabbar{
        height: 275px;
        border : 5px solid white;
        margin-left: 943px;
        margin-top: -275px;
        margin-right: 264px;
        background-color: #ff3399;
      }
      #shop{
        height: 140px;
        width: 80%;
        border:1px solid white;
        margin-left: 32px;
      }
      .services a{
        text-decoration: none;
      }
      .services p{
        color: white;
        text-align: center;
        font-size: 18px;
        font-weight: bold;
      }
      .services input{
        color:#ff3399;
        background-color: white;
        font-weight: bold;
        border-color: white;
        border-radius: 12px;
        margin-left: 39%;
        margin-bottom: 10px;
      }
      #food{
        height: 140px;
        width: 80%;
        border:1px solid white;
        margin-left: 32px;
      }
      #cab{
        height: 140px;
        width: 80%;
        border:1px solid white;
        margin-left: 32px;
      }
      #flight{
        height: 140px;
        width: 80%;
        border:1px solid white;
        margin-left: 32px;
      }
      #grocery{
        height: 140px;
        width: 80%;
        border:1px solid white;
        margin-left: 32px;
      }
      #car{
        height: 140px;
        width: 80%;
        border:1px solid white;
        margin-left: 32px;
      }
      .flightbar{
        height: 275px;
        margin-left: 257px;
        margin-right: 950px;
        border : 5px solid white;
        background-color: #ff3399;
      }
      .carbar{
        height: 275px;
        border : 5px solid white;
        margin-left: 600px;
        margin-top: -275px;
        margin-right: 607px;
        background-color: #ff3399;
      }
      .grocerybar{
        height: 275px;
        border : 5px solid white;
        margin-left: 943px;
        margin-top: -275px;
        margin-right: 264px;
        background-color: #ff3399;
      }
      #news{
        height: 140px;
        width: 80%;
        border:1px solid white;
        margin-left: 32px;
      }
      #ott{
        height: 140px;
        width: 80%;
        border:1px solid white;
        margin-left: 32px;
      }
      #stock{
        height: 140px;
        width: 80%;
        border:1px solid white;
        margin-left: 32px;
      }
      .newsbar{
        height: 275px;
        margin-left: 257px;
        margin-right: 950px;
        border : 5px solid white;
        background-color: #ff3399;
      }
      .ottbar{
        height: 275px;
        border : 5px solid white;
        margin-left: 600px;
        margin-top: -275px;
        margin-right: 607px;
        background-color: #ff3399;
      }
      .stockbar{
        height: 275px;
        border : 5px solid white;
        margin-left: 943px;
        margin-top: -275px;
        margin-right: 264px;
        background-color: #ff3399;
      }
      #hotel{
        height: 140px;
        width: 80%;
        border:1px solid white;
        margin-left: 32px;
      }
      #ticket{
        height: 140px;
        width: 80%;
        border:1px solid white;
        margin-left: 32px;
      }
      #estate{
        height: 140px;
        width: 80%;
        border:1px solid white;
        margin-left: 32px;
      }
      .hotelbar{
        height: 275px;
        margin-left: 257px;
        margin-right: 950px;
        border : 5px solid white;
        background-color: #ff3399;
      }
      .ticketbar{
        height: 275px;
        border : 5px solid white;
        margin-left: 600px;
        margin-top: -275px;
        margin-right: 607px;
        background-color: #ff3399;
      }
      .estatebar{
        height: 275px;
        border : 5px solid white;
        margin-left: 943px;
        margin-top: -275px;
        margin-right: 264px;
        background-color: #ff3399;
      }
      #book{
        height: 140px;
        width: 80%;
        border:1px solid white;
        margin-left: 32px;
      }
      #bicycle{
        height: 140px;
        width: 80%;
        border:1px solid white;
        margin-left: 32px;
      }
      #study{
        height: 140px;
        width: 80%;
        border:1px solid white;
        margin-left: 32px;
      }
      .bookbar{
        height: 275px;
        margin-left: 257px;
        margin-right: 950px;
        border : 5px solid white;
        background-color: #ff3399;
      }
      .bicyclebar{
        height: 275px;
        border : 5px solid white;
        margin-left: 600px;
        margin-top: -275px;
        margin-right: 607px;
        background-color: #ff3399;
      }
      .studybar{
        height: 275px;
        border : 5px solid white;
        margin-left: 943px;
        margin-top: -275px;
        margin-right: 264px;
        background-color: #ff3399;
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
      .slideshow-container{
        margin-top: 50px;
        position: absolute;
        height: 350px;
        margin-left: 257px;
        width: 995px;
        border: 3px solid white;
        border-radius: 10px;
      }
      .mySlides{
        display: none;
      }
      .mySlides>img{
        vertical-align: middle;
        border-radius: 10px;
      }
      .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
      }
      .next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }
      .prev:hover, .next:hover {
        background-color: #ff3399;
      }
      .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }
      .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: white;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
      }
      .active, .dot:hover {
        background-color: #ff3399;
      }
      .fade{
          -webkit-animation-name: fade;
          -webkit-animation-duration: 1.57e+8s;
          animation-name: fade;
          animation-duration: 1.57e+8s;
        }
        @-webkit-keyframes fade {
          from {opacity: 1}
          to {opacity: 1}
        }
        @keyframes fade {
          from {opacity: 1}
          to {opacity: 1}
        }
        @media only screen and (max-width: 300px) {
          .prev, .next,.text {font-size: 11px}
        }
        .slideshow-container a{
          text-decoration: none;
        }
    </style>
  </head>
  <body>
    <header>
      <nav class="navbar">
        <ol>
          <li id="nothing"><i class="fas fa-align-justify" id="icon1" onclick="openFunction()"></i></li>
          <li><a href="home.php"><img src="image/translogo.png" alt="logo" height="42px" width="60px" id="logo"</a></li>
          <li id="serv"><a href="#services">Services</a></li>
          <li id="about"><a href="#abouts">About</a></li>
          <li id="contact"><a href="#footer">Contact Us</a></li>
          <li id="contact"><a href="search.html">Search</a></li>
        </ol>
      </nav>
      <div class="sidemenu" id="menu">
        <a href="account.php"><i class="fas fa-user-circle"> Account</i></a>
        <a href="#services"><i class="fas fa-sitemap"> Services</i></a>
        <a href="#abouts"><i class="fas fa-info-circle"> About Us</i></a>
        <a href="#contacts"><i class="far fa-address-card"> Contact Us</i></a>
        <a href="search.html"><i class="fas fa-search"> Search</i></a>
        <a href="signin.html" id="logout"><i class="fas fa-sign-out-alt" id="icon2"> Log Out</i></a>
        <a href="#" class="closebtn" onclick="closeFunction()">&times;</a>
      </div>
    </header>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <div class="numbertext">1 / 5</div>
        <a href="https://www.grabon.in/myntra-coupons/" target="_blank">
        <img src="image/myntraprom.jpg" width="100%" height="345px"></a>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">2 / 5</div>
        <a href="https://www.primevideo.com/">
        <img src="image/shah.jpg" width="100%" height="345px"></a>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">3 / 5</div>
        <img src="image/grofferprom.jpg" width="100%" height="345px">
      </div>
      <div class="mySlides fade">
        <div class="numbertext">4 / 5</div>
        <img src="image/olaprom.jpg" width="100%" height="345px">
      </div>
      <div class="mySlides fade">
        <div class="numbertext">5 / 5</div>
        <img src="image/swiggyprom.jpg" width="100%" height="350px">
      </div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
      <span class="dot" onclick="currentSlide(5)"></span>
    </div>
    <div class="services" id="services">
      <h3 id="heading">Services</h3> <br>
      <a href="shopping.html" id=shopa>
      <div class="shoppingbar">
        <img src="image/shopping.jpg" alt="shopping" id="shop">
        <p>Shop At Finest Wesbsites<br>Get Upto 50% Off</p>
        <input type="button" name="shop" value="SHOP">
      </div>
      </a>
      <a href="order.html">
      <div class="foodbar">
        <img src="image/food.jpg" alt="food" id="food">
        <p>Order Delicious Food And Avail Free Delivery On First 5 Orders</p>
        <input type="button" name="shop" value="ORDER">
      </div>
      </a>
      <a href="cab.html">
      <div class="cabbar">
        <img src="image/cab.jpg" alt="cab" id="cab">
        <p>Book Cabs At Reasonable Fare With No Extra Charges For 1 Month</p>
        <input type="button" name="shop" value="BOOK">
      </div>
      <br>
      </a>
      <a href="flight.html">
      <div class="flightbar">
        <img src="image/flight.jpg" alt="flight" id="flight">
        <p>Book Flight Tickets At Cheaper Price And Avail Discounts</p>
        <input type="button" name="shop" value="BOOK">
      </div>
      </a>
      <a href="car.html">
      <div class="carbar">
        <img src="image/car.jpg" alt="car" id="car">
        <p>Buy And Sell Cars At Your Desired Budget</p>
        <input type="button" name="shop" value="BOOK">
      </div>
      </a>
      <a href="grocery.html">
      <div class="grocerybar">
        <img src="image/grocery.jpg" alt="grocery" id="grocery">
        <p>Buy Groceries At Better Price And Inclusive Discounts</p>
        <input type="button" name="shop" value="ORDER">
      </div>
      </a>
      <br>
      <a href="hotel.html">
      <div class="hotelbar">
        <img src="image/hotel.jpg" alt="hotel" id="hotel">
        <p>Book Rooms At Better Discounts And At Desired Hotel</p>
        <input type="button" name="shop" value="BOOK">
      </div>
      </a>
      <a href="movie.html">
      <div class="ticketbar">
        <img src="image/ticket.jpg" alt="ticket" id="ticket">
        <p>Book Tickets For Your Entertainment Booze</p>
        <input type="button" name="shop" value="BOOK">
      </div>
      </a>
      <a href="estate.html">
      <div class="estatebar">
        <img src="image/estate.jpg" alt="estate" id="estate">
        <p>Buy And Sell Properties At Best Price And Easy Loans</p>
        <input type="button" name="shop" value="BUY">
      </div>
      </a>
      <br>
      <a href="news.html">
      <div class="newsbar">
        <img src="image/news.jpg" alt="news" id="news">
        <p>Read Daily News From Politics To Sports To Everything</p>
        <input type="button" name="shop" value="BOOK">
      </div>
      </a>
      <a href="ott.html">
      <div class="ottbar">
        <img src="image/ott.jpg" alt="ott" id="ott">
        <p>Watch Web Shows With Discounts In Subscription</p>
        <input type="button" name="shop" value="BOOK">
      </div>
      </a>
      <a href="#">
      <div class="stockbar">
        <img src="image/stock.jpg" alt="stock" id="stock">
        <p>Buy And Sell Your Favorite Stocks And Get Assured Assistance</p>
        <input type="button" name="shop" value="BUY">
      </div>
      </a>
      <br>
      <a href="book.html">
      <div class="bookbar">
        <img src="image/book.jpg" alt="book" id="book">
        <p>Buy Novel Or Textbook At Cheaper Price And Avail Ponts</p>
        <input type="button" name="shop" value="BUY">
      </div>
      </a>
      <a href="rentalbikscoo.html">
      <div class="bicyclebar">
        <img src="image/bicycle.jpg" alt="bicycle" id="bicycle">
        <p>Rent A Bike/Bicycle For Your Need And Avail Special Offers</p>
        <input type="button" name="shop" value="RENT">
      </div>
      </a>
      <a href="#">
      <div class="studybar">
        <img src="image/study.jpg" alt="study" id="study">
        <p>Apply For Your Favorite Online Course With Coupons</p>
        <input type="button" name="shop" value="APPLY">
      </div>
      </a>
    </div>
    <br> <br>
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
        <form  action="feedback.php" method="post">
          <table class="feedback">
            <tr>
              <td><label for="name">Name: </label></td>
              <td>  <input type="text" name="n"  placeholder="Enter Your Name"><br><br></td>
            </tr>
            <tr>
              <td><label for="phone">Phone No :</label></td>
              <td><input type="tel" name="p"  placeholder="Enter Your Phone No"><br><br></td>
            </tr>
            <tr>
              <td><label for="mail">Email-id: </label></td>
              <td><input type="mail" name="e" placeholder="Enter Your Email"><br><br></td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit" id="submit" name="respond" value="SUBMIT"></td>
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
      var slideIndex = 1;
      showSlides(slideIndex);
      function plusSlides(n) {
        showSlides(slideIndex += n);
      }
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>
