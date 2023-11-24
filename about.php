<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/styles.css">
   

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> /</p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Step into a world where the words on the pages transform into vivid adventures. Our enchanting library is a place where your imagination takes flight, where characters become friends, and where every book is a gateway to new realms. Discover the magic of reading and let your journey begin here.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>"Manga Haven is a cozy nook for bibliophiles like me. The selection is fantastic, and the staff is always ready with excellent recommendations. It's my happy place for literary discoveries."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>David Beard</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>"I love the warm and inviting atmosphere at Manga Haven. It's the kind of place where you can spend hours browsing, and the selection of books is exceptional.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sarah Arandel</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>"As a parent, I appreciate the family-friendly vibe at Manga Haven. There's a great children's section, and my kids enjoy the storytelling events. It's a gem for quality family time."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Miller MilkStation</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>"Manga Haven feels like a haven for manga like me. The staff's knowledge is impressive, and I've discovered books I wouldn't have found elsewhere.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Romanny Pacquiao</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>"This bookshop is a gem. Manga Haven is not just about selling books; it's about creating a reading community. The staff is friendly, and the book club events are engaging."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Thomas Dtrain</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>"Manga Haven is the perfect retreat for avid readers. The selection is vast, and the ambiance is inviting. It's a place where you can easily lose yourself in a good book."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Park Minyang</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
         <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i></a>
         <a href="https://twitter.com/"> <i class="fab fa-twitter"></i></a>
         <a href="https://www.instagram.com/"> <i class="fab fa-instagram"></i></a>
         <a href="https://www.tiktok.com/"> <i class="fab fa-tiktok"></i></a>
         </div>
         <h3>Honobu Yonezawa</h3>
      <h2>Author of Hyouka</h2>
      
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
         <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i></a>
         <a href="https://twitter.com/"> <i class="fab fa-twitter"></i></a>
         <a href="https://www.instagram.com/"> <i class="fab fa-instagram"></i></a>
         <a href="https://www.tiktok.com/"> <i class="fab fa-tiktok"></i></a>
         </div>
         <h3>Reiji Miyajima</h3>
         <h2>Author of Rent a Girlfriend</h2>

      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
         <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i></a>
         <a href="https://twitter.com/"> <i class="fab fa-twitter"></i></a>
         <a href="https://www.instagram.com/"> <i class="fab fa-instagram"></i></a>
         <a href="https://www.tiktok.com/"> <i class="fab fa-tiktok"></i></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <div class="share">
         <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i></a>
         <a href="https://twitter.com/"> <i class="fab fa-twitter"></i></a>
         <a href="https://www.instagram.com/"> <i class="fab fa-instagram"></i></a>
         <a href="https://www.tiktok.com/"> <i class="fab fa-tiktok"></i></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
         <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i></a>
         <a href="https://twitter.com/"> <i class="fab fa-twitter"></i></a>
         <a href="https://www.instagram.com/"> <i class="fab fa-instagram"></i></a>
         <a href="https://www.tiktok.com/"> <i class="fab fa-tiktok"></i></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <div class="share">
         <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i></a>
         <a href="https://twitter.com/"> <i class="fab fa-twitter"></i></a>
         <a href="https://www.instagram.com/"> <i class="fab fa-instagram"></i></a>
         <a href="https://www.tiktok.com/"> <i class="fab fa-tiktok"></i></a>
         </div>
         <h3>john deo</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>