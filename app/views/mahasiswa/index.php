<div class="container mt-4">

<div class="row">
	<div class="col-lg-6">
		<?php Flasher::flash();?>
	</div>
</div>

<div class="row mb-4">
	<div class="col-lg-6">
		<button type="button" class="btn btn-primary tombolCreatData" data-toggle="modal" data-target="#formModal">
			Creat Data!
		</button>
	</div>
</div>

<div class="row">
	<div class="col-lg-6">
		<form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
		<div class="input-group mb-3">
			<input type="text" class="form-control" placeholder="search mahasiswa..." name="keyword" id="keyword" autocomplete="off">
			<div class="input-group-append">
				<button class="btn btn-primary" type="submit" id="tombolCari">Search</button>
			</div>
		</div>
		</form>
	</div>
</div>
	
	<div class="row">
		<div class="col-lg-6">
		<!-- Button trigger modal -->
			<h3>List Mahasiswa</h3>
			<ul class="list-group">
				<?php foreach($data['mhs'] as $mhs) : ?>
				  <li class="list-group-item">
				  	<?= $mhs['nama']; ?>
					<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1"onclick="return confirm('Are You Sure Delete?')">Delete</a>
					<a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">Edit</a>	
					<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right mr-1">Detail</a>	
				  </li>
				<?php endforeach; ?>
			</ul>
		
		</div>		
	</div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
		<form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
		<input type="hidden" name="id" id="id">
		<div class="form-group">
			<label for="nama">Name</label>
			<input type="text" class="form-control" id="nama" name="nama" placeholder="Input Your Name...">
		</div>
		<div class="form-group">
			<label for="nim">NIM</label>
			<input type="number" class="form-control" id="nim" name="nim" placeholder="Input Your NIM...">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="Input Your Email...">
		</div>
		
		<div class="form-group">
			<label for="jurusan">Course</label>
			<select class="form-control" id="jurusan" name="jurusan">
			<option value="Teknik Informatika">Teknik Informatika</option>
			<option value="Managemen Informasi">Managemen Informasi</option>
			<option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
			</select>
		</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Save changes</button>
		</form>
      </div>
    </div>
  </div>
</div>