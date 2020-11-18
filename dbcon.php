<?php

$server= 'localhost';
$user = 'root';
$password = '';
$db='coronadb';
$con = mysqli_connect($server, $user, $password, $db);
if($con){
    ?>
    <script>
    alert("connection succes")
    </script>
    <?php
} else{
    ?>
    <script>
    alert("connection not succes")
    </script>
    <?php
}

?>