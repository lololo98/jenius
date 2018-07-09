<nav class="sidebar sidebar-offcanvas" id="sidebar">
	<ul class="nav">
		<li class="nav-item nav-profile">
			<div class="nav-link">
				<div class="user-wrapper">
					<div class="profile-image">
						<img src="<?= site_url('assets/admin/images/faces/face2.jpg') ?>" alt="profile image">
					</div>
					<div class="text-wrapper">
						<p class="profile-name">Admin</p>
						<div>
							<small class="designation text-muted">Manager</small>
							<span class="status-indicator online"></span>
						</div>
					</div>
				</div>
			</div>
		</li>
		<li class="nav-item <?= $idh=='dashboard'?'active':'' ?>">
			<a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
				<i class="menu-icon mdi mdi-television"></i>
				<span class="menu-title">Dashboard</span>
			</a>
		</li>
		<li class="nav-item <?= $idh=='pelajaran'?'active':'' ?>">
			<a class="nav-link" href="<?= site_url('admin/pelajaran') ?>">
				<i class="menu-icon mdi mdi-backup-restore"></i>
				<span class="menu-title">Pelajaran</span>
			</a>
		</li>
		<li class="nav-item <?= $idh=='bab'?'active':'' ?>">
			<a class="nav-link" href="<?= site_url('admin/bab') ?>">
				<i class="menu-icon mdi mdi-chart-line"></i>
				<span class="menu-title">Bab</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?= base_url('admin/logout') ?>">
				<i class="menu-icon mdi mdi-lock"></i>
				<span class="menu-title">Logout</span>
			</a>
		</li>
	</ul>
</nav>
