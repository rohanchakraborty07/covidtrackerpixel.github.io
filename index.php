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
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacorona.php">India Corona Live</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact / Help</a>
      </li>
        
    </ul>
  </div>
</nav>

<!-- animation -->

<div class ="main_header">
<div class = "row w-100 h-100">
<div class ="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
<div class ="leftside w-100 h-100 d-flex justify-content-center align-items-center">
<img src = "images/cov1.jpg" width = "200" height  = "200">
</div>
</div>
<div class ="col-lg-6 col-md-6 col-12 order-lg-2 order-1">
<div class ="rightside w-100 h-100 d-flex justify-content-center align-items-center">
<h1>Let's stay safe and fight Together against Cor<span class = "corona_rotate"> <img src = "images/cov3.jpg"width = "50" height  = "50"> </span>na </h1>
 </div>
</div>

</div>
</div>


<!-- corona latest update -->
<section class = "corona_update container-fluid">
<div class="mb-3">
<h3 class = "high text-uppercase text-center">Covid-19 Real Time  Updates -  WorldWide</h3>
</div>
<div class ="table-responsive">
<table class = "table table-bordered table-striped text-center" id="tabval">
<tr>
<th> Country </th>
<th> Total Confirmed</th>
<th> Total Recovered </th>
<th> Total Deaths </th>
<th> New Confirmed </th>
<th> New Recovered</th>
</tr>
</table>
</div>
</div>
</section>

<!-- About section corona -->
<div class ="container-fluid sub_section pt-5 pb-5" id="aboutid">
<div class ="section_header text-center mb-5 mt-4">
<h1>About COVID-19</h1>
</div>

<div class ="row pt-5">
<div class ="col-lg-5 col-md-6 col-12 ml-5">
<img src = "images/cov4.jpg" class = "img-fluid">
</div>
<div class = "col-lg-6 col-md-6 col-12">
<h2> What is Covid-19 (Coronavirus) </h2>
<p> Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus. Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.</p>
<p> The virus that causes COVID-19 is mainly transmitted through droplets generated when an infected person coughs, sneezes, or exhales. These droplets are too heavy to hang in the air, and quickly fall on floors or surfaces.
You can be infected by breathing in the virus if you are within close proximity of someone who has COVID-19, or by touching a contaminated surface and then your eyes, nose or mouth. </p>
</div>
</div>
</div>

<!-- corona symptoms -->

<div class ="container-fluid  pt-5 pb-5" id="sympid">
<div class ="section_header text-center mb-5 mt-4">
<h1 class = "highlight">CoronaVirus Symptoms</h1>
<div class ="leftside w-100 h-100  d-flex justify-content-center align-items-center  mt-5 col-12">
<img src = "images/cov5.jpg" class = "Upwards1" width = "900" height  = "500">
</div>
</div>
 </div>

 <!-- prevention symptoms -->

<div class ="container-fluid  pt-5 pb-5" id="preventid">
<div class ="section_header text-center mb-5 mt-4">
<h1 class = "highlight1 ">'6' Steps To prevent CoronaVirus</h1>
<div class ="leftside w-100 h-100  d-flex justify-content-center align-items-center  mt-5 col-12">
<img src = "images/cov6.gif" class = "Upwards" width = "1100" height  = "500">
</div>
</div>
</div>

<!-- Contact Us -->

<div class ="container-fluid  pt-5 pb-5" id="contactid">
<div class ="section_header text-center mb-5 mt-4">
<h1 class = "highlight2">Contact Us :- If you Are Not Feeling Well</h1>
</div>
<div class ="container">
<div class ="row">
<div class ="col-lg-8 offset-lg-2 col-12">
<form action = "" method = "POST">

<div class="form-group">
    <label>Patient Name</label>
    <input type="text" class="form-control" name = "username" placeholder="name" autocomplete = "off" required>
  </div>
  

  <div class="form-group">
    <label>Email </label>
    <input type="email" class="form-control" name = "email" placeholder="name@example.com" autocomplete = "off" required>
  </div>
  
  <div class="form-group">
    <label>mobile </label>
    <input type="number" class="form-control" name = "mobile" placeholder="mobile" autocomplete = "off" required>
  </div>
  
  <div class ="form-group">
  <label >Select Symptoms </label> <br>

  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="customCheckbox1" name ="coronasym[]" value="cold">
  <label class="custom-control-label" for="customCheckbox1">Cold</label>
</div>

 <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="customCheckbox2" name ="coronasym[]" value="fever">
  <label class="custom-control-label" for="customCheckbox2">fever</label>
</div>

<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="customCheckbox3" name ="coronasym[]" value="breath">
  <label class="custom-control-label" for="customCheckbox3">dfficulty in breath</label>
</div>

<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="customCheckbox4" name ="coronasym[]" value="tired">
  <label class="custom-control-label" for="customCheckbox4">feeling weak</label>
</div>
</div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Describe how you are feeling</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name = "msg"></textarea>
  </div>

  <button type = "submit" class ="btn btn-primary" name="submit"> Submit</button>
</form>
</div>
</div>
 </div>
</div>

<!-- scroll top 

<div class ="container scrolltop float-right pr-5">
<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>
-->

<!-- footer -->

<footer class ="mt-5">
<div class = "footer_style text-white text-center container-fluid">
<p>copyright ©Rohan Front End Developer ®Reserved||2020</p>
</footer>


<!-- FOOTER ARROW TAG

<script type ="text/javascript">
mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if(document.body.scrollTop > 100 || document.documentElement.scrollTop >100){
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
    }
    function topFuntion(){
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
-->

<script type ="text/javascript">
function fetch(){
  $.get("https://api.covid19api.com/summary",
  function (data){
    //console.log(data['Countries'].length);
    var tabval = document.getElementById('tabval');

    for(var i=1;i<(data['Countries'].length); i++){
      var x = tabval.insertRow();
      x.insertCell(0);
      tabval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
      tabval.rows[i].cells[0].style.background = '#7a4a91';
      tabval.rows[i].cells[0].style.color = '#fff';
      x.insertCell(1);
      tabval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
      tabval.rows[i].cells[1].style.background = '#4pp7d8';
      x.insertCell(2);
      tabval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
      tabval.rows[i].cells[2].style.background = '#4bb7d8';
      x.insertCell(3);
      tabval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
      tabval.rows[i].cells[3].style.background = '#af36e23';
      x.insertCell(4);
      tabval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
      tabval.rows[i].cells[4].style.background = '#a4bb7d8';
      x.insertCell(5);
      tabval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
      tabval.rows[i].cells[5].style.background = '#9cc850';
      
    }
  }
  
  );
}
</script>


</body>
</html>


<!-- Database connection -->


<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $symp = $_POST['coronasym'];
    $msg = $_POST['msg'];

    $chk = "";
    foreach($symp as $chk1){
        $chk .= $chk1." , ";
    }
    $insertquery = "insert into coronacase(username ,email	,mobile	,symp ,message	) values ('$username', '$email', '$mobile', '$chk', ' $msg' )";

    $query = mysqli_query($con , $insertquery);

    if($query){
        ?>
        <script>
        alert("insert succes")
        </script>
        <?php
    } else{
        ?>
        <script>
        alert("insert not succes")
        </script>
        <?php
    }
}
?>