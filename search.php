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

      <?php require_once('db_functions.php') ?>
      <?php include('header.php'); ?>


      <header class="header-page">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 text-center">
              <h1 class="font-weight-light p-5"><span class="header-page-name ">Search results</span></h1>
            </div>
          </div>
        </div>
      </header>


                      <!-- Main -->
      <main class="container">
        <section class="py-5">
          <div class="row font-weight-light justify-content-center">

            <?php
              $search = $_GET['search'];
              search($search);
                ?>

        </div>
        </section>

      </main>

                    <!-- Footer -->
      <footer>
            <?php include('footer.php'); ?>
      </footer>











        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <!-- <script type="text/javascript" src="js/main.min.js">     </script> -->
        <script type="text/javascript" src="js/main.js">     </script>
    </body>
</html>
