<header  style="background-color:#000;"class="header">

   <div class="flex">

       <!-- <a style="font-family:bold;" href="#" class="logo">CAKE</a> -->
     <img style="height:45px;"src="image/logo.png" alt="">

      <nav class="navbar">
         <!-- <a  style="margin-left:70px;"href="admin.php">add products</a> -->
         <!-- <a href="products.php">view products</a> -->
         <a style="margin-left:390px;" href="products.php">Home</a>
         <a href="">About</a>
         <a href=""> Products</a>
         <a href="Registration.php">Register</a>
         <a href="login.php">Login</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a  style="font-size:30px; color:#fff; margin-left:100px;"href="cart.php" class="fas fa-shopping-cart"> <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>