<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>my cart</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<header class="header">

   <section class="flex">

      <a href="home.php" class="logo">yum-yum 😋</a>

      <nav class="navbar">
         <a href="home.php">home</a>
         <a href="about.php">about</a>
         <a href="menu.php">menu</a>
         <a href="orders.php">orders</a>
         <a href="contact.php">contact</a>
      </nav>

      <div class="icons">
         <a href="search.php"><i class="fas fa-search"></i></a>
         <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(3)</span></a>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>

      <div class="profile">
         <p class="name">shaikh anas</p>
         <div class="flex">
            <a href="profile.php" class="btn">profile</a>
            <a href="#" class="delete-btn">logout</a>
         </div>
         <p class="account"><a href="login.php">login</a> or <a href="register.php">register</a></p>
      </div>

   </section>

</header>

<div class="heading">
   <h3>shopping cart</h3>
   <p><a href="home.php">home </a> <span> / cart</span></p>
</div>

<section class="products">

   <h1 class="title">your cart</h1>

   <div class="cart-total">
      <p>grand total : <span>$9/-</span></p>
      <a href="checkout.php" class="btn">checkout orders</a>
      </div>
   </div>

   <div class="box-container">

      <div class="box">
         <a href="quick_view.php" class="fas fa-eye"></a>
         <button class="fas fa-times" type="submit" name="delete" onclick="return confirm('delete this item?')"></button>
         <img src="uploaded_img/pizza-1.png" alt="">
         <div class="name">delicious pizza 01</div>
         <div class="flex">
            <div class="price"><span>$</span>3</div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
            <button type="submit" class="fas fa-edit"></button>
         </div>
         <div class="sub-total">sub total : <span>$3</span></div>
      </div>

      <div class="box">
         <a href="quick_view.php" class="fas fa-eye"></a>
         <button class="fas fa-times" type="submit" name="delete" onclick="return confirm('delete this item?')"></button>
         <img src="uploaded_img/dish-2.png" alt="">
         <div class="name">main dish 02</div>
         <div class="flex">
            <div class="price"><span>$</span>3</div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
            <button type="submit" class="fas fa-edit"></button>
         </div>
         <div class="sub-total">sub total : <span>$3</span></div>
      </div>

      <div class="box">
         <a href="quick_view.php" class="fas fa-eye"></a>
         <button class="fas fa-times" type="submit" name="delete" onclick="return confirm('delete this item?')"></button>
         <img src="uploaded_img/dessert-1.png" alt="">
         <div class="name">delicious dessert 01</div>
         <div class="flex">
            <div class="price"><span>$</span>3</div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
            <button type="submit" class="fas fa-edit"></button>
         </div>
         <div class="sub-total">sub total : <span>$3</span></div>
      </div>

   </div>

   <div class="more-btn">
      <a href="#" class="delete-btn" onclick="return confirm('delete all from cart?');">delete all</a>
   </div>

</section>


<?php include 'components/footer.php'; ?>


<!-- <div class="loader">
   <img src="images/loader.gif" alt="">
</div> -->

<script src="js/script.js"></script>

</body>
</html>