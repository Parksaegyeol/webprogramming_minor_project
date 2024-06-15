<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= (isset($g_title) && $g_title != '') ? $g_title : ''; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

<?php
if(isset($js_array)) {
  foreach($js_array AS $var) {
    echo '<script src="'.$var.'?v='. date('YmdHis') .'"></script>'.PHP_EOL;
  }
}  


?>





</head>




<body>
  
<div class="container">
  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
   <img src="images/세종대 로고.jpg"  style="width:5rem;"class="me-2">
      <span class="fs-4">세종대학교</span>
    </a>








    <ul class="nav nav-pills">
      <li class="nav-item"><a href="./index.php" class="nav-link active" aria-current="page">Home</a></li>
      <li class="nav-item"><a href="./login.php" class="nav-link">로그인</a></li>
      <li class="nav-item"><a href="./stipulation.php" class="nav-link">회원가입</a></li>
    </ul>
  </header>
  </div>
  