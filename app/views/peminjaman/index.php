<div class="container">
            <h3 class="mt-5">Daftar Buku Dipinjam</h3>

            <?php if($_SESSION['username'] == 'admin') { ?>
            
            <table class="table table-striped table-light mt-5">
                <thead>
                    <tr class="">
                        <th scope="col">Peminjam</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Tgl Pinjam</th>
                        <th scope="col">Jatuh Tempo</th>
                        <th scope="col">Tgl Kembali</th>
                        <th scope="col" class="text-right">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach( $data['daftarBukuDipinjam'] as $dftr ) : ?>

                        <tr>  
                                <td><?= $dftr['username'] ?></td>
                                <td><?= $dftr['judul'] ?></td>
                                <td><?= date('H:i, j F Y', strtotime($dftr['pinjam'])); ?></td>
                                <td><?= date('j F Y', strtotime($dftr['kembali'])); ?></td>
                                <?php if($dftr['dikembalikan'] > 0 ){ ?>
                                <td><?= date('H:i, d F Y', strtotime($dftr['tgl_kembali'])); ?></td>
                                <?php } else { ?>
                                    <td>-</td>
                                    <?php } ?>
                                <?php if( $dftr['dikembalikan'] > 0 ) { ?>    
                                <td><a class="badge badge-success float-right text-white">dikembalikan</a></td>    
                                <?php } else { ?>
                                <td><a class="badge badge-danger float-right text-white">belum dikembalikan</a></td>    
                                    <?php } ?>  
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
                    <?php } ?>
            
            <?php Flasher::flash(); ?>
            <?php if($_SESSION['username'] != 'admin') { ?>
            <ul class="list-group mt-4">
                <?php foreach( $data['peminjaman'] as $p ) : ?>
                <li class="list-group-item">
                    <?= $p['judul']; ?>
                    <?php if($p['dikembalikan'] > 0): ?>
                    <a class="badge badge-success badge-pill float-right text-white">sudah kembali</a>
                <?php else: ?>
                    <a class="badge badge-danger badge-pill float-right text-white">belum kembali</a>
                    <?php endif ?>
                    <a
                    href="<?= BASEURL; ?>/peminjaman/detail/<?= $p['id']; ?>"
                    class="badge badge-info badge-pill float-right">detail</a>
                    <?php if($p['dikembalikan'] < 1): ?>
                    <a
                        href="<?= BASEURL; ?>/peminjaman/dikembalikan/<?= $p['id'] ?>"
                        class="badge badge-primary badge-pill mr-auto">kembalikan</a>
                    <?php endif ?>
                </li>
                <?php endforeach; ?>
            </ul>
                <?php } ?>
        </div>