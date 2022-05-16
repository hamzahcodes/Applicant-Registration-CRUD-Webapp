<?php
include 'links.php';
include 'connection.php';

$ids = $_GET['id'];

$deletequery = " DELETE FROM `jobregistration` WHERE `id`={$ids}";
$res = mysqli_query($con, $deletequery);

if($res) {
    ?>
        <script>alert('Data deleted with id = <?php $ids ?>')</script>
    <?php
} else {
    ?>
        <script>alert('Data not deleted with id = <?php $ids ?>')</script>
    <?php
}
echo 'Return to display page';
?>
<html>
    <title>Delete</title>
    <a href="display.php" data-toggle="tooltip" title="Delete" data-placement="top"><i class="fa-solid fa-tablet-button"></i></a>
</html>

