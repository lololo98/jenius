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
		<h1>Pilih Mata Pelajaran</h1>
	</div>
</div>
<!-- Popular -->
<div class="container">
	<div class="row" style="margin-top: 20px">
		<?php foreach($pelajaran as $data): ?>
			<div class="col-lg-3 button_box_col">
				<div class="button button_color_1 text-center trans_200">
					<a href="<?= base_url('jenjang/'.$jenjang.'/'.$kelas.'/'.$data->ID_PELAJARAN) ?>"><?= $data->PELAJARAN ?></a>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</div>
<!-- Footer -->