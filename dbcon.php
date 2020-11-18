<?php

//$server= 'localhost';
//$user = 'root';
//$password = '';
//$db='coronadb';
$server= 'remotemysql.com';
$user = 'hOJn928xjm';
$password = '8HOmWROuHo';
$db='hOJn928xjm';
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
