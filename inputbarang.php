<?php
include("koneksi.php");//fungsi untuk gabung file//   
if(isset($_POST['simpan'])){
	$query_tambah_data="insert into t_barang(merek,harga)values
	      ('".$_POST['merek']."',
	       '".$_POST['harga']."')";
	 $proses_data=mysqli_query($rumah,$query_tambah_data);
	 if ($proses_data){
		 echo 'SUCCESS';
	 } else {
		 echo mysqli_error();
	 }
}	 
?>

<form method="POST" action=""><!---form untuk kirim data ke db--->
	<table border="1"><!---name harus sama dengan data base--->
	    <tr>
			<td>Nama Barang</td>
			<td><input type="text" name="merek"/></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="text" name="harga"/></td>
		</tr>
		<tr>
			<td><input type="submit" name="simpan"/></td>
		</tr>
	</table>
    </form>  