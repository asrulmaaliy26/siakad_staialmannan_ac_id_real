<?php
$mk = getDataRow('mata_kuliah', ['id' => $data['id_mk']]);
?>
<div align="center" style="font-family: 'Arial Bold', sans-serif; font-size:20px;font-weight:bold;">ABSENSI DAN JURNAL
	PERKULIAHAN</div>
<?php if ($mk['jenjang'] == 'S1') { ?>
	<div style="font-family: 'Arial Bold', sans-serif; font-size:20px; text-align:center;font-weight:bold;">FAKULTAS
		<?= strtoupper(getDataRow('prodi', ['singkatan' => $mk['Prodi']])['fakultas']); ?>
	</div>
	<div style="font-family: 'Arial Bold', sans-serif; font-size:20px; text-align:center;font-weight:bold;">PROGRAM STUDI
		<?= strtoupper(getDataRow('prodi', ['singkatan' => $mk['Prodi']])['nm_prodi']); ?>
	</div>
<?php } ?>
<?php if ($mk['jenjang'] == 'S2') { ?>
	<div style="font-family: 'Arial Bold', sans-serif; font-size:20px; text-align:center;font-weight:bold;">PROGRAM
		PASCASARJANA</div>
	<div style="font-family: 'Arial Bold', sans-serif; font-size:20px; text-align:center;font-weight:bold;">
		<?= strtoupper(getDataRow('prodi', ['singkatan' => $mk['Prodi']])['nm_prodi']); ?>
	</div>
<?php } ?>

<div style="font-family: 'Arial Bold', sans-serif; font-size:20px; text-align:center;font-weight:bold;">STAI AL-MANNAN
	TULUNGAGUNG</div>
<br>
<div align="center">
	<img src="<?php echo base_url(); ?>/assets/logo.png" alt="" style="width:5cm;height:5cm;" />
</div>
<br>
<table style="width: 100%; font-family: 'Arial Bold', sans-serif; font-size:16px; font-weight:bold;">
	<tr>
		<td style="width: 30%; padding-left: 20mm;">MATA KULIAH</td>
		<td style="width: 5%;">:</td>
		<td><?= strtoupper($mk['Mata_Kuliah']) ?></td>
	</tr>
	<tr>
		<td style="width: 30%; padding-left: 20mm;">DOSEN PEMBIMBING</td>
		<td style="width: 5%;">:</td>
		<td><?= getDataRow('data_dosen', ['Kode' => $mk['Kd_Dosen']])['Nama_Dosen']; ?></td>
	</tr>
	<tr>
		<td style="width: 30%; padding-left: 20mm;">SEMESTER / KET</td>
		<td style="width: 5%;">:</td>
		<td>SMT <?= $mk['SMT'] ?> / <?= $mk['Kelas'] ?></td>
	</tr>
</table>
<br>
<br>
<!--<div style="font-family: 'Arial Bold', sans-serif; font-size:18px; text-align:center;font-weight:bold;">INSTITUT AGAMA ISLAM BANI FATTAH TAMBAKBERAS JOMBANG</div>-->
<div style="font-family: 'Arial Bold', sans-serif; font-size:20px; text-align:center;font-weight:bold;">SEMESTER
	<?= getDataRow('tahun_akademik', ['kode' => $mk['Kd_Tahun']])['semester'] == '1' ? 'GASAL' : 'GENAP'; ?> TAHUN
	AKADEMIK
	<?= getDataRow('tahun_akademik', ['kode' => $mk['Kd_Tahun']])['tahunAkademik']; ?>
</div>
<br>
<!-- Menampilkan Qrcode-->
<div align="center">
	<img src="<?= $data['qrcode'] ?>" alt="" style="width:2.65cm;height:2.65cm;" />
</div>
<div style="page-break-after: always;"></div>