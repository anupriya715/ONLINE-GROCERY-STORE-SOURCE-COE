<?php

@include 'config.php';

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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>Lovely, delicious products, are provided by us.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>We provide with the fresh vegetables and meat for reasonable costs</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Excellent service as always, on prompt delivery. One of the item was wrongly delivered but they exchanged it quickly without any hassle. Would be great if they can add more brand of Chapatti flour like elephant gold. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Anu</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Great service and excellent delivery. Not one item was missing and if there was a substitute then that was intimated via email. My only concern is the veggies were not fresh. The okra was all turning black and the fenugreek leaves were turning yellow and wilted. Veggies need to be fresh please and then ill surely add the extra 5th star</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ganga</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Overall great service. Takes a little longer than expected for delivery to be dispatched after order so may be you can work on your turn around times. Care given towards frozen products but may be a better way to dispatch frozen things can be thought off.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alekya</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>We were very pleased with the service, received what we ordered with in the time frame , packing was well organised. The vegetables were fresh except Ginger which had gone soft.
Your website and online order system is good.

please keep this up/</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Bhavani</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Very quick delivery and green veggies was really fresh and the frozen and chiller items were nicely packed with ice bag packaging.
Thanks and will order definitely in future and already started recommending others.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nag</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>It was my first experience with this company.. I found them extremely helpful and very prompt in replying the queries... normal grocery delivery was on time and there was an issue with one product which they replied to me instantly..
I am happy and will recommend them..</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Tinku</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>