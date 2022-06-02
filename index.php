<?php require_once("parts/header.php"); ?>
<?php
  if(!isset($_SESSION["user_email"])){
    header("Location: login.php");
    exit;
  }
  ?>

    <!-- =====================main section===================== -->
    <main class="main py-5" id="homePage">
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-7">
            <h1>First Recipes Website</h1>
            <input type="text" placeholder="Search your dish" />
            <button class="btn2 mt-5"><i class="uil uil-search"></i></button>
          </div>
        </div>
      </div>
    </main>

    <?php require_once("parts/footer.php"); ?>
