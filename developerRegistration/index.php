<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <?php include 'links.php' ?>
  <style>
      <?php include 'css/styles.css' ?>
  </style>
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Developer Candidates Registration</h3>
            <form method="POST" action="">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" name="name" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" name="degree" class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">Degree</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" name="mobile" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">Mobile</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" name="email" class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">Email</label>
                  </div>

                </div>
              </div>
                

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" name="refer" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">Reference</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" name="profile" class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">Post</label>
                  </div>

                </div>
              </div>            

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Register" name="submit"/>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>

<?php
include 'connection.php';

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $degree = $_POST['degree'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $refer = $_POST['refer'];
    $profile = $_POST['profile'];

    $insertquery = "INSERT INTO `jobregistration`(`name`, `degree`, `mobile`, `email`, `refer`, `post`) VALUES ('$name','$degree','$mobile','$email','$refer','$profile')";

    $res = mysqli_query($con, $insertquery);
    if($res) {
        ?>
            <script>
               alert('Data inserted sucessfully.')
            </script>
        <?php
    } else {
        ?>
            <script>
               alert('Data not inserted sucessfully.')
            </script>
        <?php
    }
}
?>