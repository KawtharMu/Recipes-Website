<?php require_once("parts/header.php");?>

    <!-- =====================main section===================== -->
    <section class="singleRecipeContainer">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <img
              src="./imgs/recipe1.jpg"
              class="img-fluid my-3"
              alt="pancake"
            />
            <!--recipe writer-->
            <p class="recipe-writer">
              Written by: <a href="#">Chris Steve </a>on 9/03/2022
            </p>
          </div>
          <div class="col-lg-6 col-md-12 my-3">
            <h2>Blueberry and Strawberry Pancakes</h2>
            <button
              class="btn btn-primary"
              data-bs-toggle="modal"
              data-bs-target="#share-modal"
            >
              Share This Recipe
            </button>

            <div
              class="modal fade"
              id="share-modal"
              tabindex="-1"
              aria-labelledby="modal-title"
              aria-hidden="true"
            >
              <div class="modal-dialog my-3">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">
                      Share This Recipe
                    </h5>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div class="modal-body">
                    <p>
                      If you like this recipe, enter an email you want to send
                      it to!
                    </p>
                    <label for="modal-email" class="form-label">Email:</label>
                    <input
                      type="email"
                      class="form-control"
                      id="modal-email"
                      placeholder="name@example.com"
                    />
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary">Send</button>
                  </div>
                </div>
              </div>
            </div>

            <p class="para my-3">
              A delicious twist on blueberry pancakes, strawberry and blueberry
              come together in a perfect combination! These are easy to make and
              use fresh berries, but you can use frozen in place of fresh.
            </p>
            <!--recipe icons-->
            <div class="recipe-icons">
              <div>
                <i class="uil uil-clock"></i>
                <h5>Prep Time</h5>
                <p>10 min</p>
              </div>
              <div>
                <i class="uil uil-stopwatch"></i>
                <h5>Cook Time</h5>
                <p>16 min</p>
              </div>
              <div>
                <i class="uil uil-users-alt"></i>
                <h5>Serving</h5>
                <p>5 servings</p>
              </div>
            </div>
          </div>
        </div>
        <!--recipe content-->
        <div class="row mx-md-n5">
          <div class="col-lg-6 col-md-12 px-md-5 px-lg-5">
            <h4>Ingredients</h4>
            <br>
            <br>
            <div class="checkbox">
              <label class="single-ingredient">
                <input type="checkbox" name="packersOff" class="strikethrough" value="1">
                <span >2 cups flour</span>
              </label>
              <br>
              <label class="single-ingredient">
                <input type="checkbox" name="packersOff" class="strikethrough" value="2">
                <span >2 teaspoons baking powder</span>
              </label>
              <br>
              <label class="single-ingredient">
                <input type="checkbox" name="packersOff" class="strikethrough" value="3">
                <span >1 teaspoon baking soda</span>
              </label>
              <br>
              <label class="single-ingredient">
                <input type="checkbox" name="packersOff" class="strikethrough" value="4">
                <span >¼ teaspoon salt</span>
              </label>
              <br>
              <label class="single-ingredient">
                <input type="checkbox" name="packersOff" class="strikethrough" value="5">
                <span >2 tablespoon sugar</span>
              </label>
              <br>
              <label class="single-ingredient">
                <input type="checkbox" name="packersOff" class="strikethrough" value="6">
                <span >1¼ cups sour cream</span>
              </label>
              <br>
              <label class="single-ingredient">
                <input type="checkbox" name="packersOff" class="strikethrough" value="6">
                <span >1 cup milk</span>
              </label>
              <br>
              <label class="single-ingredient">
                <input type="checkbox" name="packersOff" class="strikethrough" value="6">
                <span >2 eggs</span>
              </label>
              <br>
              <label class="single-ingredient">
                <input type="checkbox" name="packersOff" class="strikethrough" value="6">
                <span >1 teaspoon vanilla extract</span>
              </label>
              <br>
              <label class="single-ingredient">
                <input type="checkbox" name="packersOff" class="strikethrough" value="6">
                <span >½ cup blueberries</span>
              </label>
              <br>
              <label class="single-ingredient">
                <input type="checkbox" name="packersOff" class="strikethrough" value="6">
                <span >½ cup strawberries</span>
              </label>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 px-md-5">
            <h4>Instructions</h4>
            <!-- single instruction -->
            <div class="single-instruction">
              <p class="steps">step 1</p>
              <p>
                In a medium sized bowl mix together the flour, baking powder,
                baking soda, salt and sugar. Set aside.
              </p>
            </div>
            <!-- end of single instruction -->
            <!-- single instruction -->
            <div class="single-instruction">
              <p class="steps">step 2</p>
              <p>
                In a large mixing bowl whisk together the sour cream, milk, eggs
                and vanilla. Whisk together until everything is combined well.
              </p>
            </div>
            <!-- end of single instruction -->
            <!-- single instruction -->
            <div class="single-instruction">
              <p class="steps">step 3</p>
              <p>
                Pour the dry ingredients into the wet ingredients and mix with a
                whisk until it is just incorporated. It is ok to have lumps, do
                not over stir pancake batter.
              </p>
            </div>
            <!-- end of single instruction -->
            <!-- single instruction -->
            <div class="single-instruction">
              <p class="steps">step 4</p>
              <p>
                Gently stir in the blueberries and strawberries with a spoon.
              </p>
            </div>
            <!-- end of single instruction -->
            <!-- single instruction -->
            <div class="single-instruction">
              <p class="steps">step 5</p>
              <p>
                Heat a griddle to around 350 or a flat pan over a burner on
                medium heat. Be sure the pan is heated to temperature before
                adding batter.
              </p>
            </div>
            <!-- end of single instruction -->
            <!-- single instruction -->
            <div class="single-instruction">
              <p class="steps">step 6</p>
              <p>
                If using non stick, add enough batter directly on the pan to
                reach the desired size pancake. If not using non stick, melt a
                little butter on the griddle before adding the pancake batter.
              </p>
            </div>
            <!-- end of single instruction -->
            <!-- single instruction -->
            <div class="single-instruction">
              <p class="steps">step 7</p>
              <p>
                Once the tops have small air bubbles forming, flip the pancake.
                Usually this is about 1-2 minutes but griddles and stoves vary
                so look for air bubbles.
              </p>
            </div>
            <!-- end of single instruction -->
            <!-- single instruction -->
            <div class="single-instruction">
              <p class="steps">step 8</p>
              <p>
                Cook for another 1-2 minutes, until the bottoms are nicely
                browned, remove from heat and serve!
              </p>
            </div>
            <!-- end of single instruction -->
          </div>

          <!--end of content-->
        </div>
      </div>
    </section>

    <?php require_once("parts/footer.php");?>