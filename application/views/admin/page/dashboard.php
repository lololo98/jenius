<div class="content-wrapper">
	<div class="row">
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
			<div class="card card-statistics">
				<div class="card-body">
					<div class="clearfix">
						<div class="float-left">
							<i class="mdi mdi-account text-danger icon-lg"></i>
						</div>
						<div class="float-right">
							<p class="mb-0 text-right">User</p>
							<div class="fluid-container">
								<h3 class="font-weight-medium text-right mb-0">
									<?= $user ?>
								</h3>
							</div>
						</div>
					</div>
					<p class="text-muted mt-3 mb-0">
						<i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Total pengguna aktif
					</p>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
			<div class="card card-statistics">
				<div class="card-body">
					<div class="clearfix">
						<div class="float-left">
							<i class="mdi mdi-receipt text-warning icon-lg"></i>
						</div>
						<div class="float-right">
							<p class="mb-0 text-right">Pelajaran</p>
							<div class="fluid-container">
								<h3 class="font-weight-medium text-right mb-0">
									<?= $pel ?>
								</h3>
							</div>
						</div>
					</div>
					<p class="text-muted mt-3 mb-0">
						<i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Total pelajaran yang di sediakan
					</p>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
			<div class="card card-statistics">
				<div class="card-body">
					<div class="clearfix">
						<div class="float-left">
							<i class="mdi mdi-poll-box text-success icon-lg"></i>
						</div>
						<div class="float-right">
							<p class="mb-0 text-right">Bab</p>
							<div class="fluid-container">
								<h3 class="font-weight-medium text-right mb-0">
									<?= $bab ?>
								</h3>
							</div>
						</div>
					</div>
					<p class="text-muted mt-3 mb-0">
						<i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Total bab dan video yang disediakan
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 grid-margin">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Pelajaran paling banyak dilihat</h4>
					<div class="table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Jenjang</th>
									<th>Pelajaran</th>
									<th width="100">Total Pengunjung</th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1; foreach ($pelajaran as $data): ?>
								<tr>
									<td class="font-weight-medium">
										<?= $no++ ?>
									</td>
									<td>
										<?= $data->JENJANG ?>
									</td>
									<td>
										<?= $data->PELAJARAN ?>
									</td>
									<td>
										<?= $data->JML_KUNJUNGAN ?>
									</td>
								</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
