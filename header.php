<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>adeo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
<header>
  <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Admin</a>
                    </li>
                </ul>
                <form action="search.php"    method="GET"   class="form-inline my-2 my-lg-0" >
                    <input type="text" class="form-control mr-sm-2" name="search" aria-label="Search" placeholder="search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Search">Search</button>
                </form>

            </div>
        </nav>
    </div>
</header>
