<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/styles/courses_styles.css') ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/styles/courses_responsive.css') ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/styles/elements_styles.css') ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/styles/elements_responsive.css') ?>">
<!-- Home -->
<div class="home">
	<div class="home_background_container prlx_parent">
		<div class="home_background prlx" style="background-image:url(<?= base_url('assets/front/images/courses_background.jpg') ?>)"></div>
	</div>
	<div class="home_content">
		<h1><?= $pelajaran->PELAJARAN ?> <small style="font-size: 40px; font-weignt: bold">(<?= $pelajaran->KELAS ?> <?= $pelajaran->JENJANG ?>)</small></h1><br>
		<h1 style="font-size: 20px; text-align: center">List bab mata pelajaran</h1>
	</div>
</div>
<!-- Popular -->
<div class="container">
	<div class="row" style="margin-top: 20px">
		<div class="col-lg-12 button_box_col">
		<?php $no=1; foreach($bab as $data): ?>
			<div class="card" style="margin-bottom: 10px;">
				<div class="card-body" style="padding: 20px">
					<h2 class="card-title mt-0"><?= $no++ .". ".$data->BAB ?></h2>
					<p class="card-text"><?= $data->KETERANGAN ?></p>
					<div class="vid text-center">
						<object width="425" height="350" data="http://www.youtube.com/v/<?= $data->VIDEO ?>" type="application/x-shockwave-flash"><param name="src" value="http://www.youtube.com/v/Ahg6qcgoay4" /></object>
					</div>
				</div>
			</div>
		<?php endforeach ?>
		</div>
	</div>
</div>
<!-- Footer -->