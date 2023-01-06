@extends('especial.app')
@section('content')
<?php 
use App\Http\Controllers\TaxaController;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>CerinterSC</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>


<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="http://www.cerintersc.com.br" class="brand-logo">CerinterSC</a>
      <ul class="right hide-on-med-and-down">
    
        <li><a href="http://www.cerintersc.com.br">Inicio</a></li>   
     
      </ul>
      <ul id="nav-mobile" class="sidenav">
      <li><a href="http://www.cerintersc.com.br">Inicio</a></li>   
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>



<div class="container">
<ul class="collapsible">
  <li>
    <div class="collapsible-header">
      <i class="material-icons">people</i>
      {{ Auth::user()->name}}
      <span class="new badge"></span></div>
    <div class="collapsible-body"><p>{{ Auth::user()->email}}</p>
   <p>{{ Auth::user()->id}}</p>
  </div>
  </li>
</ul>
</div>

    <h1 class="header center orange-text">Cnes</h1>
      <div class="row center">
        <h5 class="header col s12 light"> Cnes</p></h5>

      </div>

      <br><br>
    </div>
  </div>
  

 
  <!--  ACeni -->
<div class="container">
<ul class="collapsible">
  <li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital</i>
      Aceni / 7274351
      <span class="new badge"></span></div>
    <div class="collapsible-body">
   <?php
$curlHandler = curl_init();
$token = '';
curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/7274351',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        'Accept: application/json',
        'Authorization: Bearer ' . $token
    ],
]);
$response = curl_exec($curlHandler);
curl_close($curlHandler);
/*
print_r($response);
*/
$hosp=(explode(',', $response)); 
?>

              
<?php
for ($x = 0; $x <= 36; $x++) {
  echo $hosp[$x];
  echo "</br>"; 
}
?>


  </div>
  </li>
</ul>
</div>
</div>

<!-- Encerra o bloco de comando -->










<!--  ASSOCIACAO BENEFICENTE HOSPITALAR SAO CAMILO PERITIBA -->
<div class="container">
<ul class="collapsible">
  <li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital</i>
      ASSOCIACAO BENEFICENTE HOSPITALAR SAO CAMILO PERITIBA / 2689863
      <span class="new badge"></span></div>
    <div class="collapsible-body">
   <?php
$curlHandler = curl_init();
$token = '';
curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2689863',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        'Accept: application/json',
        'Authorization: Bearer ' . $token
    ],
]);
$response = curl_exec($curlHandler);
curl_close($curlHandler);
/*
print_r($response);
*/
$hosp=(explode(',', $response)); 
?>

              
<?php
for ($x = 0; $x <= 36; $x++) {
  echo $hosp[$x];
  echo "</br>"; 
}
?>


  </div>
  </li>
</ul>
</div>
</div>

<!-- Encerra o bloco de comando -->




  <!--  ASSOCIACAO BENEFICENTE HOSPITAL SAO LUCAS -->
  <div class="container">
<ul class="collapsible">
  <li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital</i>
      ASSOCIACAO BENEFICENTE HOSPITAL SAO LUCAS / 2378116
      <span class="new badge"></span></div>
    <div class="collapsible-body">
   <?php
$curlHandler = curl_init();
$token = '';
curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2378116',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        'Accept: application/json',
        'Authorization: Bearer ' . $token
    ],
]);
$response = curl_exec($curlHandler);
curl_close($curlHandler);
/*
print_r($response);
*/
$hosp=(explode(',', $response)); 
?>

              
<?php
for ($x = 0; $x <= 36; $x++) {
  echo $hosp[$x];
  echo "</br>"; 
}
?>


  </div>
  </li>
</ul>
</div>
</div>

<!-- Encerra o bloco de comando -->



 <!-- ASSOCIACAO HOSPITALAR ANGELINA MENEGHELLI -->
 <div class="container">
<ul class="collapsible">
  <li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital</i>
      ASSOCIACAO HOSPITALAR ANGELINA MENEGHELLI / 2378116
      <span class="new badge"></span></div>
    <div class="collapsible-body">
   <?php
$curlHandler = curl_init();
$token = '';
curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2378116',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        'Accept: application/json',
        'Authorization: Bearer ' . $token
    ],
]);
$response = curl_exec($curlHandler);
curl_close($curlHandler);
/*
print_r($response);
*/
$hosp=(explode(',', $response)); 
?>

              
<?php
for ($x = 0; $x <= 36; $x++) {
  echo $hosp[$x];
  echo "</br>"; 
}
?>


  </div>
  </li>
</ul>
</div>
</div>

<!-- Encerra o bloco de comando -->






 <!--ASSOCIACAO HOSPITALAR DE VARGEAO -->
 <div class="container">
<ul class="collapsible">
  <li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital</i>
      ASSOCIACAO HOSPITALAR DE VARGEAO / 2411245
      <span class="new badge"></span></div>
    <div class="collapsible-body">
   <?php
$curlHandler = curl_init();
$token = '';
curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2411245',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        'Accept: application/json',
        'Authorization: Bearer ' . $token
    ],
]);
$response = curl_exec($curlHandler);
curl_close($curlHandler);
/*
print_r($response);
*/
$hosp=(explode(',', $response)); 
?>

              
<?php
for ($x = 0; $x <= 36; $x++) {
  echo $hosp[$x];
  echo "</br>"; 
}
?>


  </div>
  </li>
</ul>
</div>
</div>

<!-- Encerra o bloco de comando -->




 <!--ASSOCIACAO HOSPITALAR PE JOAO BERTHIER -->
 <div class="container">
<ul class="collapsible">
  <li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital</i>
      ASSOCIACAO HOSPITALAR PE JOAO BERTHIER / 2538571
      <span class="new badge"></span></div>
    <div class="collapsible-body">
   <?php
$curlHandler = curl_init();
$token = '';
curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2411245',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        'Accept: application/json',
        'Authorization: Bearer ' . $token
    ],
]);
$response = curl_exec($curlHandler);
curl_close($curlHandler);
/*
print_r($response);
*/
$hosp=(explode(',', $response)); 
?>

              
<?php
for ($x = 0; $x <= 36; $x++) {
  echo $hosp[$x];
  echo "</br>"; 
}
?>


  </div>
  </li>
</ul>
</div>
</div>

<!-- Encerra o bloco de comando -->










  <footer class="page-footer orange">
    <div class="container">
    <div class="footer-copyright">
      <div class="container">
       <a class="orange-text text-lighten-3" href="http://cerintersc.com.br">CerinterSC</a>
      </div>
    </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <script src="../js/init.js"></script>
    <script src="../js/materialize.js"></script>
  </body>
</html>



@endsection



