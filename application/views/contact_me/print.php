<!doctype html>
<html lang="en">

<head>
	<title>Cetak Contact Me</title>
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
	<form action="<?=base_url('admin/print_contact_me');?>" method="POST">
	<h1>Laporan Contact Me</h1>
	<table>
		<thead>
			<tr>
                <th>No</th>
                <th>ID User</th>
                <th>Email</th>
				<th>Github</th>
				<th>Nomor Telepon</th>
				<th>Instagram</th>
				<th>Youtube</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if ( !empty($result) ) {
				foreach ($allcontact_me as $no => $contact_me)
			?>
					<tr>
                        <th><?= $no + 1 ?></th>
                        <td><?= $contact_me['id_user']; ?></td>
                        <td><?= $contact_me['email']; ?></td>
						<td><?= $contact_me['github']; ?></td>
						<td><?= $contact_me['nomor_telepon']; ?></td>
						<td><?= $contact_me['instagram']; ?></td>
						<td><?= $contact_me['youtube']; ?></td>
					</tr>
			<?php
			} else { ?>
				<tr>
					<td colspan="7" align="center">Belum ada data pada tabel contact_me.</td>
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
