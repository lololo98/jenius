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
		<h1>Pilih Kelas </h1>
	</div>
</div>
<!-- Popular -->
<div class="container">
	<div class="row" style="margin-top: 20px">
		<div class="col-lg-4 button_box_col">
			<div class="button button_color_1 text-center trans_200">
				<a href="<?= base_url('jenjang/'.$jenjang.'/1') ?>">Kelas 1</a>
			</div>
		</div>
		<div class="col-lg-4 button_box_col">
			<div class="button button_color_1 text-center trans_200">
				<a href="<?= base_url('jenjang/'.$jenjang.'/2') ?>">Kelas 2</a>
			</div>
		</div>
		<div class="col-lg-4 button_col">
			<div class="button button_color_1 text-center trans_200">
				<a href="<?= base_url('jenjang/'.$jenjang.'/3') ?>">Kelas 3</a>
			</div>
        </div>
        <?php if ($jenjang == 'SMP' || $jenjang == 'SMA' || $jenjang == 'SMK'): ?>
		<div class="col-lg-4 button_col">
			<div class="button button_color_1 text-center trans_200">
				<a href="<?= base_url('jenjang/'.$jenjang.'/4') ?>">Kelas 4</a>
			</div>
		</div>
		<div class="col-lg-4 button_col">
			<div class="button button_color_1 text-center trans_200">
				<a href="<?= base_url('jenjang/'.$jenjang.'/5') ?>">Kelas 5</a>
			</div>
		</div>
		<div class="col-lg-4 button_col">
			<div class="button button_color_1 text-center trans_200">
				<a href="<?= base_url('jenjang/'.$jenjang.'/6') ?>">Kelas 6</a>
			</div>
        </div>
        <?php endif ?>
	</div>
</div>
<!-- Footer -->