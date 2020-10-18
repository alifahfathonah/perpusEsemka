<div class="container">
    <div class="jumbotron mt-4 bg-white">
        <?php if(isset($_SESSION['login'])) { ?>
        <h1 class="display-4">Selamat Datang
            <?= $_SESSION['username']?>!</h1>
    <?php } else { ?>
        <h1 class="display-4">Selamat Datang !</h1>
        <?php } ?>
        <hr class="my-4">
        <!-- <p>It uses utility classes for typography and spacing to space content out
        within the larger container.</p> -->
        <a class="btn btn-outline-info btn-lg" href="<?= BASEURL?>/buku" role="button">Mau Pinjam</a>
        <a
            class="btn btn-dark btn-lg ml-3"
            href="<?= BASEURL?>/peminjaman"
            role="button">Lihat Pinjamanku !</a>

    </div>

    <?php if(isset($_SESSION['login'])) { ?>
    <?php if($_SESSION['username'] == "admin") { ?>


    <div class="row mt-2 mb-4">
        <div class="col-md-4">
            <div class="card">
                <h3 class="text-center mt-3 font-weight-bold">Tambah Siswa</h3>
                <div class="card-body">
                    <?php Flasher::flash(); ?>
                    <form action="<?= BASEURL ?>/pengguna/daftar" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input
                                name="username"
                                type="text"
                                class="form-control"
                                id="username"
                                aria-describedby="emailHelp"
                                placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input
                                name="password"
                                type="password"
                                class="form-control"
                                id="password"
                                placeholder="Password">
                        </div>
                        <button name="submit" type="submit" class="btn btn-info">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <h3 class="text-center mt-3 font-weight-bold">Tambah Buku</h3>
                <div class="card-body">
                    <?php Flasher::flash(); ?>
                    <form action="<?= BASEURL ?>/buku/tambah" method="POST">
                        <div class="form-group">
                            <label for="username">Judul</label>
                            <input
                                name="username"
                                type="text"
                                class="form-control"
                                name="judul" autocomplete="off"
                                placeholder="Judul buku">
                        </div>
                        <button name="submit" type="submit" class="btn btn-info">Tambah</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    
    <?php } ?>
    <?php } ?>
      


</div>