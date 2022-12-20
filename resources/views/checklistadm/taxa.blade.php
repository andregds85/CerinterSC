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








      <h1 class="header center orange-text">Ocupação de Leitos</h1>
      <div class="row center">
        <h5 class="header col s12 light">Taxa de Ocupação de Leitos de UTI e Enfermaria</h5>
      </div>
   
      <br><br>
    </div>
  </div>






  <?php
/*
$curlHandler = curl_init();
$token = '';

curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'http://api-leitos.saude.sc.gov.br:3000/csv/taxaOcupacao',
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


/*
$hosp=(explode(',', $response)); 



echo $hosp[0]; 
echo " | ";
echo $hosp[1]; 

*/
?>



<div class="container">
<ul class="collapsible">
  <li>
    <div class="collapsible-header">
      <i class="material-icons">filter_drama</i>
      First
      <span class="new badge">4</span></div>
    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
  </li>
  <li>
    <div class="collapsible-header">
      <i class="material-icons">place</i>
      Second
      <span class="badge">1</span></div>
    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
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

