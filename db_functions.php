<?php

    require_once('config.php');

    //--------------PRISIJUNTIMAS-----------------------

    $loginDB = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);

    if( !$loginDB )   {
        echo "ERROR:  prisijungti prie DB nepavyko!!!" . mysqli_connect_error();
    }


    function getLoginDB() {
        global $loginDB;
        return $loginDB;
    }

  //--------------GET ITEM (GAUTI PRODUKTA) FUNKCIJA-----------------------

    function getItem($nr) {
        $query = "SELECT * FROM items WHERE id='$nr' ";
        $rezult = mysqli_query(getLoginDB(),  $query);
        $resultArray = mysqli_fetch_assoc($rezult);
        return $resultArray;
    }

    //--------------GET ITEMS (GAUTI PRODUKTUS) FUNKCIJA-----------------------

      function getItems($itemLimit = 50) {
          $query = "SELECT * FROM items LIMIT $itemLimit ";
          $result = mysqli_query(getLoginDB(),  $query);
          return $result;
      }



        //--------------createItem funkcija naujam produktui kurti--------------


        function createItem( $name, $discription, $price, $imgname) {
            $nameCrypted = mysqli_real_escape_string (getLoginDB(), $name );
            $discriptionCrypted = mysqli_real_escape_string (getLoginDB(), $discription );
            $priceCrypted = mysqli_real_escape_string (getLoginDB(), $price );
            $imgnameCrypted = mysqli_real_escape_string (getLoginDB(), $imgname );

            $query = "INSERT INTO  items
                            VALUES( null, '$nameCrypted', '$discriptionCrypted', '$priceCrypted', '$imgnameCrypted') ";

            $result = mysqli_query(getLoginDB(),  $query);
            if ( !$result) {
                echo "Nepavyko sukurti naujos prekes" . mysqli_error(getLoginDB());
            }
        }

        //--------------deleteItem funkcija  produktui istrinti--------------

        function deleteItem($id) {
            $query = "DELETE FROM items WHERE id = '$id' LIMIT 1";

            $rezultatai = mysqli_query(getLoginDB(),  $query); // print_r(    $rezultataiOBJ );  // test
            if ( $rezultatai == false) {
                echo "ERROR: item not deleted. SQL error:" . mysqli_error(getLoginDB());
            }
        }

        //--------------updateItem funkcija  produktui pakeisti--------------

        function updateItem($id, $name, $discription, $price, $imgname) {
            $idCrypted = mysqli_real_escape_string (getLoginDB(), $id );
            $nameCrypted = mysqli_real_escape_string (getLoginDB(), $name );
            $discriptionCrypted = mysqli_real_escape_string (getLoginDB(), $discription );
            $priceCrypted = mysqli_real_escape_string (getLoginDB(), $price );
            $imgnameCrypted = mysqli_real_escape_string (getLoginDB(), $imgname );



            $queryCheck = "SELECT * FROM items
                              WHERE id = '$id' AND
                                    name = '$name' AND
                                    discription = '$discription' AND
                                    price = '$price' AND
                                    imgname = '$imgnameCrypted'
                             LIMIT 1;
                                  ";

            $query = "UPDATE  items
                            SET name = '$nameCrypted',
                                discription = '$discriptionCrypted',
                                price = '$priceCrypted',
                                imgname = '$imgnameCrypted',

                            WHERE id = '$idCrypted'; ";

            $result = mysqli_query(getLoginDB(), $queryCheck);

            if ($result->num_rows == 0) {
              $newResult = mysqli_query(getLoginDB(),  $query);
              echo "Item updated successfully!";
          } else {
            echo "Nothing changed. Information already exists.";

          }
        }


        //--------------LOGIN--------------

        function loginToAdmin($username, $password) {
            $cryptedusername = mysqli_real_escape_string(getLoginDB(), $username );
            $cryptedPassword = mysqli_real_escape_string(getLoginDB(), $password );

            $query = "SELECT * FROM registration
                            WHERE username = '$cryptedusername' AND password = '$cryptedPassword'; ";

            $result = mysqli_query(getLoginDB(),  $query);

            $resultArray = mysqli_fetch_assoc($result);
            print_r($resultArray);

            if (mysqli_num_rows($result)>0) {
              echo "<script type='text/javascript'> window.location = 'admin/admin_panel.php'</script>";
           } else {
             echo "<br /><span class='pReg'><strong>Neteisingas slaptažodis arba vartotojo vardas</strong></span>";
           }
         }


  //--------------CREATE order FUNKCIJA-----------------------
          function createOrderInfo($name, $lname, $email, $phone, $address, $city, $country, $message, $orderItemNames, $totalprice) {
              $nameCrypted = mysqli_real_escape_string (getLoginDB(), $name );
              $lnameCrypted = mysqli_real_escape_string (getLoginDB(), $lname );
              $emailCrypted = mysqli_real_escape_string (getLoginDB(), $email );
              $phoneCrypted = mysqli_real_escape_string (getLoginDB(), $phone );
              $addressCrypted = mysqli_real_escape_string (getLoginDB(), $address );
              $cityCrypted = mysqli_real_escape_string (getLoginDB(), $city );
              $countryCrypted = mysqli_real_escape_string (getLoginDB(), $country );
              $messageCrypted = mysqli_real_escape_string (getLoginDB(), $message );
              $orderItemNamesCrypted = mysqli_real_escape_string (getLoginDB(), $orderItemNames );
              $totalPriceCrypted = mysqli_real_escape_string (getLoginDB(), $totalprice );

              $query = "INSERT INTO  orders
                              VALUES( null, '$nameCrypted', '$lnameCrypted', '$emailCrypted', '$phoneCrypted', '$addressCrypted', '$cityCrypted', '$countryCrypted', '$messageCrypted', '$orderItemNamesCrypted', '$totalPriceCrypted') ";

              $result = mysqli_query(getLoginDB(),  $query);
              if ( !$result) {
                  echo "Something went wrong!" . mysqli_error(getLoginDB());
              }
          }

          //--------------GET orders FUNKCIJA-----------------------
          function getOrders($itemLimit = 50) {
              $query = "SELECT * FROM orders LIMIT $itemLimit ";
              $result = mysqli_query(getLoginDB(),  $query);

              return $result;
          }

          //--------------GET order FUNKCIJA-----------------------
          function getOrder($id) {
              $query = "SELECT * FROM orders WHERE id = '$id' ";
              $result = mysqli_query(getLoginDB(),  $query);
              $orderById = mysqli_fetch_assoc($result);
              return $orderById;
          }
          //--------------SEARCH-----------------------
                  function search($search) {
                      $min_length = 3;
                      if(strlen($search) >= $min_length){

                      $searchCrypted = mysqli_real_escape_string(getLoginDB(), $search);
                      $query = "SELECT * FROM items
                                WHERE name LIKE '%".$searchCrypted."%' OR discription LIKE '%".$searchCrypted."%';";

                      $results = mysqli_query(getLoginDB(),  $query);

                      if($results){
                                  while($result = mysqli_fetch_assoc($results)){

                                      echo "<div class='m-4 col-md-5'><a href='template_product.php?id=" . $result['id'] . "'>";
                                      echo "<img class='item-img img-responsive img-thumbnail' src='img/" . $result['imgname'] . ".jpg'>";
                                      echo "<div class= 'col-12 text-center m-2 text-dark'><h4 class='font-weight-light card-title'>" . $result['name'] . "</h4>";
                                      echo "<h5 class='font-weight-light'>" . $result['price'] . " Eur</h5></div>";
                                      echo "</div></a>";

                                  }
                                }
                              }
                              else{ 
                                  echo "No results";
                              }
                      }
