<?php require_once("parts/header.php");?>
<?php if(isset($_COOKIE["user_email"])){
  $_SESSION["user_email"] = $_COOKIE["user_email"];
  header("Location: index.php");
  exit;
}
?>
<?php
  if(isset($_POST['login_form'])) {
    if (isset($users[$_POST['user_email']])){
      if ($users[$_POST['user_email']]["password"] == $_POST['password'] ) {
        if ($_POST['remember_me']=="1") {
          setcookie("user_email", $_POST['user_email'], time() + 60*60*24*7);
        }
        $_SESSION['user_email'] = $_POST['user_email'];
        header('Location: index.php');
        exit;
      } else { ?>
      <div class="alert alert-danger" role="alert">
        Wrong Password
      </div>
      <?php
      }
    } else { ?>
      <div class="alert alert-warning" role="alert">
        Email not found
      </div>
    <?php
    }
  }
?>


    <!-- =====================main section===================== -->

    <main class="main py-5">
      <div class="container py-2" id="loginContainer">
        <div class="forms">
          <div class="form login">
            <span class="title">Login</span>

            <form method="POST">
              <div class="input-field">
                <input
                  name='user_email'
                  type="text"
                  id="floatingInput"
                  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                  placeholder="Enter your email"
                  required
                />
                <label for="floatingInput">Enter your email</label>
                <i class="uil uil-envelope icon"></i>
              </div>
              <div class="input-field">
                <input
                  name= 'password'
                  type="password"
                  class="password"
                  id="floatingPassword"
                  placeholder="Enter your password"
                  required
                />
                <label for="floatingPassword">Enter your password</label>
                <i class="uil uil-lock icon"></i>
                <i class="uil uil-eye-slash showHidePw"></i>
              </div>

              <div class="checkbox-text">
                <div class="checkbox-content mb-3">
                   <label>
                     <input type="checkbox" id="logCheck" value="1" name="remember_me"> Remember me
                  </label>
                </div>
                <!-- <div class="checkbox-content">
                  <input type="checkbox" id="logCheck" name='remember_me'/>
                  <label for="logCheck" class="text">Remember me</label>
                </div> -->
                <a href="#" class="text">Forgot password?</a>
              </div>
              <button name='login_form' class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
              <!-- <div class="input-field button">
                <input name='login_form' type="button" value="Login Now" />
              </div> -->
            </form>

            <div class="login-signup">
              <span class="text"
                >Not a member?
                <a href="register.php" class="text signup-link"
                  >Signup now</a
                >
              </span>
            </div>
          </div>
        </div>
      </div>
    </main>

    <?php require_once("parts/footer.php");?>
