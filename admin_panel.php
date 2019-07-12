<html>
    <head>
        <meta charset="utf-8">
        <title>AdminPanel</title>
        <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="..\css/main.css">
        <script src="https://kit.fontawesome.com/a0b467e28c.js"></script>
    </head>
    <body>
      <?php require_once('..\db_functions.php');?>

<div class="container">
  <a href='create_form.php?id=" . $item['id'] . "' class='btn btn-success btn-lg'>CREATE NEW PRODUCT</a>
</div>
      <article class='row m-3 justify-content-center '>
         <?php
         $allItems = getItems( 10 );
         $item = mysqli_fetch_assoc($allItems);
         while (  $item == true ) {
        echo "<div class='card' style='width: 18rem;''>";
        echo "<img class='card-img-top' src='../img/" . $item['imgname'] . ".jpg' width='200'' alt='Card image cap'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>".$item['name']."</h5>";
        echo "<h6 class='card-title'>".$item['status']."</h6>";
        echo "<h6 class='font-weight-light text-center'>" . $item['price'] . " Eur</h6>";
        echo "<p class='card-text'>".$item['discription']."</p>";
        echo "<a href='edit_form.php?id=" . $item['id'] . "' class='btn btn-primary'>EDIT PRODUCT</a>";
        echo "<a href='delete.php?id=" . $item['id'] . "' class='btn btn-danger'>DELETE PRODUCT</a>";
        echo "</div>";
        echo "</div>";
         $item = mysqli_fetch_assoc($allItems);
       }

       ?>

   </article>
   <div class="container">
     <div class="row justify-content-end">
             <a href='../index.php ' class='btn btn-success btn-lg'>Grįžti į vartotojo puslapį</a>
     </div>
   </div>
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="..\js/main.js">     </script>
    </body>
</html>
