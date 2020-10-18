<div class="container mt-5">

  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?= $data['buku']['judul']; ?></h5>
          <h6 class="card-subtitle mb-2 text-muted">id: <?= $data['buku']['id']; ?></h6>
          <a href="<?= BASEURL; ?>/buku" class="card-link">Kembali</a>
          <?php if(isset($_SESSION['login'])): ?>
          <?php if($_SESSION['username'] == 'admin'): ?>
          <a href="<?= BASEURL; ?>/buku/hapus/<?= $data['buku']['id']; ?>" class="card-link text-danger float-right"
            onclick="return confirm('yakin?');">Hapus</a>
          <?php endif ?>
          <?php endif ?>
        </div>
      </div>
    </div>

    <?php if(isset($_SESSION['login'])): ?>
    <?php if($_SESSION['username'] == 'admin'): ?>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <form action="<?= BASEURL; ?>/buku/ubah/<?= $data['buku']['id']; ?>" method="post">
            <input type="hidden" name="id" id="id" value="<?= $data['buku']['id']; ?>">
            <div class="form-group">
              <label for="judul">Judul</label>
              <input type="text" class="form-control" id="judul" name="judul" autocomplete="off" required>
              <button type="submit" class="btn btn-primary mt-3">Ubah Data</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php endif ?>
  <?php endif ?>


</div>