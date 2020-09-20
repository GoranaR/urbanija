<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href=style.css rel=stylesheet>
   
<?php wp_head(); ?>
</head>
<body>

<div class="container mw-100  header-color">



<div class="contact-header row justify-content-center">
<div class="box-customm poklici col-4" style="max-width:380px">
<div class=" media mediaa lift">
<svg width="3em" style="top:5px" height="3em" viewBox="0 0 16 16" class=" mr-3 bi phone-text bi-phone-vibrate" fill="white" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10 3H6a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM6 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H6z"/>
  <path fill-rule="evenodd" d="M8 12a1 1 0 1 0 0-2 1 1 0 0 0 0 2zM1.599 4.058a.5.5 0 0 1 .208.676A6.967 6.967 0 0 0 1 8c0 1.18.292 2.292.807 3.266a.5.5 0 0 1-.884.468A7.968 7.968 0 0 1 0 8c0-1.347.334-2.619.923-3.734a.5.5 0 0 1 .676-.208zm12.802 0a.5.5 0 0 1 .676.208A7.967 7.967 0 0 1 16 8a7.967 7.967 0 0 1-.923 3.734.5.5 0 0 1-.884-.468A6.967 6.967 0 0 0 15 8c0-1.18-.292-2.292-.807-3.266a.5.5 0 0 1 .208-.676zM3.057 5.534a.5.5 0 0 1 .284.648A4.986 4.986 0 0 0 3 8c0 .642.12 1.255.34 1.818a.5.5 0 1 1-.93.364A5.986 5.986 0 0 1 2 8c0-.769.145-1.505.41-2.182a.5.5 0 0 1 .647-.284zm9.886 0a.5.5 0 0 1 .648.284C13.855 6.495 14 7.231 14 8c0 .769-.145 1.505-.41 2.182a.5.5 0 0 1-.93-.364C12.88 9.255 13 8.642 13 8c0-.642-.12-1.255-.34-1.818a.5.5 0 0 1 .283-.648z"/>
</svg> 
  <div class="media-body">
    <h5 class="mt-0 phone-text">Pokličite nas: + 386 (0)41 403 110</h5>
  </div>
</div>
</div>

<div class="box-customm poklici col-4" style="max-width:380px ">
<div class="media lift">
<svg width="3em" style="top:5px" height="3em" viewBox="0 0 16 16" class="align-self-center mr-3 bi phone-text bi-mailbox" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z"/>
  <path fill-rule="evenodd" d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854z"/>
  <path d="M5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z"/>
</svg>

  <div class="media-body">
    <h5 class="mt-0 phone-text">Pišite nam: info@cistilni-servis.eu</h5>
  </div>
</div>
</div>
<div class="box-customm poklici col-4" style="max-width:380px ">
<div class="media">


  <a href="#"><div class="media-body">
    <h5 class="mt-0 poslji-text ">Pošljite Vašo Ponudbo</h5>
  </div></a>
</div>
</div>



</div>


  <div id="overlay" > </div>
  <div class="row justify-content-md-center">
    
    <div class="col-md-auto" style="padding-bottom: 20px">

    
<nav class="d-flex align-items-end navbar navbar-text navbar-expand-sm navbar-light overlay">
  <button class="navbar-toggler mb-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" onclick="on()"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    
    <ul class="border-topp navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url() ?>">DOMOV <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('/podjetje') ?>">O PODJETJU</a>
      </li>
      <li class="nav-item">
      <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">STORITVE</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="<?php echo site_url('/stanovanja-hise') ?>">Čiščenje stanovanj in hiš</a>
    <a href="<?php echo site_url('/poslovni-prostori') ?>">Čiščenje poslovnh prostorov</a>
    <a href="<?php echo site_url('/ciscenje-oken') ?>">Čiščenje oken na višini</a>
    <a href="<?php echo site_url('/zakljucna-gradbena-dela') ?>">Čiščenje v zaključnih gradbenih delih</a>
    <a href="<?php echo site_url('/specialna-ciscenja') ?>">Specialna čiščenja</a>
    <a href="<?php echo site_url('/vzdrzevalna-dela') ?>">Vzdrževalna dela</a>
    
  </div>
</div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('/reference') ?>">REFERENCE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('/galerija') ?>">GALERIJA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('/aktualno') ?>">AKTUALNO</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#kontakt">KONTAKT</a>
      </li>
    </ul>
  </div>
</nav>
</div>
</div> 
</div>

