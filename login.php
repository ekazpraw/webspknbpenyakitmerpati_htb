<div class="page-header">
    <div align="center"><img src="./image/w_logo.png" width="200px" style="setImageOpacity(3.3);"></div><br>
    <h1>Silakan Masuk:</h1>
</div>
<div class="row">
<div class="col-md-4">        
<?php if($_POST) include 'aksi.php'; ?>
<form class="form-signin" action="?m=login" method="post">
<div class="form-group">
    <label>Nama Pengguna:</label>
    <input type="text" class="form-control" placeholder="Masukkan Nama Pengguna Anda!" name="user" autofocus />
</div>
<div class="form-group">            
    <label>Kata Sandi:</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Masukkan Kata Sandi Anda!" name="pass" />
<p class="help-block"></p>    
</div>      
    <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Masuk</button>                  
</form>      
</div>
</div>