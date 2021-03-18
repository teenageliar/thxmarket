<h1 style="text-align:center; margin:0px;">Jumlah yang sudah digenerate : <?php foreach($total->result_array() as $row):
 $t = $row['total']; echo $t;
endforeach;
?></h1>
<a style="margin:20px;" href="<?=base_url('token/simpan/').$t?>" class="btn btn-success btn-flat btn-block btn-lg"> 
Generate 1000 Token </a>