<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
    ?>
    <script>
    alert('product already added to cart');
    </script>
    <?php
      // $message[] = 'product already added to cart';
    


   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
    ?>
      <script>
      alert('product added to cart succesfully');
      </script>
      <?php
      
    //    $message[] = 'product added to cart succesfully';
    


   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="styleee.css">
</head>
<body>

   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<!-- 

<div  class="container">

<section  class="products">
   <h1 class="heading">latest products</h1>

   <div class="box-container">
   

      <?php
      
    //   $select_products = mysqli_query($conn, "SELECT * FROM `products`");
    //   if(mysqli_num_rows($select_products) > 0){
    //      while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div style="height:470px;"class="box">
            <img  style="width:270px; height:240px;"src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
            <h3><?php echo $fetch_product['name']; ?></h3>
            <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
            <input  type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="submit" class="btn" value="add to cart" name="add_to_cart">
         </div>
      </form>

      <?php
    //      };
    //   };
      ?>

   </div>

</section>

</div> -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>




<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <section class="home" id="home">
      
        <div class="content">
            <h3>fresh Cake in<br> the morning</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nostrum facilis ad 
                sapiente autem iste.</p>
                <a href="" class="btn">get your now</a>
        </div>
    </section>

<section class="about" id="about">

    <h1 class="heading"><span>about</span>us</h1>
<div class="row">
    <div class="image">
        <img src="image/o5.png" alt="">
    </div>
    <div class="content">
        <h3>what makes our Cake special?</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero magnam iusto suscipit reiciendis quam tempora, perspiciatis ducimus. Harum debitis nostrum, temporibus eum dolorum adipisci? Numquam dolore esse nisi. Ut, quidem!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, minima! Nemo quae, ipsum et voluptatum praesentium repellendus officia enim dolorem?</p>
         <a style="background-color:#F0F8FF;" href="" class="btn">Learn more</a>
    </div>
</div>
</section>


<?php include 'header.php'; ?>

 <div  class="container"> 

<section  class="products">
   <h1 class="heading">latest products</h1>

   <div class="box-container">
   

      <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div style="height:330px;"class="box">
            <img  style="width:170px; height:140px;"src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
            <h3 style="color:#fff;"><?php echo $fetch_product['name']; ?></h3>
            <div style="color:#fff;" class="price">$<?php echo $fetch_product['price']; ?>/-</div>
            <input  type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input style="background-color:#F0F8FF; " type="submit" class="btn" value="add to cart" name="add_to_cart">
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>




<section class="products" id="products">

    <h1 class="heading"> our <span>products</span></h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="" class="fas fa-shopping-cart"></a>
                <a href="" class="fas fa-heart"></a>
                <a href="" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/o2.png" alt="">
            </div>
            <div class="content">
                <h3>fresh Cake</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$15.99 <span>20.99</span></div>
            </div>
        </div>
             
        <div class="box">
            <div class="icons">
                <a href="" class="fas fa-shopping-cart"></a>
                <a href="" class="fas fa-heart"></a>
                <a href="" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/o3.png" alt="">
            </div>
            <div class="content">
                <h3>fresh Cake</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$13.99 <span>20.99</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="" class="fas fa-shopping-cart"></a>
                <a href="" class="fas fa-heart"></a>
                <a href="" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/o4.png" alt="">
            </div>
            <div class="content">
                <h3>fresh Cake</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$16.99 <span>20.99</span></div>
            </div>
        </div>

    </div>
</section>


<section class="review" id="review">
    <h1 class="heading"> customer's <span>review</span></h1>
    <div class="box-container">
        <div class="box">
            <img src="" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi reiciendis aut, soluta libero provident delectus culpa, incidunt molestias suscipit consequatur error doloremque totam quis facere quos.</p>
                 <img src="image/R V.jpg"  class="user" alt="">
                 <h3>john deo</h3>
                 <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>

        </div>

        <div class="box">
            <img src="" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero debitis eaque eveniet veritatis, consequatur accusamus minima quis nemo quas dolorum ex sint, ad cumque, error fugiat?</p>
                 <img src="image/Rv1.jpg"  class="user" alt="">
                 <h3>john deo</h3>
                 <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>

        </div>

        <div class="box">
            <img src="" alt="" class="quote">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Tempora sunt temporibus culpa esse animi nostrum, facilis praesentium quasi quidem cum obcaecati incidunt,
                 odit, officiis rem consequatur.</p>
                 <img src="image/Rv2.jpg"  class="user" alt="">
                 <h3>john deo</h3>
                 <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
        </div>
    </div>

</section>

<section class="contact" id="contact">
    <h1 class="heading"><span>contact</span> us</h1>
    <div class="row">
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58350.216594804406!2d72.363435!3d23.929000750000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395cf4fdb8907cdb%3A0xb588efce07ef80e5!2sSiddhpur%2C%20Gujarat%20384151!5e0!3m2!1sen!2sin!4v1724047578688!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
        <form action="">
            <h3>get in touch</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="name">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="number">
            </div>
            <input  style="background-color:#F0F8FF;" type="submit" value="contact now" class="btn">
        </form>
    </div>
</section>

<section class="blogs" id="blogs">
    <h1 class="heading"> our <span>blogs</span></h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="image/c1.png" alt="">
            </div>
            <div class="content">
                <a href="" class="title"> tasty and refreshing Cake</a>
                <span>by admin / 21st may, 2021</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, facilis.</p>
                <a style="background-color:#F0F8FF;" href="" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/c11.png" alt="">
            </div>
            <div class="content">
                <a href="" class="title"> tasty and refreshing Cake</a>
                <span>by admin / 21st may, 2021</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, facilis.</p>
                <a style="background-color:#F0F8FF;" href="" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/c10.png" alt="">
            </div>
            <div class="content">
                <a href="" class="title"> tasty and refreshing Cake</a>
                <span>by admin / 21st may, 2021</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, facilis.</p>
                <a style="background-color:#F0F8FF; "href="" class="btn">read more</a>
            </div>
        </div>

    </div>
</section>

<section class="footer">
    <div class="share">
        <a href="" class="fab fa-facebook-f"></a>
        <a href="" class="fab fa-twitter"></a>
        <a href="" class="fab fa-instagram"></a>
        <a href="" class="fab fa-linkedin"></a>
        <a href="" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Menu</a>
        <a href="#">Products</a>
        <a href="#">Review</a>
        <a href="#">Contact</a>
        <a href="#">Blogs</a>
    </div>
    <div class="credit">created by <span>mr. web designer</span></div>
</section>


    

    <script src="script.js"></script>
</body>
</html>