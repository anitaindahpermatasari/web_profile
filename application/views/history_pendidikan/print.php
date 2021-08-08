<!doctype html>
<html lang="en">

<head>
	<title>Cetak History Pendidikan</title>
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
	<form action="<?=base_url('admin/print_history_pendidikan');?>" method="POST">
	<h1>Laporan History Pendidikan</h1>
	<table>
		<thead>
			<tr>
                <th>No</th>
                <th>ID User</th>
                <th>Jenjang</th>
                <th>Nama Instansi</th>
				<th>Jurusan</th>
				<th>Tahun</th>
				<th>Nilai_Akhir</th>
				<th>Prestasi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if ( !empty($result) ) {
				foreach ($allhistory_pendidikan as $no => $history_pendidikan)
			?>
					<tr>
                        <th><?= $no + 1 ?></th>
                        <td><?= $history_pendidikan['id_user']; ?></td>
                        <td><?= $history_pendidikan['jenjang']; ?></td>
                        <td><?= $history_pendidikan['nama_instansi']; ?></td>
						<td><?= $history_pendidikan['jurusan']; ?></td>
						<td><?= $history_pendidikan['tahun']; ?></td>
						<td><?= $history_pendidikan['nilai_akhir']; ?></td>
						<td><?= $history_pendidikan['prestasi']; ?></td>
					</tr>
			<?php
			} else { ?>
				<tr>
					<td colspan="8" align="center">Belum ada data pada tabel history pendidikan.</td>
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
