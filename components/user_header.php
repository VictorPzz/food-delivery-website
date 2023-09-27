<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <section class="flex">
   <img src="images/fav.png" alt="" width="70" height="70"> 
      <a href="home.php" class="logo">FAST BITES </a>
      <nav class="navbar">
         <a href="home.php">Inicio</a>
         <a href="about.php">Nosotros</a>
         <a href="menu.php">Menu</a>
         <a href="orders.php">Pedidos</a>
         <a href="contact.php">Contacto</a>
         <a href="msitio.html">Mapa de sitio</a>
      </nav>

      <div class="icons">
         <?php
            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_items = $count_cart_items->rowCount();
         ?>
         <a href="search.php"><i class="fas fa-search"></i></a>
         <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?= $total_cart_items; ?>)</span></a>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
               $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p class="name"><?= $fetch_profile['name']; ?></p>
         <div class="flex">
            <a href="profile.php" class="btn">Perfil</a>
            <a href="components/user_logout.php" onclick="return confirm('cerrar sesión en esta pagian?');" class="delete-btn">Cerrar sesion</a>
            <div class="flex">
               <a href="admin/admin_login.php" class="btn">admin</a>
            </div>
         </div>
         <p class="account">
            <a href="login.php">Iniciar sesion</a> o
            <a href="register.php">Registrarse</a>
         </p> 
         <?php
            }else{
         ?>
            <p class="name">¡Por favor ingresa primero!</p>
            <a href="login.php" class="btn">Acceder como usuario</a>
            <a href="admin/admin_login.php" class="btn">Acceder como administrador</a>


         <?php
          }
         ?>
      </div>

   </section>

</header>

