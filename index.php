<?php include'functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="icon" href="image/w_logo.png"/>
    <title>SISPUNGTI - Sistem Pakar Penyakit Merpati</title>
    <link href="assets/css/darkly-bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/general.css" rel="stylesheet"/>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>           
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
<div class="container">
<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="?">SISPUNGTI</a>
</div>
<div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
    <?php if($_SESSION['login']):?>
        <li><a href="?m=penyakit"><span class="glyphicon glyphicon-pushpin"></span>&nbsp;&nbsp;Penyakit</a></li>
        <li><a href="?m=gejala"><span class="glyphicon glyphicon-flash"></span>&nbsp;&nbsp;Gejala</a></li>
        <li><a href="?m=aturan"><span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;Aturan</a></li>
        <li><a href="?m=password"><span class="glyphicon glyphicon-lock"></span>&nbsp;&nbsp;Kata Sandi</a></li>        
        <li><a href="aksi.php?act=logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;Keluar</a></li>   
    <?php else:?>
        <li><a href="?m=login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Masuk</a></li>
        <li><a href="?m=konsultasi"><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;Konsultasi</a></li>
        <li><a href="?m=ebook"><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;Unduh E-Book</a></li>
    <?php endif?>
    </ul>          
</div>
</div>
</nav>
<div class="container">
<?php
    if(file_exists($mod.'.php')){
    if($_SESSION['login'] || $mod=='login' || $mod=='konsultasi' || $mod=='ebook' || $mod=='thumbs'){ include $mod.'.php'; }
else
    { redirect_js('index.php?m=login'); }}
else
    { include 'home.php'; }
?>
</div>
<footer class="footer bg-primary">
<div class="container">
    <p>Copyright &copy;<?=date('Y')?> SISPUNGTI - Sistem Pakar Penyakit Merpati<span class="pull-right"></span></p>
</div>
</footer>
</body>
</html>