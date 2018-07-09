<div class="content-wrapper">
    <div class="row" style="max-width: 600px;">
		<div class="col-md-12 grid-margin">
			<div class="card">
				<div class="card-body">
                    <h3>Form Input Pelajaran</h3><br>
                    <form class="form" action="<?= site_url('admin/pelajaran/tambah-post') ?>" method="post">
                        <div class="form-group">
                            <label for="jenjang">Jenjang</label>
                            <select class="form-control" name="jenjang" id="jenjang">
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="SMK">SMK</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select class="form-control" name="kelas" id="kelas">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pelajaran">Nama Pelajaran</label>
                            <input class="form-control" type="text" name="pelajaran" id="pelajaran" placeholder="Masukkan nama pelajaran" required>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" name="keterangan" id="keterangan" rows="4" placeholder="Masukkan keterangan pelajaran" required></textarea>
                        </div>
                        <div class="form-group text-right">
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