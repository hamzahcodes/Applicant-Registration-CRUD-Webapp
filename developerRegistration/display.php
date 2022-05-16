<html>
    <head>
        <title>Displaying Applicants</title>
        <?php include 'links.php'?>
        <style><?php include 'css/styles.css'?></style>
    </head>

    <body>
    <table class="table table-bordered" id="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">UserName</th>
      <th scope="col">Degree</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Reference</th>
      <th scope="col">Profile</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
        include 'connection.php';

        $selectquery = "select * from jobregistration";

        $query = mysqli_query($con, $selectquery);

        // $nums = mysqli_num_rows($query);

        while($res = mysqli_fetch_array($query)) {

        ?>
            <tr>
                <td><?php echo $res['id'] ?></td>
                <td><?php echo $res['name'] ?></td>
                <td><?php echo $res['degree'] ?></td>
                <td><?php echo $res['mobile'] ?></td>
                <td><span class="email-style"></span> <?php echo $res['email'] ?></td>
                <td><?php echo $res['refer'] ?></td>
                <td><?php echo $res['post'] ?></td>
                <td><a href="updates.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" title="UPDATE" data-placement="top"><i class="fas fa-edit" aria-hidden = "true"></i></a></td>
                <td><a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" title="UPDATE" data-placement="top"><i class="fa-solid fa-trash-can"></i></a></td>
            </tr>
        <?php    
        }
    ?>
  </tbody>
</table>
    </body>
</html>