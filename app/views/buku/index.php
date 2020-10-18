<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <?php if(isset($_SESSION['login'])): ?>
  <?php if($_SESSION['username'] == 'admin'): ?>
  <div class="row mb-3 mt-4">
    <div class="col-lg-6">
      <button type="button" class="btn btn-outline-info tombolTambahData" data-toggle="modal" data-target="#formModal">
        Tambah Data buku
      </button>
    </div>
  </div>
  <?php endif ?>
  <?php endif ?>

  <div class="row">
    <div class="col-lg-6">
      <h3 class="mt-4">Daftar Buku</h3>
      <form action="<?= BASEURL; ?>/buku/cari" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="cari buku.." name="keyword" id="keyword"
            autocomplete="off">
          <div class="input-group-append">
            <button class="btn btn-info" type="submit" id="tombolCari">Cari</button>
          </div>
        </div>
      </form>
      <ul class="list-group">
        <?php foreach( $data['buku'] as $buku ) : ?>
        <li class="list-group-item">
          <?= $buku['judul']; ?>
          <a href="<?= BASEURL; ?>/buku/detail/<?= $buku['id']; ?>" class="badge badge-primary float-right">detail</a>
          <a href="<?= BASEURL; ?>/peminjaman/tambah/<?= $buku['id']; ?>"
            class="badge badge-success float-right">pinjam</a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/buku/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" autocomplete="off" required>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Buku</button>
        </form>
      </div>
    </div>
  </div>
</div>

