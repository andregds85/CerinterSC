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


      <h1 class="header center orange-text">Ocupação de Leitos</h1>
      <div class="row center">
        <h5 class="header col s12 light"> Covid e não Covid<p> UTI e Enfermaria</p></h5>

      </div>

      <br><br>
    </div>
  </div>



<!-- ASSOCIACAO BENEFICENTE HOSPITALAR SAO CAMILO PERITIBA  -->  
<div class="container">
<ul class="collapsible">
  <li>
    <div class="collapsible-header">
      <i class="material-icons">airline_seat_individual_suite
</i>
      ASSOCIACAO BENEFICENTE HOSPITALAR SAO CAMILO PERITIBA
      <span class="new badge"></span></div>
    <div class="collapsible-body">
   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2689863");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



<!-- ASSOCIACAO BENEFICENTE HOSPITAL SAO LUCAS  -->  
  <li>
    <div class="collapsible-header">
      <i class="material-icons">airline_seat_individual_suite
</i>
      ASSOCIACAO BENEFICENTE HOSPITAL SAO LUCAS
      <span class="new badge"></span></div>
    <div class="collapsible-body">
   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2378116");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>


 

<!-- ASSOCIACAO HOSPITALAR ANGELINA MENEGHELLI  -->  
  <li>
    <div class="collapsible-header">
      <i class="material-icons">airline_seat_individual_suite
</i>
      ASSOCIACAO HOSPITALAR ANGELINA MENEGHELLI
      <span class="new badge"></span></div>
    <div class="collapsible-body">
   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2377659");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>





 

<!-- ACENI -->  
<li>
    <div class="collapsible-header">
      <i class="material-icons">airline_seat_individual_suite
</i>
      ACENI
      <span class="new badge"></span></div>
    <div class="collapsible-body">
   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/7274351");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>






<!-- ASSOCIACAO HOSPITALAR DE VARGEAO -->  
<li>
    <div class="collapsible-header">
      <i class="material-icons">airline_seat_individual_suite
</i>
      ASSOCIACAO HOSPITALAR DE VARGEAO
      <span class="new badge"></span></div>
    <div class="collapsible-body">
   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2411245");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>












































</ul>
</div>












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
