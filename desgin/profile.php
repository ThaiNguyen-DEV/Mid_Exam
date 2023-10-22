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
   <title>my profile</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>


<div class="heading">
   <h3>my profile</h3>
   <p><a href="home.php">home </a> <span> / profile</span></p>
</div>

<section class="user-details">

   <div class="user">
      <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
               $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
      ?>
      <img src="images/user-icon.png" alt="">
      <p><i class="fas fa-user"></i> <span><?= $fetch_profile['name']; ?></span></p>
      <p><i class="fas fa-phone"></i> <span><?= $fetch_profile['number']; ?></span></p>
      <p><i class="fas fa-envelope"></i> <span><?= $fetch_profile['email']; ?></span></p>
      <p class="address"><i class="fas fa-map-marker-alt"></i> <span><?= $fetch_profile['address']; ?></span></p>
      <!-- <a href="update_address.php" class="btn">update address</a> -->
      <a href="update_profile.php" class="btn">update profile</a>

      <?php
            }else{
         ?>
            <p class="name">please login first!</p>
            <a href="login.php" class="btn">login</a>
         <?php
          }
         ?>
   </div>

</section>



<?php include 'components/footer.php'; ?>


<!-- <div class="loader">
   <img src="images/loader.gif" alt="">
</div> -->

<script src="js/script.js"></script>

</body>
</html>