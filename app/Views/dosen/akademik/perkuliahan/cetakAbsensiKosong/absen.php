<style>
	tr,
	td {
		height: 30px;
		vertical-align: middle;
	}

	.qrcode {
		background-image: url(<?= $data['qrcode'] ?>);
		background-repeat: no-repeat;
		background-size: 300px 300px;
		float: right;
		padding-right: 0.5cm;
		width: 2.7cm;
		height: 2.7cm;
	}

	body {
		margin: 0;
		padding: 0;
		font-family: Arial, Helvetica, sans-serif;
	}

	.header-absen {
		width: 100%;
		margin-top: 5mm;
	}

	.header-absen h3 {
		margin: 2px 0;
		text-align: center;
		font-size: 14px;
		font-weight: bold;
	}

	.info-table {
		width: 100%;
		border-collapse: collapse;
		font-size: 14px;
		font-weight: bold;
	}

	.info-table td {
		padding: 2px 4px;
		vertical-align: top;
	}

	.label {
		width: 22%;
		white-space: nowrap;
	}

	.titik {
		width: 2%;
	}

	.qr-kanan {
		position: absolute;
		right: 10mm;
		top: 10mm;
	}

	.label {
		width: 18%;
		padding-left: 5mm;
	}

	.titik {
		width: 2%;
	}
</style>
<?php
$mk = getDataRow('mata_kuliah', ['id' => $data['id_mk']]);
?>

<div class="header-absen">

	<div class="qr-kanan">
		<img src="<?= $data['qrcode'] ?>" width="90">
	</div>

	<h3>DAFTAR HADIR MAHASISWA</h3>

	<?php if ($mk['jenjang'] == 'S2') { ?>
		<h3>PROGRAM PASCASARJANA</h3>
	<?php } ?>

	<h3>STAI AL-MANNAN TULUNGAGUNG</h3>

	<h3>
		SEMESTER
		<?= getDataRow('tahun_akademik', ['kode' => $mk['Kd_Tahun']])['semester'] == '1' ? 'GASAL' : 'GENAP'; ?>
		TAHUN AKADEMIK
		<?= getDataRow('tahun_akademik', ['kode' => $mk['Kd_Tahun']])['tahunAkademik']; ?>
	</h3>

</div>


<table style="width:100%; font-family: Arial; font-size:14px; font-weight:bold;">
	<tr>
		<td class="label">FAKULTAS</td>
		<td class="titik">:</td>
		<td><?= strtoupper(getDataRow('prodi', ['singkatan' => $mk['Prodi']])['fakultas']); ?></td>

		<td class="label">PROGRAM STUDI</td>
		<td class="titik">:</td>
		<td><?= strtoupper(getDataRow('prodi', ['singkatan' => $mk['Prodi']])['nm_prodi']); ?></td>
	</tr>

	<tr>
		<td class="label">SEMESTER</td>
		<td class="titik">:</td>
		<td>SMT
			<?= $mk['SMT'] ?> /
			<?= $mk['Kelas'] ?>
		</td>
		<td class="label">MATA KULIAH</td>
		<td class="titik">:</td>
		<td><?= strtoupper($mk['Mata_Kuliah']); ?></td>
	</tr>
</table>
<br>
<div>
	<table style="width:100%; font-family: 'Arial Bold', sans-serif; font-size:11px;" border="1">
		<thead>
			<tr>
				<th class="center" rowspan="2">No</th>
				<th class="center" rowspan="2">Nama</th>
				<th class="center" rowspan="2">NIM</th>
				<th class="center" colspan="16">Pertemuan</th>

				<th class="center" rowspan="2">JML</th>
			</tr>
			<tr>
				<th class="center">Ke-1</th>
				<th class="center">Ke-2</th>
				<th class="center">Ke-3</th>
				<th class="center">Ke-4</th>
				<th class="center">Ke-5</th>
				<th class="center">Ke-6</th>
				<th class="center">Ke-7</th>
				<th class="center">Ke-8</th>
				<th class="center">Ke-9</th>
				<th class="center">Ke-10</th>
				<th class="center">Ke-11</th>
				<th class="center">Ke-12</th>
				<th class="center">Ke-13</th>
				<th class="center">Ke-14</th>
				<th class="center">Ke-15</th>
				<th class="center">Ke-16</th>
			</tr>
		</thead>
		<tbody>
			<?php

			if (!empty($data['list_mhs'])) {
				$no = 0;
				foreach ($data['list_mhs'] as $list) {
					$id_data_diri = getDataRow('histori_pddk', ['id_his_pdk' => $list['id_his_pdk']])['id_data_diri'];
					$no++;
					?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= strtoupper(getDataRow('db_data_diri_mahasiswa', ['id' => $id_data_diri])['Nama_Lengkap']); ?>
						</td>
						<td><?= getDataRow('histori_pddk', ['id_his_pdk' => $list['id_his_pdk']])['NIM']; ?></td>
						<td style="text-align:center; font-size:6px;"></td>
						<td style="text-align:center; font-size:6px;"></td>
						<td style="text-align:center; font-size:6px;"></td>
						<td style="text-align:center; font-size:6px;"></td>
						<td style="text-align:center; font-size:6px;"></td>
						<td style="text-align:center; font-size:6px;"></td>
						<td style="text-align:center; font-size:6px;"></td>
						<td style="text-align:center; font-size:6px;"></td>
						<td style="text-align:center; font-size:6px;"></td>
						<td style="text-align:center; font-size:6px;"></td>
						<td style="text-align:center; font-size:6px;"></td>
						<td style="text-align:center; font-size:6px;"></td>
						<td style="text-align:center; font-size:6px;"></td>
						<td style="text-align:center; font-size:6px;"></td>
						<td style="text-align:center; font-size:6px;"></td>
						<td style="text-align:center; font-size:6px;"></td>
						<td style="text-align:center; "></td>
					</tr>

				<?php }
			} else { ?>
				<tr>
					<td style="text-align:center; " colspan="20">Belum Ada Mahasiswa Yang KRS</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>

</div>
<div style="font-size:10px;">* Bagi Mahasiswa/i yang namanya belum tercantum pada absensi dan belum memiliki NIM, segera
	konfirmasi ke bagian BAAK (Badan Akademik dan Kemahasiswaan)</div>
<br>
<div>
	<table style="width:100%; font-family: 'Arial Bold', sans-serif; font-size:12px;">

		<tbody>

			<tr>
				<td width="60%" style="vertical-align: top;">
					Dosen<br><br><br><br><br><br><br><strong><u><?= getDataRow('data_dosen', ['Kode' => $mk['Kd_Dosen']])['Nama_Dosen']; ?></u></strong><br><?= getDataRow('data_dosen', ['Kode' => $mk['Kd_Dosen']])['NIY']; ?>
				</td>
				<td width="40%" style="vertical-align: top;">Ketua
					Prodi<br><br><br><br><br><br><br><strong><u><?= getDataRow('prodi', ['singkatan' => $mk['Prodi']])['kaprodi']; ?></u></strong><br><?= getDataRow('prodi', ['singkatan' => $mk['Prodi']])['niy']; ?>
				</td>

			</tr>
		</tbody>
	</table>
</div>
<div style="page-break-after: always;"></div>