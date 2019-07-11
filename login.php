<?php
include("header.php");
?>


<section class="container-fluid reg-background">
    <div class="row justify-content-center pt-3 pb-3">
        <div class="col-2 rounded">
            <h3 class="pt-3 text-center regButton white" >Prisijungti</h3>
            <form id = "registracija" class="" action="tikrinu.php" method="post">
                <ul class="text-center">
                    <li>
                        <div class="md-form">
                            <i class="fas fa-user prefix theme-color"></i>
                            <label class = "white" for="username">Vardas</label>
                            <input name="username" type="text">
                        </div>
                    </li><br>
                    <li>
                        <div class="md-form">
                            <i class="fas fa-lock prefix theme-color"></i>
                            <label class="white" for="password">Slaptažodis</label>
                            <input name="password" type="password" >
                        </div>
                    </li><br>
                    <li><button class="btn-loginReg text-justify-center" name="reg_mygtukas" type="submit"  >
                        <span class="" class="strong">PRISIJUNGTI</span></button><br>
                    </li>

                </ul>
                

            </div>
            </form>
        </div>

</section>

<?php include_once('footer.php'); ?>

        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
