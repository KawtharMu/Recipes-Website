<?php
session_start();
require_once("users.php");
?>

<!-- // it was require_once -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- ===== Iconscout CSS =====-->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />

    <!-- === CSS === -->
    <link rel="stylesheet" href="./css/mainStyleCss.css" />

    <!-- Browser tab icon -->
    <link rel="icon" href="./images/whisk.png" />

    <title>Login</title>
  </head>
  <body>
    <!-- header starts here-->
    <header>
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="./index.php">FoodMakers</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"
              ><i class="uil uil-bars"></i
            ></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="allRecipes.php">Recipes</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#"> About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
            <form class="d-flex">
              <button
                class="btn0"
                type="button"
                onclick="location.href='register.php'"
              >
                Register
              </button>
              <button
                class="btn1 mx-3"
                type="button"
                onclick="location.href='login.php'"
              >
                Login
              </button>
              <div class="dropdown">
                
                <div class="userdrop">
                  <button type="button" class="btnuser" onclick="location.href='logout.php'">Logout   <i class="uil uil-arrow-from-right"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- header ends here -->