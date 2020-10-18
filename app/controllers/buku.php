<?php 

class buku extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Buku';
        $data['buku'] = $this->model('BukuModel')->getAllBuku();
        $this->view('templates/header', $data);
        $this->view('buku/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Buku';
        $data['buku'] = $this->model('BukuModel')->getBukuById($id);
        $this->view('templates/header', $data);
        $this->view('buku/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('BukuModel')->tambahDataBuku($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/buku');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/buku');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('BukuModel')->hapusDataBuku($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/buku');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/buku');
            exit;
        }
    }

    public function ubah()
    {
        if( $this->model('BukuModel')->ubahDataBuku($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/buku');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/buku');
            exit;
        } 
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Buku';
        $data['buku'] = $this->model('BukuModel')->cariDataBuku();
        $this->view('templates/header', $data);
        $this->view('buku/index', $data);
        $this->view('templates/footer');
    }

}