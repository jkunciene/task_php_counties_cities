<html>
    <head>
        <meta charset="utf-8">
        <title>Create Product form</title>
        <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="..\css/main.css">
        <script src="https://kit.fontawesome.com/a0b467e28c.js"></script>

    </head>

    <body>


      <?php
      require_once('..\db_functions.php');

       ?>
       <div class="container bg-light">

       <div class="row m-5 justify-content-center">


         <h2>EDIT product</h2>

       </div>




                            <form action="edit.php" method="post">
                              <div class="row">
                              <div class="col-3">
                              <label for="id">Product ID</label>
                              </div>
                              <div class="col m-3">
                                <input class="form-control" type="text" name="id" value="<?php $item = getItem($_GET['id']); echo $item['id']; ?>" required></textarea>
                              </div>
                              </div>

                              <div class="row">
                              <div class="col-3">
                              <label for="name">Product name</label>
                              </div>
                              <div class="col m-3">
                                <input class="form-control" type="text" name="name" value="<?php $item = getItem($_GET['id']); echo $item['name']; ?>"  required/>
                              </div>
                              </div>

                              <div class="row">
                              <div class="col-3">
                              <label for="description">Description</label>
                              </div>
                              <div class="col m-3">
                                <input class="form-control" type="text" name="description" value="<?php $item = getItem($_GET['id']); echo $item['discription']; ?>"  required></textarea>
                              </div>
                              </div>

                              <div class="row">
                              <div class="col-3">
                                <label for="price">Price</label>
                              </div>
                              <div class="col m-3">
                                <input class="form-control" type="text" name="price" value="<?php $item = getItem($_GET['id']); echo $item['price']; ?>"  required/>
                              </div>
                              </div>

                              <div class="row">
                              <div class="col-3">
                                <label for="status">Status</label>
                              </div>
                              <div class="col m-3">
                                <input class="form-control" type="text" name="status" value="<?php $item = getItem($_GET['id']); echo $item['status']; ?>"  required/>
                              </div>
                              </div>

                              <div class="row">
                              <div class="col-3">
                                <label for="imgname">IMG name</label>
                              </div>
                              <div class="col m-3">
                                <input class="form-control" type="text" name="imgname" value="<?php $item = getItem($_GET['id']); echo $item['imgname']; ?>"  required/>
                              </div>
                              </div>

                              <div class="row justify-content-center">
                                <button type="submit"  class="btn btn-outline-dark w-50 m-3">Edit product</button>
                              </div>
                          </form>
                  </div>



        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="..\js/main.js">     </script>
    </body>
</html>
