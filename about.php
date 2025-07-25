<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/My project.png" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>At Izzaf Delights, we specialize in providing a delightful array of beverages that are sure to satisfy your cravings. Our shop offers a diverse selection of drinks, ranging from refreshing sodas to aromatic coffees, soothing teas, invigorating energy drinks, and tantalizing juices. With a focus on quality and freshness, we source our beverages from trusted suppliers, ensuring that every sip you take is a truly enjoyable experience. Our friendly team is always ready to offer expert recommendations and assist you in finding your perfect drink. Conveniently located and committed to sustainability, we aim to create a welcoming environment where you can indulge in your favorite beverages guilt-free. Choose Izzaf Delights for an unforgettable journey of taste and treat yourself to the finest drink selections around.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>











<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>