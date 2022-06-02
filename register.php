<?php require_once("parts/header.php");?>

    <!-- =====================main section===================== -->
    <section class="main py-5">
      <div class="container py-2" id="registerContainer">
        <div class="forms">
          <!-- Registration Form-->
          <div class="form login">
            <span class="title">Registration</span>
            <form action="#">
              <div class="input-field">
                <input type="text" placeholder="Enter your name" required />
                <i class="uil uil-user"></i>
              </div>
              <div class="input-field">
                <input
                  id="email"
                  type="text"
                  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                  placeholder="Enter your email"
                  required
                />
                <i class="uil uil-envelope icon"></i>
              </div>
              <div class="input-field">
                <input
                  type="password"
                  class="password"
                  placeholder="Create a password"
                  required
                />
                <i class="uil uil-lock icon"></i>
              </div>
              <div class="input-field">
                <input
                  type="password"
                  class="password"
                  placeholder="Confirm your password"
                  required
                />
                <i class="uil uil-lock icon"></i>
                <i class="uil uil-eye-slash showHidePw"></i>
              </div>

              <div class="checkbox-text">
                <div class="checkbox-content">
                  <input type="checkbox" id="logCheck" />
                  <label for="logCheck" class="text"
                    >I accept all terms & conditions</label
                  >
                </div>
              </div>

              <div class="input-field button">
                <input type="button" value="Register Now" />
              </div>
            </form>

            <div class="login-signup">
              <span class="text"
                >Already have an account?
                <a href="login.php" class="text login-link">Login now</a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php require_once("parts/footer.php");?>
