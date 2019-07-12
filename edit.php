<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="..\libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="..\css/main.css">
    </head>
    <body>
      <?php
      require_once('..\db_functions.php');
       ?>
       <div class="row justify-content-center">
      <?php
      $id = $_POST['id'];
      $name = $_POST['name'];
      $discription = $_POST['description'];
      $price = $_POST['price'];
      $imgname = $_POST['imgname'];
      $status = $_POST['status'];

      updateItem( $id, $name, $discription, $price, $imgname, $status);

         ?>

       <a  href="admin_panel.php" class="btn btn-outline-dark w-50 m-5">Back to admin panel</a>

</div>

        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="..\..\js/main.js">     </script>
    </body>
</html>
