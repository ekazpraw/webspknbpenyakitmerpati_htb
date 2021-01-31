<div class="page-header">
    <h1>Konsultasikan Penyakit Merpati Anda:</h1>
</div>
<?php
$success = false;
if($_POST){
    if(count($_POST[selected])>2){  
        $success = true;      
        include'hasil.php';
    }else{
        print_msg('Wajib Memilih Minimal 3 Gejala Penyakit!');
    }
}
if(!$success):?>
<form action="?m=konsultasi" method="post" name="myform">
    <div class="panel panel-default">
        <div class="panel-heading">        
            <h3 class="panel-title">Pilih Gejala Penyakit:</h3>
        </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
        <thead><tr>
            <th><input type="checkbox" id="checkAll"/></th>
            <th>No</th>
            <th>Nama Gejala</th>
        </tr></thead>
        <?php
        $rows = $db->get_results("SELECT * FROM bayes_gejala ORDER BY kode_gejala");
        $no = 0;
        foreach($rows as $row):?>
        <tr>
            <td><input type="checkbox" name="selected[]" id="gejala" value="<?=$row->kode_gejala?>"/></td>
            <td><?=++$no ?></td>
            <td><?=$row->nama_gejala?></td>            
        </tr>
        <?php endforeach; ?>
        </table> 
    </div>
    <div class="panel-footer">
        <button class="btn btn-primary" name="submit"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Lakukan Diagnosa!</button>
    </div>   
</div>
</form>
<script>
$(function(){
    $("#checkAll").click(function(){
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
});
</script>
<script language="JavaScript" type="text/javascript">
  var valid  = new Validator("myform");
    frmvalidator.EnableOnPageErrorDisplaySingleBox();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("selected[]","dontselect=0","Anda Belum Memilih Gejala Satupun!");
</script>
<?php endif?>