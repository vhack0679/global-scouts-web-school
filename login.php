<?php include 'header.php'; ?>
<div class="container" style="margin-top:109px; background-color:#D6E7FC; box-shadow: 10px 10px 10px #CEC6BB, -10px -10px 10px #CEC6BB, 10px -10px 10px #CEC6BB, -10px 10px 10px #CEC6BB; border-radius: 15px;">
  <div class="row">
    <div id="loginBtn" class="col-6 fw-bold text-center" style="background:#F11A77; color:white;" onclick="showLoginForm()">Login</div>
    <div id="registerBtn" class="col-6 fw-bold text-center" onclick="showRegisterForm()">Register</div>
  </div>
</div>
<div id="loginForm" class="container-fluid h-custom">
  <div class="row d-flex justify-content-center align-items-center">
    <div class="col-md-9 col-lg-6 col-xl-5">
      <img src="images/login.png" class="img-fluid" alt="Sample image">
    </div>
    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" style="background-color:#D6E7FC; box-shadow: 10px 10px 10px #CEC6BB, -10px -10px 10px #CEC6BB, 10px -10px 10px #CEC6BB, -10px 10px 10px #CEC6BB;">
      <form>
        <div data-mdb-input-init class="form-outline mb-4">
    <label class="form-label akaya-kanadaka-regular mt-3 fw-bold" for="form3Example3">Email address</label>
    <div class="input-group">
        <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
        <input type="email" id="form3Example3" class="form-control form-control-lg akaya-kanadaka-regular" placeholder="Enter your email address" />
    </div>
</div>
        <div data-mdb-input-init class="form-outline mb-3">
    <label class="form-label akaya-kanadaka-regular fw-bold" for="form3Example4">Password</label>
    <div class="input-group">
        <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
        <input type="password" id="form3Example4" class="form-control form-control-lg akaya-kanadaka-regular" placeholder="Enter your password" />
        <button class="btn btn-outline-secondary" type="button" id="passwordField3"  data-toggle-password>
            <i class="bi bi-eye-slash"></i>
        </button>
    </div>
</div>
        <div class="d-flex justify-content-between align-items-center">
          <div class="form-check mb-0">
            <input class="form-check-input akaya-kanadaka-regular me-2" type="checkbox" value="" id="form2Example3" />
            <label class="form-check-label akaya-kanadaka-regular fw-bold" for="form2Example3">Remember me</label>
          </div>
          <a href="#!" class="text-body akaya-kanadaka-regular fw-bold">Forgot password?</a>
        </div>
        <div class="container justify-content-center">
          <div class="divider x align-items-center">
            <p class="text-center justify-content-center fw-bold mt-3 akaya-kanadaka-regular">Or <br/>
              <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn mt-3 btn-primary justify-content-center">
                <i class="fab fa-facebook-f"></i>
              </button>
              <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn mt-3 btn-primary justify-content-center">
                <i class="fab fa-twitter"></i>
              </button>
              <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn mt-3 btn-primary justify-content-center">
                <i class="fab fa-linkedin-in"></i>
              </button>
            </p>
          </div>
        </div>
        <div class="text-center text-lg-start mt-4 pt-2 mb-3">
          <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-lg akaya-kanadaka-regular" style="padding-left: 2.5rem; padding-right: 2.5rem; background-color:#303877; color:white;">Login</button>
          <p class="small fw-bold mt-2 pt-1 mb-0 akaya-kanadaka-regular">Don't have an account? <a href="#!" onclick="showRegisterForm()" class="link-danger">Register</a></p>
        </div>
      </form>
    </div>
  </div>
</div>
<div id="registerForm" class="container-fluid h-custom" style="display:none;">
  <div class="row d-flex justify-content-center align-items-center">
    <div class="col-md-9 col-lg-6 col-xl-5">
      <img src="images/login.png" class="img-fluid" alt="Sample image">
    </div>
    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" style="background-color:#D6E7FC; box-shadow: 10px 10px 10px #CEC6BB, -10px -10px 10px #CEC6BB, 10px -10px 10px #CEC6BB, -10px 10px 10px #CEC6BB;">
      <form>
        <div data-mdb-input-init class="form-outline mb-4">
    <label class="form-label akaya-kanadaka-regular mt-3 fw-bold" for="form3Example3">Email address</label>
    <div class="input-group">
        <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
        <input type="email" id="form3Example3" class="form-control form-control-lg akaya-kanadaka-regular" placeholder="Enter your email address" />
    </div>
</div>
        <div data-mdb-input-init class="form-outline mb-3">
    <label class="form-label akaya-kanadaka-regular fw-bold" for="form3Example4">Password</label>
    <div class="input-group">
        <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
        <input type="password" id="form3Example4" class="form-control form-control-lg akaya-kanadaka-regular" placeholder="Enter your password" />
        <button class="btn btn-outline-secondary" type="button" id="passwordField1"  data-toggle-password>
            <i class="bi bi-eye-slash"></i>
        </button>
    </div>
</div>
<div data-mdb-input-init class="form-outline mb-3">
    <label class="form-label akaya-kanadaka-regular fw-bold" for="form3Example4">Password</label>
    <div class="input-group">
        <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
        <input type="password" id="form3Example4" class="form-control form-control-lg akaya-kanadaka-regular" placeholder="Enter your password" />
        <button class="btn btn-outline-secondary" type="button" id="passwordField2"  data-toggle-password>
            <i class="bi bi-eye-slash"></i>
        </button>
    </div>
</div>
       <br/>
        <div class="text-center text-lg-start mt-4 pt-2 mb-3">
          <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-lg akaya-kanadaka-regular" style="padding-left: 2.5rem; padding-right: 2.5rem; background-color:#303877; color:white;">Register</button>
          <p class="small fw-bold mt-2 pt-1 mb-0 akaya-kanadaka-regular">Already have an account? <a href="#!" onclick="showLoginForm()" class="link-danger">Login</a></p>
        </div>
      </form>
    </div>
  </div>
</div>
<br/><br/><br/>
<script>
 function showRegisterForm() {
    document.getElementById('loginForm').style.display = 'none';
    document.getElementById('registerForm').style.display = 'block';
    // Apply styles to the Register button
    document.getElementById('registerBtn').style.background = '#F11A77';
    document.getElementById('registerBtn').style.color = 'white';
    // Reset styles of the Login button
    document.getElementById('loginBtn').style.background = '';
    document.getElementById('loginBtn').style.color = '';
  }

  function showLoginForm() {
    document.getElementById('registerForm').style.display = 'none';
    document.getElementById('loginForm').style.display = 'block';
    // Apply styles to the Login button
    document.getElementById('loginBtn').style.background = '#F11A77';
    document.getElementById('loginBtn').style.color = 'white';
    // Reset styles of the Register button
    document.getElementById('registerBtn').style.background = '';
    document.getElementById('registerBtn').style.color = '';
  }
  document.querySelectorAll('[data-toggle-password]').forEach(function(button) {
    button.addEventListener('click', function() {
        var passwordField = this.previousElementSibling;
        var fieldType = passwordField.getAttribute('type');
        
        if (fieldType === 'password') {
            passwordField.setAttribute('type', 'text');
            this.querySelector('i').classList.remove('bi-eye-slash');
            this.querySelector('i').classList.add('bi-eye');
        } else {
            passwordField.setAttribute('type', 'password');
            this.querySelector('i').classList.remove('bi-eye');
            this.querySelector('i').classList.add('bi-eye-slash');
        }
    });
});
</script>
<?php include 'footer.php'; ?>