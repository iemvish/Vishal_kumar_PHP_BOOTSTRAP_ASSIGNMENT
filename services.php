<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "common/common-css.php"  ?>
  <title>Document</title>
</head>

<body>
  <!-- back to top  button -->
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up-long"></i></button>

  <!-- include header file-->
  <?php include "common/header.php" ?>
  <div class="banner bg-primary py-5  mb-5">
    <div class="heading">
      <h1 class="text-white display-3">Services</h1>
    </div>
    <p class="text-center">
      <a href="index.php" class="h4">Home</a>
      <i class="far fa-circle text-white px-2"></i>
      <a href="services.php" class="h4">Services</a>
    </p>
  </div>
  <?php include "common/services-main.php" ?>
        
    

  <!-- footer section -->
  <?php include "common/footer.php" ?>
  <?php include "common/common-js.php" ?>
</body>

</html>