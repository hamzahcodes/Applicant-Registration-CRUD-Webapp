<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update</title>
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

            <?php
                include 'connection.php';

                $ids = $_GET['id'];

                $showquery = "select * from jobregistration where id={$ids}";

                $showdata = mysqli_query($con, $showquery);

                $arrdata = mysqli_fetch_array($showdata);


                if(isset($_POST['submit'])) {
                    $id = $ids;
                    $name = $_POST['name'];
                    $degree = $_POST['degree'];
                    $mobile = $_POST['mobile'];
                    $email = $_POST['email'];
                    $refer = $_POST['refer'];
                    $profile = $_POST['profile'];

                    // $insertquery = "INSERT INTO `jobregistration`(`name`, `degree`, `mobile`, `email`, `refer`, `post`) VALUES ('$name','$degree','$mobile','$email','$refer','$profile')";

                    $updatequery = " UPDATE `jobregistration` SET `id`='$id', `name`='$name',`degree`='$degree',`mobile`='$mobile',`email`='$email',`refer`='$refer',`post`='$profile' WHERE `id` = {$ids}";
                    $res = mysqli_query($con, $updatequery);
                    if($res) {
                        ?>
                            <script>
                            alert('Data updated sucessfully.')
                            </script>
                        <?php
                    } else {
                        ?>
                            <script>
                            alert('Data not updated sucessfully.')
                            </script>
                        <?php
                    }
                }
                ?>
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" name="name" value="<?php echo $arrdata['name']; ?>" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName" >Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" name="degree" value="<?php echo $arrdata['degree']; ?>" class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">Degree</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" name="mobile" value="<?php echo $arrdata['mobile']; ?>" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName" value="Mobile">Mobile</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" name="email" value="<?php echo $arrdata['email']; ?>" class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">Email</label>
                  </div>

                </div>
              </div>
                

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" name="refer" value="<?php echo $arrdata['refer']; ?>" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">Reference</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" name="profile" value="<?php echo $arrdata['post']; ?>" class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">Post</label>
                  </div>

                </div>
              </div>            

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Update" name="submit"/>
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

