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
   <title>update profile</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>


<section class="form-container">

   <form action="" method="POST">
      <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
               $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
      ?>
      <h3>update profile</h3>
      <input type="text" required maxlength="20" name="name" placeholder="enter your name" class="box" oninput="this.value = this.value.replace(/\s/g, '')" value="<?= $fetch_profile['name']; ?>">
      <input type="email" required maxlength="50" name="email" placeholder="enter your email" class="box" oninput="this.value = this.value.replace(/\s/g, '')" value="<?= $fetch_profile['email']; ?>">
      <input type="numner" min="0" max="9999999999" onkeypress="if(this.value.length == 10) return false;" placeholder="enter your number" required class="box" name="number" value="<?= $fetch_profile['number']; ?>">
      <input type="text" required maxlength="20" name="place" placeholder="enter your address" class="box" oninput="this.value = this.value.replace(/\s/g, '')" value="<?= $fetch_profile['address']; ?>">
      <input type="password" maxlength="20" name="old_pass" placeholder="enter your old password" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" maxlength="20" name="new_pass" placeholder="enter your new password" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" maxlength="20" name="confirm_pass" placeholder="confirm your new password" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="update now" class="btn" name="submit">
      <?php
            }else{
         ?>
            <p class="name">please login first!</p>
            <a href="login.php" class="btn">login</a>
         <?php
          }
         ?>
   </form>

</section>












<?php include 'components/footer.php'; ?>


<!-- <div class="loader">
   <img src="images/loader.gif" alt="">
</div> -->

<script src="js/script.js"></script>

</body>
</html>