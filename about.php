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
   <title>Nosotros</title>
   <link rel="icon" href="./images/favicon.png">
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>

<?php include 'breadcrumb.html';?>
<script src="js/bread.js"></script>

<div class="heading">
   <h3>Sobre nosotros</h3>
   <p><a href="home.php">Inicio</a> <span> / Nosotros</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Por que elegirnos?</h3>
         <p>En FastBites, nos enorgullece ser tu elección número uno cuando se trata de comida rápida de calidad. Aquí tienes algunas razones por las cuales los clientes deben elegirnos:

Sabor inigualable: Nuestro equipo de chefs expertos se esfuerzan por crear platos deliciosos que te harán agua la boca. Utilizamos ingredientes frescos y de alta calidad para garantizar un sabor excepcional en cada bocado.

Variedad para todos los gustos.</p>
         <a href="menu.php" class="btn">Nuestro menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">3 pasos simples</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>Elegir orden</h3>
         <p>Elige el producto de nuestro menu que mas gustes.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>Entrega rapida</h3>
         <p>Nuestro repartidor se encargara de entregar su pedido hasta la puerta de su hogar.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>Disfrutar comida</h3>
         <p>Disfrute y califiquenos en nuestro sitio para poder llegar a otras personas.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->



<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>