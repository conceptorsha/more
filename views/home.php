<main class="l-main">
        <!-- Home 
        <section class="hero" id="hero">
            <div class="hero__img">
                <img src="image/mm.png.jpg" alt="Image 1" class="active">
                <img src="image/image.jpg" alt="Image 2">
            </div>
            <div class="hero__content">
                <h2 class="home__subtitle">Welcome</h2>
                <p class="home__text">Looking for a house to sell or to rent? Look no further. Welcome for more information.</p>
                <a href="https://more.co.ke/" class="hero__btn">More</a>
            </div>
        </section>-->

        <div class="slideshow-container">

<section class="mySlides fade">
  
  <img src="image/mm.png.jpg" style="width:100%">
 
</div>

<div class="mySlides fade">
  
  <img src="image/image.jpeg" style="width:100%">
  
</div>

<div class="mySlides fade">
 
  <img src="image/home.png" style="width:100%">
 
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}

</script>
<!--gallery-->
<section class="gallery-container">
  <div class="gallery-card">
    <img src="image/d4.png" alt="Image 1" width="600" height="400">
  </div>
  <div class="gallery-card">
    <img src="image/d2.png" alt="Image 2" width="600" height="400">
  </div>
  <div class="gallery-card">
    <img src="image/d5.png" alt="Image 3" width="600" height="400">
  </div>
  <div class="gallery-card">
    <img src="image/d1.png" alt="Image 4" width="600" height="400">
  </div>
  <div class="gallery-card">
    <img src="image/d.png" alt="Image 5" width="600" height="400">
  </div>
  <div class="gallery-card">
    <img src="image/paris.png" alt="Image 6" width="600" height="400">
  </div>
  <div class="gallery-card">
    <img src="image/nature.png" alt="Image 7" width="600" height="400">
  </div>
  <div class="gallery-card">
    <img src="image/fjord.png" alt="Image 8" width="600" height="400">
  </div>
  <div class="gallery-card">
    <img src="image/d1.png" alt="Image 9" width="600" height="400">
  </div>
  <div class="gallery-card">
    <img src="image/d1.png" alt="Image 10" width="600" height="400">
  </div>
</section>
<!--about-->
<section class="" id="about">
    <h2>about us</h2>
    <div class="about__container bd-grid">
    
        <div class="about__img ">
            <img src="image/mm.png.jpg" alt="">
        </div>
          <div class="about_content">
        <p class="about__text">At More Classifieds, we believe in revolutionizing the online advertisement landscape. Founded in August 2023, our mission is simple yet powerful - to remove the middleman between the buyer and seller, fostering direct and efficient connections.</p>
    </div>
</div>
</section>
<!--service-->
<section class="services" id="service">
    <h2>services</h2>
    
    <div class="services-container">
        <div class="services-card">
            <div class="services-card-title">
                Online advertisement 

            </div>
        </div>
        <div class="services-card">
            <div class="services-card-title">
                Customer support

            </div>
        </div>
        <div class="services-card">
            <div class="services-card-title">
                Online advertisement 

            </div>
        </div>
        <div class="services-card">
            <div class="services-card-title">
                SEO Optimisation

            </div>
        </div>
        <div class="services-card">
            <div class="services-card-title">
                Boost Your Listings

            </div>
        </div>
    </section>
    <!--contact-->
    <section class="contact" id="contact" >
        <h2 class="section-title">Contact</h2>
    
        <div class="contact__container bd-grid">
            <div class="contact__details">
        <p>Email:<a href="info@more.co.ke">info@more.co.ke</a> </p>
                <p>Phone: +254799656213</p>
                <p>Location:<a href="Nairobi, Kenya">NextGen Nairobi, Kenya</a></p>
            </div>
            <form action="." class="contact__form" method="post">
            <input type="hidden" name="action" value="contact-us">

                <input type="text" placeholder="Name" class="contact__input" name="name" id="name">
                <input type="mail" placeholder="Email" class="contact__input" name="email" id='email'>
                <textarea name="message" id="message" cols="0" rows="10" class="contact__input"></textarea>
                <input type="submit" value="Send" class="contact__button button">
                <div id="statusMessage"> 
                    <!-- <?php
                    if (! empty($message)) {
                        ?>
                        <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                    <?php
                    }
                    ?> -->
                </div>
            </form>
        </div>

    </section>
    
<!--login-->

<section class="container">
      <div class="box form-box">
      <h2 class="section-title">login</h2>

            <form action="" method="post">
            <input type="hidden" name="action" value="signin">
              <div class="field input">
               <!--<span class="icon"><ion-icon name="mail"></ion-icon></span>-->
               <label for="email">email</label>
                <input type="text"  name="email" id = "email" required>
               
              </div>
              <div class="field input">
               <!-- /*<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>*/>-->
               
               <label for="password">password</label>
                <input type="password"  name="password" id = "password" required>
               
              </div>
              <div clss="field">
              <input type="submit" class="btn" name="submit" value="login" required>
              </div>
              <div class="links">
                <p>don't have account?<a href="?action=signup">signup</a></p>
              </div>
               </form>
            </div>
</section> 
</main>
