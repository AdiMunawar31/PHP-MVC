<!DOCTYPE html>
<html>
<head>
	<title>Halaman <?= $data['judul']; ?></title>
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	<div class="container">
	  <a class="navbar-brand" href="<?= BASEURL; ?>">D2Y.COM</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav">
	      <a class="nav-item nav-link active" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
	      <a class="nav-item nav-link active" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
	      <a class="nav-item nav-link active" href="<?= BASEURL; ?>/about">About</a>
	      <a class="nav-item nav-link active" href="<?= BASEURL; ?>/portfolio">Portfolio</a>
	    </div>
	  </div>
	 </div>
</nav>