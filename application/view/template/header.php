<!DOCTYPE html>
<html lang="en">

	<?php require_once 'head.php'; ?>

	<body id="page-top">

		<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

			<a class="navbar-brand mr-1" href="#">Sample MVC</a>

			<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
				<i class="fas fa-bars"></i>
			</button>

		</nav>

		<div id="wrapper">

			<!-- Sidebar -->
			<ul class="sidebar navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url; ?>/application/view/admin/index.php">
						<i class="fas fa-fw fa-tachometer-alt"></i>
						<span>SAMPLE</span>
					</a>
				</li>
			</ul>