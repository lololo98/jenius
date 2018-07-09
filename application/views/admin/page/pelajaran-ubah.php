<div class="content-wrapper">
    <div class="row" style="max-width: 600px;">
		<div class="col-md-12 grid-margin">
			<div class="card">
				<div class="card-body">
                    <h3>Form Ubah Pelajaran</h3><br>
                    <form class="form" action="<?= site_url('admin/pelajaran/update') ?>" method="post">
                        <input type="hidden" name="id" value="<?= $data->ID_PELAJARAN ?>">
                        <div class="form-group">
                            <label for="jenjang">Jenjang</label>
                            <select class="form-control" name="jenjang" id="jenjang">
                                <option value="SD" <?= $data->JENJANG=='SD'?'selected':'' ?>>SD</option>
                                <option value="SMP" <?= $data->JENJANG=='SMP'?'selected':'' ?>>SMP</option>
                                <option value="SMA" <?= $data->JENJANG=='SMA'?'selected':'' ?>>SMA</option>
                                <option value="SMK" <?= $data->JENJANG=='SMK'?'selected':'' ?>>SMK</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select class="form-control" name="kelas" id="kelas">
                                <option value="1" <?= $data->KELAS==1?'selected':'' ?>>1</option>
                                <option value="2" <?= $data->KELAS==2?'selected':'' ?>>2</option>
                                <option value="3 <?= $data->KELAS==3?'selected':'' ?>">3</option>
                                <option value="4 <?= $data->KELAS==4?'selected':'' ?>">4</option>
                                <option value="5 <?= $data->KELAS==5?'selected':'' ?>">5</option>
                                <option value="6 <?= $data->KELAS==6?'selected':'' ?>">6</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pelajaran">Nama Pelajaran</label>
                            <input class="form-control" type="text" name="pelajaran" id="pelajaran" placeholder="Masukkan nama pelajaran" value="<?= $data->PELAJARAN ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" name="keterangan" id="keterangan" rows="4" placeholder="Masukkan keterangan pelajaran" required><?= $data->KETERANGAN ?></textarea>
                        </div>
                        <div class="form-group text-right">
                            <a href="<?= base_url('admin/pelajaran') ?>" class="btn btn-warning">Kembali</a>
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php if($this->session->flashdata('child')): ?>
    <script>
        alert('<?= $this->session->flashdata('child') ?>');
    </script>
<?php endif ?>