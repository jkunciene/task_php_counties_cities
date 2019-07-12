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


        function createItem( $name, $discription, $price, $imgname, $status) {
            $nameCrypted = mysqli_real_escape_string (getLoginDB(), $name );
            $discriptionCrypted = mysqli_real_escape_string (getLoginDB(), $discription );
            $priceCrypted = mysqli_real_escape_string (getLoginDB(), $price );
            $imgnameCrypted = mysqli_real_escape_string (getLoginDB(), $imgname );
            $statusCrypted = mysqli_real_escape_string (getLoginDB(), $status );

            $query = "INSERT INTO  items
                            VALUES( null, '$nameCrypted', '$discriptionCrypted', '$priceCrypted', '$imgnameCrypted', $statusCrypted) ";

            $result = mysqli_query(getLoginDB(),  $query);
            if ( !$result) {
                echo "Nepavyko sukurti naujos prekes" . mysqli_error(getLoginDB());
            }
            else {
              echo "NEW PRODUCT WAS CREATED";
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

        function updateItem($id, $name, $discription, $price, $imgname, $status) {
            $idCrypted = mysqli_real_escape_string (getLoginDB(), $id );
            $nameCrypted = mysqli_real_escape_string (getLoginDB(), $name );
            $discriptionCrypted = mysqli_real_escape_string (getLoginDB(), $discription );
            $priceCrypted = mysqli_real_escape_string (getLoginDB(), $price );
            $imgnameCrypted = mysqli_real_escape_string (getLoginDB(), $imgname );
            $statusCrypted = mysqli_real_escape_string (getLoginDB(), $status );

            $query = "UPDATE  items
                            SET name = '$nameCrypted',
                                discription = '$discriptionCrypted',
                                price = '$priceCrypted',
                                imgname = '$imgnameCrypted,
                                status = '$statusCrypted'

                            WHERE id = '$idCrypted'
                            LIMIT 1
                            ";

            $result = mysqli_query(getLoginDB(), $query);

            if ( !$result) {
                echo "ERROR: nepavyko redaguoti." . mysqli_error(getLoginDB());
            } else {
              echo "PRODUCT WAS UPDATED";

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
