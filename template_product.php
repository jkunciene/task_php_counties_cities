<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>adeo</title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/a0b467e28c.js"></script>

    </head>

    <body>
                          <!-- Header -->

      <?php
      require_once('db_functions.php');

       ?>

       <?php include('header.php'); ?>


       <header class="header-page">
         <div class="container">
           <div class="row align-items-center">
             <div class="col-12 text-center">
               <h1 class="font-weight-light p-5"><span class="header-page-name ">one product page</span></h1>
             </div>
           </div>
         </div>
       </header>


                      <!-- Main -->


      <main class="container mt-5">
        <section class="container-fluid mt-5">
              <div class="row">
                  <div class="col-12 text-center">
                      <h2 class="font-weight-light">
                          "<?php    $id = $_GET['id'];
                          echo getItem($id)['name'];    ?>"
                      </h2>
                    </div>
                  <div class="col-12 text-center">
                      <h4 class=""><?php
                        $id = $_GET['id'];
                        echo getItem($id)['price'];    ?>Eur</h4>
                  </div>
              </div>
        </section>

        <section class="container-fluid mt-5">
              <div class="row">
                    <div class="col-lg-7 col-md-12 justify-content-center">
                      <img class="item-img img-responsive" src="img/<?php
                      $id = $_GET['id'];
                      echo getItem($id)['imgname']; ?>.jpg" width="400">
                    </div>


                    <div class="col-lg-5 col-md-12 justify-content-center">
                      <div class= "col-12 text-center">
                        <p class="font-weight-light mt-5">
                          <?php
                          $id = $_GET['id'];
                          echo getItem($id)['discription'];    ?>
                        </p>
                      </div>

                      <div class= "col-12 justify-content-center">
                        <a class="btn btn-outline-dark my-2 my-sm-0 w-100" href="cart/add_to_cart.php?id=<?php
                          $id = $_GET['id'];
                          echo getItem($id)['id'];    ?>">Add to cart</a>
                      </div>

                    </div>


              </div>
        </section>



      </main>

                    <!-- Footer -->
      <footer>
            <?php include('footer.php'); ?>
      </footer>

        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/main.js">     </script>
    </body>
</html>
