<div class="content-wrapper">
	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body" style="padding: 20px">
                    <a class="btn btn-primary" href="<?= site_url('admin/pelajaran/tambah') ?>">Tambah Pelajaran</a>
				</div>
			</div>
		</div>
	</div>
    <div class="row">
		<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
                    <table class="table table-bordered table-striped" id="tbl">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Jenjang</td>
                                <td>Kelas</td>
                                <td>Pelajaran</td>
                                <td>Keterangan</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($pelajaran as $data):?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data->JENJANG ?></td>
                                    <td><?= $data->KELAS ?></td>
                                    <td><?= $data->PELAJARAN ?></td>
                                    <td><?= $data->KETERANGAN ?></td>
                                    <td>
                                        <a class="btn btn-danger" href="<?= site_url('admin/pelajaran/hapus/'. $data->ID_PELAJARAN) ?>"><i class="mdi mdi-delete mr-0" aria-hidden="true"></i></a>
                                        <a class="btn btn-info" href="<?= site_url('admin/pelajaran/ubah/'. $data->ID_PELAJARAN) ?>"><i class="mdi mdi-account-edit mr-0" aria-hidden="true"></i></a>
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
<?php if($this->session->flashdata('child')): ?>
    <script>
        alert('<?= $this->session->flashdata('child') ?>');
    </script>
<?php endif ?>
<script>
    $(function(){
        $('#tbl').DataTable();
    })
</script>