<?php
include_once "../library/inc.sesadmin.php";   // Validasi halaman harus Login
include_once "../library/inc.connection.php"; // Membuka koneksi
include_once "../library/inc.library.php";    // Membuka librari peringah fungsi

# UNTUK PAGING (PEMBAGIAN HALAMAN)
$baris 	= 50;
$hal	= isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM pelanggan";
$pageQry = mysql_query($pageSql, $koneksidb) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$maksData= ceil($jml/$baris);
?>
<b><h2>INFORME CLIENTES</h2></b>
<table class="table-list" width="800" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td width="25" align="center" bgcolor="#CCCCCC"><strong>Nro</strong></td>
    <td width="101" bgcolor="#CCCCCC"><strong>Nro. Cliente </strong></td>
    <td width="179" bgcolor="#CCCCCC"><strong>Nombre Cliente </strong></td>
    <td width="70" bgcolor="#CCCCCC"><strong>Nro. Telefono</strong></td>
    <td width="105" bgcolor="#CCCCCC"><strong>Nro. Celular </strong></td>
    <td width="144" bgcolor="#CCCCCC"><strong> Correo Electronico  </strong></td>
    <td width="140" bgcolor="#CCCCCC"><strong>Usuario</strong></td>
  </tr>
  <?php
	$mySql = "SELECT * FROM pelanggan ORDER BY kd_pelanggan DESC LIMIT $hal, $baris";
	$myQry = mysql_query($mySql, $koneksidb)  or die ("Query salah : ".mysql_error());
	$nomor = $hal; 
	while ($myData = mysql_fetch_array($myQry)) {
		$nomor++;
	?>
  <tr>
    <td align="center"><?php echo $nomor; ?></td>
    <td><?php echo $myData['kd_pelanggan']; ?></td>
    <td><?php echo $myData['nm_pelanggan']; ?></td>
    <td><?php echo $myData['no_telepon']; ?></td>
    <td><?php echo $myData['mobile']; ?></td>
    <td><?php echo $myData['email']; ?></td>
    <td><?php echo $myData['username']; ?></td>
  </tr>
<?php } ?>
  <tr>
    <td colspan="3" bgcolor="#CCCCCC"><b>Numero de Datos:</b> <?php echo $jml; ?> </td>
    <td colspan="4" align="right" bgcolor="#CCCCCC"><b>Pagina de :</b>
      <?php
	for ($h = 1; $h <= $maksData; $h++) {
		$list[$h] = $baris * $h - $baris;
		echo " <a href='?open=Laporan-Pelanggan&hal=$list[$h]'>$h</a> ";
	}
	?></td>
  </tr>
</table>
