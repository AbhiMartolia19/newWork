<?php
include("includes/header.php");
include("includes/navbar.php");

// $_SESSION['otp'] = substr(md5(rand()), 0, 5);

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$register_status = $_SESSION["status"];

$_SESSION['is_registered'] = false;

if (!isset($_SESSION['registered'])) {
  $_SESSION['registered'] = true;
  header("Location: register.php");
  exit;
}
?>


<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-10"> <!-- Changed col-xl-11 to col-xl-10 for a smaller width -->
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-4"> <!-- Reduced padding from p-md-5 to p-md-4 -->
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-8 col-xl-7 order-2 order-lg-1"> <!-- Adjusted column size -->
                <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4" action="register_process.php" method="POST" onsubmit="return validatePasswords()">

                  <div class="d-flex flex-row align-items-center mb-3">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" name="name" class="form-control" required/>
                      <label class="form-label" for="form3Example1c">Your Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-3">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="form3Example3c" name="email" class="form-control" required/>
                      <label class="form-label" for="form3Example3c">Your Email</label>
                    </div>
                  </div>

                  <!-- Phone Number Field -->
                  <div class="d-flex flex-row align-items-center mb-3">
                    <i class="fas fa-phone fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="tel" id="form3ExamplePhone" name="phone" class="form-control" required/>
                      <label class="form-label" for="form3ExamplePhone">Your Phone Number</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-3">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" name="password" class="form-control" required/>
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-3">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4cd" name="confirm_password" class="form-control" required/>
                      <label class="form-label" for="form3Example4cd">Repeat your password</label>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" required/>
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>

                  <!-- <div class="d-flex flex-row align-items-center mb-3">
                    <div class="form-outline flex-fill mb-0">
                      <div class="d-flex">
                        <input type="hidden" id="form3Example4cd" class="form-control form-control-sm me-2" placeholder="Enter Received OTP" required/>
                      </div>
                    </div>
                  </div> -->

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" name="send" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary btn-lg">Sign Up</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-4 col-xl-5 d-flex align-items-center order-1 order-lg-2">
                <img src="assets/images/ecommerce_marketing.webp"
                  class="img-fluid" alt="Sample image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
function validatePasswords() {
  var password = document.getElementById("form3Example4c").value;
  var confirmPassword = document.getElementById("form3Example4cd").value;
  console.log("HI");

  if (password !== confirmPassword) {
    alert("Passwords do not match. Please ensure both fields are the same.");
    return false;  // Prevent form submission
  }
  return true;  // Allow form submission
}

<?php if ($register_status): ?>
  alert("<?php echo $register_status; ?>");
<?php endif; ?>

  // After the alert, unset the session variable to prevent it from showing again
<?php if ($register_status): ?>
  <?php unset($_SESSION['status']); ?>
<?php endif; ?>
</script>


<?php
include("includes/footer.php");
?>
