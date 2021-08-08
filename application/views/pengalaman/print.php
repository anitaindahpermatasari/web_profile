<!doctype html>
<html lang="en">

<head>
	<title>Cetak Pengalaman</title>
	<style>
		h1 {
			text-align: center;
		}
		table, 
		td, 
		th {
			border: 1px solid #ddd;
			text-align: left;
		}

		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, 
		td {
			padding: 15px;
		}
	</style>
</head>
<br><br><br><br>
<body>
	<form action="<?=base_url('admin/print_pengalaman');?>" method="POST">
	<h1>Laporan Pengalaman</h1>
	<table>
		<thead>
			<tr>
                <th>No</th>
                <th>ID User</th>
                <th>Nama Instansi</th>
				<th>Jenis Instansi</th>
				<th>Jabatan</th>
				<th>Tahun</th>
				<th>Tanggung Jawab</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if ( !empty($result) ) {
				foreach ($allpengalaman as $no => $pengalaman)
			?>
					<tr>
                        <th><?= $no + 1 ?></th>
                        <td><?= $pengalaman['id_user']; ?></td>
                        <td><?= $pengalaman['nama_instansi']; ?></td>
						<td><?= $pengalaman['jenis_instansi']; ?></td>
						<td><?= $pengalaman['jabatan']; ?></td>
						<td><?= $pengalaman['tahun']; ?></td>
						<td><?= $pengalaman['tanggung_jawab']; ?></td>
					</tr>
			<?php
			} else { ?>
				<tr>
					<td colspan="7" align="center">Belum ada data pada tabel pengalaman.</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	</form>
	<script>
		window.print();
	</script>
</body>

</html>
