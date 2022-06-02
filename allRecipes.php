<?php require_once("parts/header.php");?>
<?php
  if(!isset($_SESSION["user_email"])){
    header("Location: login.php");
    exit;
  }
  ?>

    <!-- =====================Recipes section===================== -->

    <section class="ceta py-5">
      <div class="container-fluid py-5 text-center" id="recipeContainer">
        <h3 class="blue">FIND YOUR DISH</h3>
        <h1>Browse Best Dishes</h1>
        <div class="filter-condition">
          <select name="" id="select">
            <option value="Default">Sort by</option>
            <option value="Ascending" onchange = "radioSort(this)" >Asccending</option>
            <option value="Descending" onchange = "radioSort(this)">Descending</option>
          </select>
          
          <!-- <div class="radio-buttons">
          <span class="div-sort-title">Sort by:</span>
          <div class="div-sort-options">
            <span><input type="radio" onchange="radioSort(this)" value="ascending" name="radio-sort" checked />Ascending</span>
            <span><input type="radio" onchange="radioSort(this)" value="descending" name="radio-sort" />Descending</span>
          </div> -->
        </div>
          
        </div>
        <div class="row py-5" id="list-of-divs">
          <div class="col-lg-11 m-auto pt-3" id="list-of-divs">
            <div class="row py-5">
              <div class="col-lg-3 col-md-4 col-sm-6" data-name="Pancakes">
                <div class="card py-3 recipe" >
                  <a href="firstRecipe.php"
                    ><img
                      src="./imgs/recipe1.jpg"
                      alt=""
                      class="img-fluid my-3"/>
                    <h6 class="blue">Pancakes</h6>
                  </a>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6" data-name="Pasta">
                <div class="card py-3 recipe" >
                  <img src="./imgs/recipe2.jpg" alt="" class="img-fluid my-3" />
                  <h6 class="blue">Pasta</h6>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6" data-name="GrilledChicken">
                <div class="card py-3 recipe" >
                  <img
                    src="./imgs/recipe3.jpeg"
                    alt=""
                    class="img-fluid my-3"
                  />
                  <h6 class="blue">Grilled Chicken</h6>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6" data-name="EggsSalad">
                <div class="card py-3 recipe"  >
                  <img src="./imgs/recipe4.jpg" alt="" class="img-fluid my-3" />
                  <h6 class="blue">Eggs Salad</h6>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-6" data-name="CornDogs">
                <div class="card py-3 recipe" >
                  <img src="./imgs/recipe5.jpg" alt="" class="img-fluid my-3" />
                  <h6 class="blue">CornDogs</h6>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6" data-name="Pizza" >
                <div class="card py-3 recipe" >
                  <img src="./imgs/recipe6.jpg" alt="" class="img-fluid my-3" />
                  <h6 class="blue">Pizza</h6>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6" data-name="Cupcakes">
                <div class="card py-3 recipe" >
                  <img src="./imgs/recipe7.jpg" alt="" class="img-fluid my-3" />
                  <h6 class="blue">Cupcakes</h6>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6" data-name="Shawarma">
                <div class="card py-3 recipe" >
                  <img src="./imgs/recipe8.jpg" alt="" class="img-fluid my-3" />
                  <h6 class="blue">Shawarma</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php require_once("parts/footer.php");?>  
