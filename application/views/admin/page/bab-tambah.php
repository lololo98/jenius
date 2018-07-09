<div class="content-wrapper">
    <div class="row" style="max-width: 600px;">
		<div class="col-md-12 grid-margin">
			<div class="card">
				<div class="card-body">
                    <h3>Form Input Bab</h3><br>
                    <form class="form" action="<?= site_url('admin/bab/tambah-post') ?>" method="post">
                        <div class="form-group">
                            <label for="pelajaran">Pelajaran</label>
                            <select class="form-control" name="pelajaran" id="pelajaran">
                                <?php foreach($pelajaran as $data): ?>
                                    <option value="<?= $data->ID_PELAJARAN ?>"><?= $data->KELAS." ".$data->JENJANG." - ".$data->PELAJARAN ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="bab">Nama Bab</label>
                            <input class="form-control" type="text" name="bab" id="bab" placeholder="Masukkan nama bab" required>
                        </div>
                        <div class="form-group">
                            <label for="video">ID Video Youtube</label>
                            <input class="form-control" type="text" name="video" id="video" placeholder="Masukkan ID video" required>
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