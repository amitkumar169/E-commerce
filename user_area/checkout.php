<!--coonnet files-->
<?php
    include('../includes/connect.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website Checkout Page</title>
    <!---bootstrap css link--->
    <link rel="stylesheet" href="style.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!--font awesome link--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <style>
    .logo{
      width: 7%;
      height: 7%;
      overflow-x: hidden;
    }
   </style>
      </head>
    <body>
        <!--navbar-->
        <div class="container-fluid p-0">

        <nav class="navbar navbar-expand-lg  bg-info">
        <div class="container-fluid">
        <img src="../images/logo.png" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user_registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <form class="d-flex" role="search" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" 
        name="search_data" aria-label="Search">
         <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
      </form>
    </div>
  </div>
</nav>

    </div>
   
    <!--second child-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">

    <ul class="navbar-nav me-auto">
        
        <!--logout session-->
        <?php
        if(!isset($_SESSION['username'])){
          echo "<li class='nav-item'>
        <a class='nav-link text-light' href='#'>Welcome Guest</a>
      </li>";
         }else{
           echo " <li class='nav-item'>
           <a class='nav-link text-light' href='#'>Welcome ".$_SESSION['username']."</a>
         </li>";
         }
      if(!isset($_SESSION['username'])){
       echo " <li class='nav-item'>
          <a class='nav-link text-light' href='./user_login.php'>Login</a>
        </li>";
      }else{
        echo " <li class='nav-item'>
        <a class='nav-link text-light' href='logout.php'>Logout</a>
      </li>";
      }

        ?>

    </ul>
    </nav>

    <!--third child-->

    <div class="bg-light">
        <h3 class="text-center p-1">Hidden Store</h3>
        <p class="text-center">Communication is at th heart of e-commerce and community</p>
    </div>

     <!--fourth child-->
     <div class="row px-1">
        <div class="col-sm-12">
            <!--product-->
            <div class="row">
                <?php
                if(!isset($_SESSION['username'])){
                    include('user_login.php');
                }
                else{
                    include('payment.php');
                }
                ?>
            </div>
        </div>
     </div>


       

<!---Footer--->

    <div class="bg-info p-3 text-center">
        <p>All rights reserved Design By Amit Kumar</p>
    </div>


    
 <!--Bootstrap js link--->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>