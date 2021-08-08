<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/utama/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/utama/') ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/utama/') ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="sidebar-brand-icon rotate-n-0">
					<img src="<?= base_url(); ?>assets/img/foto.png" height="50" width="50">
				</div>
				<div class="sidebar-brand-text mx-0">WEB PROFILE</div>
			</a>

			<!-- Divider -->
			<div class="m-t-5">
				<hr class="sidebar-divider">

				<!-- Heading -->
				<div class="sidebar-heading">
					ABOUT ME
				</div>

				<!-- Nav Item - Dashboard -->
				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url('admin/about_me/') ?>">
						<i class="fas fa-fw fa-tachometer-alt"></i>
						<span>About Me</span></a>

					<!-- Divider -->
					<hr class="sidebar-divider">

					<!-- Heading -->
					<div class="sidebar-heading">
						HISTORY PENDIDIKAN
					</div>

				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url('admin/history_pendidikan/') ?>">
						<i class="fas fa-users"></i>
						<span>History Pendidikan</span></a>
				</li>

				<!-- Divider -->
				<hr class="sidebar-divider">

				<!-- Heading -->
				<div class="sidebar-heading">
					PENGALAMAN
				</div>

				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url('admin/pengalaman/') ?>">
						<i class="fas fa-utensils"></i>
						<span>Pengalaman</span></a>

					<!-- Divider -->
					<hr class="sidebar-divider">

					<!-- Heading -->
					<div class="sidebar-heading">
						CONTACT ME
					</div>

				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url('admin/contact_me/') ?>">
						<i class="fas fa-filter"></i>
						<span>Contact Me</span></a>
				</li>


				<!-- Divider -->
				<hr class="sidebar-divider d-none d-md-block">

				<!-- Sidebar Toggler (Sidebar) -->
				<div class="text-center d-none d-md-inline">
					<button class="rounded-circle border-0" id="sidebarToggle"></button>
				</div>

		</ul>
		<!-- End of Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-dark" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>


					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

					<!-- Nav Item - User Information -->
					<li class="nav-item dropdown no-arrow">
						<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>

						</a>
						<!-- Dropdown - User Information -->
						<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
							<a class="dropdown-item" href="#">
								<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
								Profile
							</a>
							<a class="dropdown-item" href="#">
								<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
								Pengaturan
							</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
								<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
								Logout
							</a>
						</div>
					</li>

					</ul>

					</nav>

					<div class="row">
						<?=$this->session->flashdata('message');?>
					</div>
					<!-- End of Topbar -->

				<?php
                defined('BASEPATH') or exit('No direct script access allowed');
                ?>
                <!DOCTYPE html>
                <html lang="en">
				<section class="resume-section" id="pengalaman">
						<div class="resume-section-content">
							<div class="card " style="width: 60rem; padding: 20px 20px 20px 20px; margin:auto;">
                   			<div class="mt-3">
							<h align="center">Pengalaman</h>
								<table class="table table-hover mt-3 table-primary text-black">
                                <thead>
                                    <tr class="table-primary">
                                        <th scope="col">No</th>
                                        <th scope="col">ID User</th>
                                        <th scope="col">Nama Instansi</th>
										<th scope="col">Jenis Instansi</th>
										<th scope="col">Jabatan</th>
										<th scope="col">Tahun</th>
										<th scope="col">Tanggung Jawab</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($pengalaman_list as $list) {
                                    ?>
                                        <tr>
                                            <td><?= $list['id_pengalaman']; ?></td>
                                            <td><?= $list['id_user']; ?></td>
                                            <td><?= $list['nama_instansi']; ?></td>
											<td><?= $list['jenis_instansi']; ?></td>
											<td><?= $list['jabatan']; ?></td>
											<td><?= $list['tahun']; ?></td>
											<td><?= $list['tanggung_jawab']; ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
							</div>
							</div>
						</div>
					</section>
				</html>
