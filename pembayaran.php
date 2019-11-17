<?php
include("koneksi.php");
if(isset($_POST['simpan'])){
	$query_tambah_data="insert into t_pembayaran(merek,qty,harga) values
	('".$_POST['Merek']."',
	 '".$_POST['Qty']."',
	 '".$_POST['Harga']."')";
	 $proses_data=mysqli_query($rumah,$query_tambah_data);
	 if ($proses_data){
		 echo '<br> SUCCESS </br>';
	 } else {
		 echo mysqli_error();
	 }
}	 
?>
<form method="POST" action="">
<table border="1">
 <tr>
     <td>Nama Barang </td>
     <td><input name="Merek" type="text"></td>
 </tr>
  <tr>
     <td>Qty </td>
     <td><input name="Qty" type="number"></td>
 </tr>
  <tr>
     <td>Harga </td>
     <td><input name="Harga" type="number"></td>
 </tr>
 <tr>
     <td><input name="simpan" type="submit"></td>
 </tr>
 </table>
 </form>
