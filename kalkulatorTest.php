<?php  
include 'kalkulator.php';  
  
$r[0] = array('nama'=>'Fungsi Modulus : Skenario 1, ', 'hasil' => '');
$r[1] = array('nama'=>'Fungsi Modulus : Skenario 2, ', 'hasil' => '');  
$r[2] = array('nama'=>'Fungsi Perpangkatan : Skenario 1, ', 'hasil' => '');  
$r[3] = array('nama'=>'Fungsi Perpangkatan : Skenario 2, ', 'hasil' => '');  
$r[4] = array('nama'=>'Fungsi Akar Bilangan : Skenario 1, ', 'hasil' => '');  
$r[5] = array('nama'=>'Fungsi Akar Bilangan : Skenario 2, ', 'hasil' => '');
$r[6] = array('nama'=>'Fungsi Absolut : Skenario 1, ', 'hasil' => '');  
$r[7] = array('nama'=>'Fungsi Absolut : Skenario 2, ', 'hasil' => '');
$r[8] = array('nama'=>'Fungsi Pembulatan Pecahan : Skenario 1, ', 'hasil' => '');  
$r[9] = array('nama'=>'Fungsi Pembulatan Pecahan : Skenario 2, ', 'hasil' => '');
$r[10] = array('nama'=>'Fungsi Min : Skenario 1, ', 'hasil' => '');  
$r[11] = array('nama'=>'Fungsi Min : Skenario 2, ', 'hasil' => '');
$r[12] = array('nama'=>'Fungsi Max : Skenario 1, ', 'hasil' => '');  
$r[13] = array('nama'=>'Fungsi Max : Skenario 2, ', 'hasil' => '');
$r[14] = array('nama'=>'Fungsi Sin : Skenario 1, ', 'hasil' => '');  
$r[15] = array('nama'=>'Fungsi Sin : Skenario 2, ', 'hasil' => '');
$r[16] = array('nama'=>'Fungsi Cos : Skenario 1, ', 'hasil' => '');  
$r[17] = array('nama'=>'Fungsi Cos : Skenario 2, ', 'hasil' => '');
$r[18] = array('nama'=>'Fungsi Tan : Skenario 1, ', 'hasil' => '');  
$r[19] = array('nama'=>'Fungsi Tan : Skenario 2, ', 'hasil' => '');
// $r[20] = array('nama'=>'Fungsi assd : Skenario 1, ', 'hasil' => '');  
// $r[21] = array('nama'=>'Fungsi assd : Skenario 2, ', 'hasil' => '');

  
$o = new kalkulator();  
  
$r[0]['hasil'] = ($o->modulus( 1,3) == 1 ) ? 'Berhasil' : 'Gagal';  
$r[1]['hasil'] = ($o->modulus(-2,3) == 1 ) ? 'Berhasil' : 'Gagal';  
$r[2]['hasil'] = ($o->pangkat( 3,1) == 3 ) ? 'Berhasil' : 'Gagal';  
$r[3]['hasil'] = ($o->pangkat( 5,3) == 25) ? 'Berhasil' : 'Gagal';  
$r[4]['hasil'] = ($o->akar( 4 ) == 2 ) ? 'Berhasil' : 'Gagal';  
$r[5]['hasil'] = ($o->akar( 2 ) == 2 ) ? 'Berhasil' : 'Gagal'; 
$r[6]['hasil'] = ($o->selisih( 10 , 20 ) == 10 ) ? 'Berhasil' : 'Gagal';  
$r[7]['hasil'] = ($o->selisih( 5 , 2 ) == 1 ) ? 'Berhasil' : 'Gagal'; 
$r[8]['hasil'] = ($o->pembulatan( 3.5 ) == 4 ) ? 'Berhasil' : 'Gagal';  
$r[9]['hasil'] = ($o->pembulatan( 5.1 ) == 6 ) ? 'Berhasil' : 'Gagal'; 
$r[10]['hasil'] = ($o->fmin( 2, 1, 3 ) == 1 ) ? 'Berhasil' : 'Gagal';  
$r[11]['hasil'] = ($o->fmin( 7, 9, 2 ) == 7 ) ? 'Berhasil' : 'Gagal'; 
$r[12]['hasil'] = ($o->fmax( 23, 4, 22 ) == 23 ) ? 'Berhasil' : 'Gagal';  
$r[13]['hasil'] = ($o->fmax( 3, 5, 1 ) == 3 ) ? 'Berhasil' : 'Gagal'; 
$r[14]['hasil'] = ($o->fsin( 0 ) == 0 ) ? 'Berhasil' : 'Gagal';  
$r[15]['hasil'] = ($o->fsin( 0 ) == 1 ) ? 'Berhasil' : 'Gagal'; 
$r[16]['hasil'] = ($o->fcos( 0 ) == 1 ) ? 'Berhasil' : 'Gagal';  
$r[17]['hasil'] = ($o->fcos( 0 ) == 0 ) ? 'Berhasil' : 'Gagal'; 
$r[18]['hasil'] = ($o->ftan( 0 ) == 0 ) ? 'Berhasil' : 'Gagal';  
$r[19]['hasil'] = ($o->ftan( 0 ) == 1 ) ? 'Berhasil' : 'Gagal'; 
  
  
foreach($r as $val) {  
 echo $val['nama'].$val['hasil']."<br>";   
}  
  
?> 

<!-- <?php 
$a = 1;
$b = 3;
echo $a % $b;
?>  -->