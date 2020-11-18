<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>copyright Rohan</title>
    
    <?php include 'links/links.php'; ?>
    <?php include 'css/style.php'; ?>

</head>
<body onload ="fetch()">

<!-- navbar -->

<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#homeid">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home (India) <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">India Corona Live</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Contact / Help</a>
      </li>
        
    </ul>
  </div>
</nav>

<!-- corona latest update -->
<section class = "corona_update container-fluid">
<div class="my-3">
<h3 class = "high text-uppercase text-center">Covid-19 Real Time India  State-Wise Update</h3>
</div>
<div class ="table-responsive">
<table class = "table table-bordered table-striped text-center">
<tr>
<th>Last Updated Time & Date </th>
<th> States </th>
<th> Confirmed Cases</th>
<th> Active Cases</th>
<th> Recovered </th>
<th> Deaths </th>
</tr>

<?php
 $data = file_get_contents('https://api.covid19india.org/data.json');
 $coronalive = json_decode($data, true);

 //echo "<pre>";

 //print_r($coronalive);
 //echo "</pre>";


 $statescount = count($coronalive['statewise']);

   $i=1;
 while ($i < $statescount) {

    ?>
    <tr>
    <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?> </td>
    <td><?php echo $coronalive['statewise'][$i]['state'] ?> </td>
    <td><?php echo $coronalive['statewise'][$i]['confirmed'] ?> </td>
    <td><?php echo $coronalive['statewise'][$i]['active'] ?> </td>
    <td><?php echo $coronalive['statewise'][$i]['recovered'] ?> </td>
    <td><?php echo $coronalive['statewise'][$i]['deaths'] ?> </td>
    </tr>

<!-- echo $coronalive['statewise'][$i]['lastupdatedtime'] . "<br>";
echo $coronalive['statewise'][$i]['state'] . "<br>";
echo $coronalive['statewise'][$i]['confirmed'] . "<br>";
echo $coronalive['statewise'][$i]['active'] . "<br>";
echo $coronalive['statewise'][$i]['recovered'] . "<br>";
echo $coronalive['statewise'][$i]['deaths'] . "<br>"; -->
<?php

$i++;
 }
 ?>


</table>
</div>
</div>
</section>


<!-- footer -->

<footer class ="mt-5">
<div class = "footer_style text-white text-center container-fluid">
<p>copyright ©Rohan Front End Developer ®Reserved||2020</p>
</footer>