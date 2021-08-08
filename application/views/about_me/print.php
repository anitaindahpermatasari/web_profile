<!doctype html>
<html lang="en">

<head>
	<title>Cetak About Me</title>
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
	<form action="<?=base_url('admin/print_about_me');?>" method="POST">
	<h1>Laporan About Me</h1>
	<table>
		<thead>
			<tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Alamat</th>
				<th>Nomor Telepon</th>
				<th>Tinggi Badan</th>
				<th>Berat Badan</th>
				<th>Nama Orang Tua</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if ( !empty($result) ) {
				foreach ($allabout_me as $no => $about_me)
			?>
					<tr>
                        <th><?= $no + 1 ?></th>
                        <td><?= $about_me['nama_lengkap']; ?></td>
                        <td><?= $about_me['umur']; ?></td>
                        <td><?= $about_me['jenis_kelamin']; ?></td>
                        <td><?= $about_me['tempat_lahir']; ?></td>
						<td><?= $about_me['tanggal_lahir']; ?></td>
						<td><?= $about_me['alamat']; ?></td>
						<td><?= $about_me['nomor_telepon']; ?></td>
						<td><?= $about_me['tinggi_badan']; ?></td>
						<td><?= $about_me['berat_badan']; ?></td>
						<td><?= $about_me['nama_orang_tua']; ?></td>
						<td><?= $about_me['status']; ?></td>
					</tr>
			<?php
			} else { ?>
				<tr>
					<td colspan="12" align="center">Belum ada data pada tabel about me.</td>
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
