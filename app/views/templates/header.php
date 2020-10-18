<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
<!--===============================================================================================-->
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
      <a class="navbar-brand font-weight-bold" href="<?= BASEURL; ?>">PERPUS ESEMKA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto mr-auto">
          <a class="nav-item nav-link" href="<?= BASEURL; ?>">Home</a>
          <a class="nav-item nav-link" href="<?= BASEURL; ?>/buku">Buku</a>
          <a class="nav-item nav-link" href="<?= BASEURL; ?>/peminjaman">Peminjaman</a>
        </div>
      </div>
      <?php if(isset($_SESSION['login'])): ?>
        <span class="badge badge-light badge-pill"><?= $_SESSION['username']?></span>
        <a href="<?= BASEURL; ?>/pengguna/keluar" class="badge badge-danger badge-pill">Keluar</a>
      <?php else: ?>
        <a href="<?= BASEURL; ?>/pengguna/masuk" class="badge badge-info badge-pill">Masuk</a>
      <?php endif ?>
  </div>
</nav>