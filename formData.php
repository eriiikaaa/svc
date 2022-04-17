<?php

$db=new mysqli('localhost', 'root', '', 'students');
$name=$_POST['name']??'';
$email=$_POST['email']??'';
$phone=$_POST['phone']??'';
$grade=$_POST['grade']??'';
$faculty=$_POST['faculty']??'';
$sql="insert into std values('$name', '$email'','$phone','$grade','$faculty');";
$db->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SVI</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dosis&family=Josefin+Sans:wght@500&display=swap"
      rel="stylesheet"
    />
    <script src="script.js"></script>
  </head>
  <body>
    <div class="first">
      <header>
        <img
          src="./img/logo.png"
          alt="logo"
        />
        <nav class="navLinks">
          <ul>
            <li><a href="# ">Home</a></li>
            <li><a href="#blackBg ">About</a></li>
            <li><a href="#myform ">Contact</a></li>
          </ul>
        </nav>
      </header>

      <section class="heroRow">
        <div class="text">
          <p class="welcome">WELCOME TO</p>
          <h1 class="mainHeading">Siddhartha <span>Vanasthali</span> Campus</h1>
          <a href="">
            <button class="buttonOne">Explore With Us</button>
          </a>
        </div>
      </section>
    </div>

    <div class="blackBg" id="blackBg">
      <section class="second">
        <div class="texttwo">
          <h2 class="whoweare">WHO WE ARE</h2>
          <p class="aboutdes">
            This Institute is still known by its original name ‘Vanasthali’
            though its nomenclature and the whole look have changed, If not all,
            the first name Vanasthali occupies the second place even in the
            changed context by love and admiration.
          </p>
          <a href="">
            <button class="buttonTwo">Learn More</button>
          </a>
        </div>

        <div class="whoweareimg"></div>
      </section>

      <section class="second">
        <div class="mottoimg"></div>

        <div class="texttwo">
          <h2 class="whoweare">OUR MOTTO</h2>
          <p class="aboutdes">
            We strive to provide quality education, prioritizing creativity,
            discipline, dedication and devotion with the sole purpose of
            nurturing the full potential of our students. We provide a safe and
            happy environment, where our students will get to thrive much more.
          </p>
          <a href="">
            <button class="buttonTwo">Join Us</button>
          </a>
        </div>
      </section>

      <form onsubmit="validate()" id="myform" action="formData.php" method="post">
        <h2 class="subheading">CONTACT US</h2>
        <fieldset>
          <label for="name">Name:</label>
          <input
            type="text"
            id="name"
            name="name"
            placeholder="Enter your name"
          />
          <label for="email">Email:</label>
          <input
            type="text"
            id="email"
            name="email"
            placeholder="Enter your email"
          />
          <label for="phone">Phone No:</label>
          <input
            type="text"
            id="phone"
            name="phone"
            placeholder="Enter your phone no"
          />
          <label for="grade">Grade:</label>
          <input
            type="text"
            id="grade"
            name="grade"
            placeholder="Enter your last grade"
          />
          <label for="faculty">Faculty:</label>
          <input
            type="text"
            id="faculty"
            name="faculty"
            placeholder="Enter your faculty"
          />
        </fieldset>
        <input type="submit" />
        <p id="result"></p>
      </form>

      <div class="line"></div>
    </div>

    <footer>
      <footer>
        <div class="footerContent">
          <div class="footerMenu">
            <ul>
              <li><a href="">Home</a></li>
              <li><a href="">About</a></li>
              <li><a href="">Contact</a></li>
            </ul>
          </div>

          <div class="logo">
            <a href="">
              <img
                src="./img/logo.png"
                alt="tdlogo"
              />
            </a>
          </div>
          <div class="contactInfo">
            <p class="emailPhone">
              <span>Email:</span> svi@edu.np <br />
              <span>Phone no.:</span> 1234567
            </p>
            <div class="socialIcons">
              <img
                src="./img/twitter.png"
                alt="twitter"
              />
              <img
                src="./img/insta.png"
                alt="insta"
              />
              <img
                src="./img/linkedin.png"
                alt="linkedin"
              />
              <img
                src="./img/fb.png"
                alt="fb"
              />
            </div>
          </div>
        </div>

        <div class="copyright">© SVC 2022</div>
      </footer>
    </footer>
  </body>
</html>

