<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../myProject/CSS/style.css" />
    <title>Genesis Maternal| HealthCare</title>
  </head>
  <body>
    <header>
      <nav class="section__container nav__container">
        <div class="nav__logo">GenesisMaternal<span>HealthCare</span></div>
        <ul class="nav__links">
          <li class="link"><a href="home.html">Home</a></li>
          <li class="link"><a href="about.html">About Us</a></li>
          <li class="link"><a href="service.html">Services</a></li>
          <li class="link"><a href="resource.html">Resources</a></li>
          
        </ul>
        <button class="btn">Contact Us</button>
      </nav>
      <div class="section__container header__container">
        <div class="header__content">
          <h1>Empowering mothers, nurturing babies, and fostering health</h1>
          <p>
            Welcome, we are dedicated to providing comprehensive and compassionate care for expectant mothers and their babies. 
             Our range of services is designed to support and guide you through this
              miraculous journey of pregnancy and motherhood.
          </p>
          <a href="service.html" class="btn">See Services</a>
        </div>
        <div class="header__form">
          <form>
            <h4>Join Our Community</h4>
            <input type="text" placeholder="First Name" />
            <input type="text" placeholder="Last Name" />
            <input type="text" placeholder="Address" />
            <input type="text" placeholder="Phone No." />
            <button class="btn form__btn">Join Now!</button>
          </form>
        </div>
      </div>
    </header>

    <section class="section__container service__container">
      <div class="service__header">
        <div class="service__header__content">
          <h2 class="section__header">Our Services</h2>
          </div>
       </div>

      <div class="service__grid">
        <div class="service__card">
          <span><i class=></i></span>
          <h4>Getting Pregnant</h4>
          <p>
            Preparing to conceive involves understanding key factors to support a healthy pregnancy from the start.
          </p>
          <a href="#">Learn More</a>
        </div>
        <div class="service__card">
          <span><i class=></i></span>
          <h4>Pregnancy</h4>
          <p>
            Congratulations on this exciting new chapter! Pregnancy is a transformative time - from the weekly changes you'll experience to getting ready for childbirth and beyond. 
            We've got the guidance you need to navigate this journey with confidence.
          </p>
          </p>
          <a href="#">Learn More</a>
        </div>
        <div class="service__card">
          <span><i class=></i></span>
          <h4>Prenatal Care</h4>
          <p>
            Comprehensive prenatal care, personalized for you and your baby. Expert guidance and support every step of the way.
          </p>
          </p>
          <a href="#">Learn More</a>
        </div>
        <div class="service__card">
          <span><i class></i></span>
          <h4>Postpartum Support</h4>
          <p>
            Navigate the early days of motherhood with the support and guidance you need. 
            Take care of yourself while caring for your newborn.
          </p>
          <a href="#">Learn More</a>
        </div>
        <div class="service__card">
          <span><i class></i></span>
          <h4>Newborn & Baby</h4>
          <p>
            Congratulations on your new arrival! Feeling a bit overwhelmed? Don't worry, 
            GenesisMaternal is here to support you every step of the way. Our comprehensive resources for newborns and babies will assist you as you navigate this thrilling chapter in your journey as a parent.
          </p>
          <a href="#">Learn More</a>
        </div>
        <div class="service__card">
          <span><i class=></i></span>
          <h4>Community </h4>
          <p>
            Join our community for baby name inspiration, due date conversations, 
            local parent gatherings, and additional support and information!
          </p>
          <a href="#">Learn More</a>
        </div>
        
      </div>
    </section>
    <section class="section__container about__container">
      <div class="about__content">
        <h2 class="section__header">About Us</h2>
        <p>
          Welcome to Genesis Maternal Health Care, your trusted destination for comprehensive maternal healthcare information and support.
           We are dedicated to promoting maternal wellness and providing valuable resources to empower you throughout your pregnancy journey.
        </p>
        <p>
          Explore our extensive collection of expertly crafted articles and guides covering a wide range of maternal health topics.
           From understanding prenatal care to preparing for childbirth and postpartum recovery, our content is designed to educate, inspire, and support you every step of the way.
        </p>
        <p>
          Discover practical tips and advice to optimize your physical and emotional well-being during pregnancy and beyond. 
          We believe that informed choices and proactive care can lead to healthier outcomes for both you and your baby, and we're here to guide you on your path to a positive maternal experience.
        </p>
      </div>
      <div class="about__image">
        <img src="../myProject/RESOURCES/preg.jpg" alt="about" />
      </div>
    </section>

    <section class="section__container why__container">
      <div class="why__image">
        <img src="../myProject/RESOURCES/pgicon.png" alt="why choose us" />
      </div>
      <div class="why__content">
        <h2 class="section__header">Why Choose Us</h2>
        
        <div class="why__grid">
          <span><i class=></i></span>
          <div>
            <h4>Compassion</h4>
            <p>
              Approaching the pregnant experience with sensitivity, understanding and a non-judgmental attitude.
            </p>
          </div>
          <span><i class=></i></span>
          <div>
            <h4>Holistic Approach</h4>
            <p>
              Addressing not just the physical aspects of pregnancy, but also the emotional, mental, and social needs of the mother.
            </p>
          </div>
          <span><i class=></i></span>
          <div>
            <h4>Personalized Support</h4>
            <p>
              Providing tailored information and guidance that accounts for each woman's unique circumstances and preferences.
            </p>
          </div>
          <span><i class=></i></span>
          <div>
            <h4>Empowerment</h4>
            <p>
              Equipping expecting mothers with the knowledge and resources to feel confident and in control throughout their pregnancy.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container doctors__container">
      <div class="team__header">
        <div class="team__header__content">
          <h2 class="section__header">Our Team</h2>
        
        </div>
        <div class="team__nav">
          <span><i class="ri-arrow-left-line"></i></span>
          <span><i class="ri-arrow-right-line"></i></span>
        </div>
      </div>
      <div class="team__grid">
        <div class="team__card">
          <div class="team__card__image">
            <img src="../myProject/RESOURCES/rahil.jpeg" alt="rahil" />
            <div class="team__socials">
              <span><i class="ri-instagram-line"></i></span>
              <span><i class="ri-facebook-fill"></i></span>
              <span><i class="ri-heart-fill"></i></span>
              <span><i class="ri-twitter-fill"></i></span>
            </div>
          </div>
          <h4>Rachael Kamau</h4>
          <p>Founder</p>
        </div>
        <div class="team__card">
          <div class="team__card__image">
            <img src="../myProject/RESOURCES/doctor-2.jpg" alt="doctor" />
            <div class="team__socials">
              <span><i class="ri-instagram-line"></i></span>
              <span><i class="ri-facebook-fill"></i></span>
              <span><i class="ri-heart-fill"></i></span>
              <span><i class="ri-twitter-fill"></i></span>
            </div>
          </div>
          <h4>James Anderson</h4>
          <p>Nurse</p>
        </div>
        <div class="team__card">
          <div class="team__card__image">
            <img src="../myProject/RESOURCES/kaycee.jpg" alt="kaycee" />
            <div class="team__socials">
              <span><i class="ri-instagram-line"></i></span>
              <span><i class="ri-facebook-fill"></i></span>
              <span><i class="ri-heart-fill"></i></span>
              <span><i class="ri-twitter-fill"></i></span>
            </div>
          </div>
          <h4>Mercy Wanjiru</h4>
          <p>Dietitian & Nutritionist</p>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__col">
          <h3>GenesisMaternal<span>HealthCare</span></h3>
          <p>
            We're honored to support you on your pregnancy journey. Welcome aboard!"</p>

        </div>
        <div class="footer__col">
          <h4>About Us</h4>
          <p>Home</p>
          <p>About Us</p>
          <p>Our Blog</p>
          
        </div>
        <div class="footer__col">
          <h4>Services</h4>
          <p>Testimonials</p>
          <p>FAQ's</p>
          
        </div>
        <div class="footer__col">
          <h4>Contact Us</h4>
          <p>
            <i class="ri-map-pin-2-fill"></i> 13356, Nairobi, Kenya
          </p>
          <p><i class="ri-mail-fill"></i> support@care.com</p>
          <p><i class="ri-phone-fill"></i> (+254) 718 959 518</p>
        </div>
      </div>
      <div class="footer__bar">
        <div class="footer__bar__content">
          <p>Copyright © 2024 Genesis Maternal. All rights reserved.</p>
          <div class="footer__socials">
            <span><i class="ri-instagram-line"></i></span>
            <span><i class="ri-facebook-fill"></i></span>
            <span><i class="ri-heart-fill"></i></span>
            <span><i class="ri-twitter-fill"></i></span>
          </div>
        </div>

        <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
      </p>
      <a href="logout.php">Logout</a>
    </div>
</body>
</html>
     
       
       
       
       
       
       
       