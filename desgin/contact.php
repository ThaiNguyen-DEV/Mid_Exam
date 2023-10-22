<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

<<<<<<< HEAD
?>
=======
// include 'components/add_cart.php';

?>

>>>>>>> 515c681f20dc338536567ffe8a6d525919b955e5
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="/desgin/css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>
<<<<<<< HEAD
=======

>>>>>>> 515c681f20dc338536567ffe8a6d525919b955e5

<div class="heading">
   <h3>contact us</h3>
   <p><a href="home.php">home </a> <span> / contact</span></p>
</div>

<section class="contact">

   <div class="row">

      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>

      <form action="" method="post">
         <h3>tell us something!</h3>
         <input type="text" name="name" required placeholder="enter your name" maxlength="50" class="box">
         <input type="number" name="number" required placeholder="enter your number" max="9999999999" min="0" class="box" onkeypress="if(this.value.length == 10) return false;">
         <input type="email" name="email" required placeholder="enter your email" maxlength="50" class="box">
         <textarea name="msg" placeholder="enter your message" required class="box" cols="30" rows="10" maxlength="500"></textarea>
         <input type="submit" value="send message" class="btn" name="send">
      </form>

   </div>

</section>




<?php include 'components/footer.php'; ?>


<!-- <div class="loader">
   <img src="images/loader.gif" alt="">
</div> -->

<script src="js/script.js"></script>

</body>
</html>