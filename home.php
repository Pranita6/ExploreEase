<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> 

    <!-- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <!-- custom css file link -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
<!--header section starts -->
<section class="header">
   <a href="home.php" class="logo">ExploreEase</a>
   <nav class="navbar">
    <a href="home.php">home</a>
    <a href="about.php">about</a>
    <a href="package.php">package</a>
    <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>
<!--header section ends -->

<!-- home section starts -->

<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide slide" style="background:url(https://cdn.pixabay.com/photo/2022/11/29/11/30/lake-7624330_1280.jpg)">
            <div class="content">
              <span>explore, discover, travel</span>
              <h3>travel around the world</h3>
              <a href="package.php" class="btn">discover more</a>
            </div>
          </div>

          <div class="swiper-slide slide" style="background:url(https://images.unsplash.com/photo-1577717903315-1691ae25ab3f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)">
            <div class="content">
              <span>explore, discover, travel</span>
              <h3>discover the new places</h3>
              <a href="package.php" class="btn">discover more</a>
            </div>
          </div>

          <div class="swiper-slide slide" style="background:url(https://cdn.pixabay.com/photo/2015/10/30/20/13/sunrise-1014712_1280.jpg)">
            <div class="content">
              <span>explore, discover, travel</span>
              <h3>make your tour worthwhile</h3>
              <a href="package.php" class="btn">discover more</a>
            </div>
          </div>
          
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
</section>

<!-- home section ends -->

<!-- services section starts -->

<section class="services">

  <h2 class="heading-title"> our services </h2>
  <div class="box-container">

    <div class="box">
      <img src="https://cdn-icons-png.flaticon.com/512/67/67139.png" alt="Adventure">
      <h3>adventure</h3>
    </div>

    <div class="box">
      <img src="https://static.thenounproject.com/png/4990851-200.png" alt="Tour Guide">
      <h3>tour guide</h3>
    </div>

    <div class="box">
      <img src="https://img.pikbest.com/element_our/20230419/bg/e9b4f3dee6d1a.png!w700wp" alt="Trekking">
      <h3>trekking</h3>
    </div>

    <div class="box">
      <img src="https://png.pngtree.com/png-vector/20191027/ourmid/pngtree-camp-fire-icon-camping-clip-art-isolated-on-white-background-png-image_1861978.jpg" alt="Camp Fire">
      <h3>camp fire</h3>
    </div>

    <div class="box">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBY6EFQZn86iVNUscWcc0eQ-AlXeTH4KJil7QCnLkJcQ&s" alt="Off Road">
      <h3>off road</h3>
    </div>

    <div class="box">
      <img src="https://png.pngtree.com/png-vector/20230420/ourmid/pngtree-camping-line-icon-vector-png-image_6719495.png" alt="Camping">
      <h3>camping</h3>
    </div>
  </div>

</section>

<!-- services section ends -->

<!--home about section starts -->

<section class="home-about">
<div class="image">
<img src="https://images.unsplash.com/photo-1503220317375-aaad61436b1b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="about us">
</div>

<div class="content">
  <h3>about us</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque rem modi voluptates quis necessitatibus est ipsa ratione ipsam, tempore quisquam doloremque hic dolorem. Ipsam minima pariatur possimus dolorum eos? Asperiores?</p>
  <a href="about.php" class="btn">read more</a>
</div>
</section>

<!--home about section ends -->

<!--home packages section starts-->

<section class="home-packages">
  <h1 class="heading-title"> our packages </h1>
  <div class="box-container">
    <div class="box">
      <div class="image">
        <img src="https://images.unsplash.com/photo-1564507592333-c60657eea523?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
      </div>
      <div class="content">
        <h3>adventure & tour</h3>
        <p></p>
        <a href="book.php" class="btn">book now</a>
      </div>
    </div>

    <div class="box">
      <div class="image">
        <img src="https://images.unsplash.com/photo-1604999333679-b86d54738315?q=80&w=1925&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
      </div>
      <div class="content">
        <h3>adventure & tour</h3>
        <p></p>
        <a href="book.php" class="btn">book now</a>
      </div>
    </div>

    <div class="box">
      <div class="image">
        <img src="https://images.unsplash.com/photo-1505832018823-50331d70d237?q=80&w=1816&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
      </div>
      <div class="content">
        <h3>adventure & tour</h3>
        <p></p>
        <a href="book.php" class="btn">book now</a>
      </div>
    </div>
  </div>

     <div class="load-more"><a href="package.php" class="btn">load more</a></div>

  </div>
</section>


<!--home packages section ends-->

<!--home offer section starts-->
   
<section class="home-offer">
  <div class="content">
    <h3>upto 50% off</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus rem odit aspernatur quidem explicabo </p>
    <a href="book.php" class="btn">book now</a>
  </div>
</section>










<!--home offer section ends-->



















<!-- footer section starts -->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
        </div>
        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i> about us</a>
            <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
        </div>
        <div class="box">
            <h3>Contact Info</h3>
            <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
            <a href="#"><i class="fas fa-phone"></i> +451-676-5490</a>
            <a href="#"><i class="fas fa-envelope"></i> pranita@gmail.com</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i> PUNE, India</a>
        </div>
        <div class="box">
            <h3>Follow Us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>
        </div>
    </div>
    <div class="credit">
        © 2024 Pranita Sarode | All rights reserved <span></span>
    </div>
</section>

<!-- footer section ends -->

<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper('.home-slider', {
      loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  });
</script>

</body>
</html>
