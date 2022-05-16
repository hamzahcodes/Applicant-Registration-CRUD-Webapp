<?php

$username = 'root';
$password = '';
$server = 'localhost';
$db = 'developerdb';

$con = mysqli_connect($server, $username, $password, $db);

if($con) {

    ?>
    <script>
        alert('Connection Successful');
    </script>
    <?php
} else {
    echo 'Connection error';
}
?>