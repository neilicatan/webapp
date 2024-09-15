<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">


</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#">Register Here</a>
  </div>

      <form action="index.html" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" id ="fullname" name = "fullname">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" id ="username" name = "username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id ="password" name = "password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" id ="retype" name = "retype">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            <a href="login.php" class="text-center">I already have a membership</a>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="button" class="btn btn-primary btn-block" onclick="Register();">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>

<script>
function Register(){
        var fullname = document.getElementById("fullname").value;
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var retype = document.getElementById("retype").value;

        if (fullname === "" || username === "" || password === "") {
        toastr.error("All fields are required.");
        return;}

        if(password != retype){
            toastr.error("Passwords do not match.");
            return;
        }
        $.ajax({
            type:"POST",
            url:"registration_action.php",
            data:{
                fullname:fullname,
                username:username,
                password:password
            },
            success: function(data){
                const obj =JSON.parse(data);
              if(obj.response == "success"){
                toastr.success(obj.message);
                window.setTimeout(function() {
                  window.location.href = "login.php";
                    }, 1000);}
                else{
                toastr.error(obj.message);
                }
            },
            error: function(xhr, textStatus, errorThrown){
                alert("Error");
            }
        })
    }
</script>
</body>
</html>
