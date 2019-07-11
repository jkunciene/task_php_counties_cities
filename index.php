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

      <?php include('header.php'); ?>


                      <!-- Main -->
      <main class="container">
        <section class="py-5">
          <div class="container">
            <h2 class="font-weight-light text-center">product list</h2>
          </div>
          <?php include('featured.php'); ?>
        </section>



      </main>

                    <!-- Footer -->
      <footer>
            <?php include('footer.php'); ?>
      </footer>
