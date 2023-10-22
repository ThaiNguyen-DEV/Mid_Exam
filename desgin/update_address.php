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
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>


<section class="form-container">

   <form action="" method="post">
      <h3>your address</h3>
      <input type="text" maxlength="50" placeholder="flat no. and building name" required class="box" name="flat">
      <input type="text" maxlength="50" placeholder="area name" required class="box" name="street">
      <input type="text" maxlength="50" placeholder="city name" required class="box" name="city">
      <input type="text" maxlength="50" placeholder="state name" required class="box" name="state">
      <input type="text" maxlength="50" placeholder="country name" required class="box" name="country">
      <input type="number" min="0" max="999999" placeholder="pin code" required class="box" name="pin_code" onkeypress="if(this.value.length == 6) return false;">
      <input type="submit" value="save address" name="submit" class="btn">
   </form>

</section>


<?php include 'components/footer.php'; ?>


<!-- <div class="loader">
   <img src="images/loader.gif" alt="">
</div> -->

<script src="js/script.js"></script>

</body>
</html>