<?php

include 'new/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{ 
   $user_id = '';
};

include 'new/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

   <link rel="stylesheet" href="ds.css">

</head>
<body>
   
<?php include 'new/user_header.php'; ?>

<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/r.png" alt="">
         </div>
         <div class="content">
            <span>upto 30% off</span>
            <h3>latest car</h3>
            <a href="shop.php" class="btn"> <b>Get Offer</b></a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/w1.png" alt="">
         </div>
         <div class="content">
            <span>upto 50% off</span>
            <h3>latest item</h3>
            <a href="shop.php" class="btn"><b>Get NOW</b></a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/bike.png" alt="">
         </div>
         <div class="content">
            <span>upto 50% off</span>
            <h3>latest <b>Cafa Racer</b></h3>
            <a href="shop.php" class="btn"><b>Hurry up</b></a>
         </div>
      </div>

   </div>

</section>

</div>

<section class="category">

   <h1 class="heading">shop by category</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="category.php?category=laptop" class="swiper-slide slide">
      <img src="images/computer.png" alt="">
      <h3>laptop</h3>
   </a>

   <a href="category.php?category=tv" class="swiper-slide slide">
      <img src="images/refrigeratior.png" alt="">
      <h3>Refrigeratior</h3>
   </a>

   <a href="category.php?category=camera" class="swiper-slide slide">
      <img src="images/c1.png " alt="">
      <h3>camera</h3>
   </a>

   <a href="category.php?category=mouse" class="swiper-slide slide">
      <img src="images/m1.png" alt="">
      <h3>mouse</h3>
   </a>

   <a href="category.php?category=watch" class="swiper-slide slide">
      <img src="images/w1.png" alt="">
      <h3>watch</h3>
   </a>

   <a href="category.php?category=Gadget" class="swiper-slide slide">
      <img src="images/Ged1.png" alt="">
      <h3>Gadgets</h3>
   </a>

   <a href="category.php?category=phone" class="swiper-slide slide">
      <img src="images/p1.png" alt="">
      <h3>smartphone</h3>
   </a>

   <a href="category.php?category=robot" class="swiper-slide slide">
      <img src="images/rob1.png" alt="">
      <h3>robot</h3>
   </a>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<section class="home-products">

   <h1 class="heading">latest products</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'new/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween:10,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>