
<?php
    include("partials/_config.php");
    
$login = false;
$showError = false;
  if(isset($_POST["submit"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "SELECT * from info where username='$username' and password ='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if (!empty($username) && !empty($password) && $num == 1) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: admin.php");
    } else {
        $showError = "Invalid Username or Password";
        echo '<div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
          <strong>Try again!</strong> Invalid Username or Password.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div> ';
    }
  }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-sca le=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>login page</title>
    <?php
        include("partials/_common-link.php");
    ?>
</head>

<body>
    <?php
        include("admin-nav.php");
    ?>
  <div class="login section-bg py-5">
    <div class="container">
      <div class="text-center">
        <h2 class="text-white mb-3">Login</h2>
      </div>
      <form class="login-form" method="post" action="">
        <div class="row justify-content-center">
          <div class="col-4">
            <div class="row">
              <div class="col-sm-12 shadow-hover border-radius-30">
                <div class="outer-shadow border-radius-30 mb-3">
                    <input class="inner-shadow form-control h-100 " placeholder="Username" value="" id="username" name="username" type="text">
                </div>
              </div>
              <div class="col-sm-12 shadow-hover border-radius-30">
                <div class="outer-shadow border-radius-30 mb-3">
                    <input class="inner-shadow form-control h-100 " placeholder="Password" value="" id="password" name="password" type="password">
                </div>
              </div>
              <div class="col-12 text-center">
                <div class="shadow-hover border-radius-30 d-inline-block">
                    <div class="outer-shadow border-radius-30  text-center">
                        <input type="submit" name="submit" value="Login" class="form-control send inner-shadow border-radius-30 d-block py-2 px-4 font-size-15 text-primary fw-bold">
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>




  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  -->
</body>

</html>