<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

// include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about us</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home </a> <span> / about</span></p>
</div>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis non odit nihil, doloremque sunt aut placeat culpa. Adipisci minima, neque necessitatibus incidunt nemo eveniet mollitia quis facere vel consectetur culpa?</p>
         <a href="menu.php" class="btn">our menu</a>
      </div>

   </div>

</section>

<section class="steps">

   <h1 class="title">3 simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>select food</h3>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, hic.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>30 minutes delivery</h3>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, hic.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy food!</h3>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, hic.</p>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">customer's reviews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo exercitationem ullam esse quia iusto in.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo exercitationem ullam esse quia iusto in.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo exercitationem ullam esse quia iusto in.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo exercitationem ullam esse quia iusto in.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo exercitationem ullam esse quia iusto in.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo exercitationem ullam esse quia iusto in.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>


<?php include 'components/footer.php'; ?>


<!-- <div class="loader">
   <img src="images/loader.gif" alt="">
</div> -->

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor:true,
            spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
   },
   breakpoints: {
      550: {
        slidesPerView: 1,
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