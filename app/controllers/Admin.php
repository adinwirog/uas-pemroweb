<?php

class Admin extends Controller
{
    public function index()
    {
        if (!isset($_SESSION["admin"])){
            header("Location: ".BASEURL."/home/login");
            exit;
          }
        $data['judul'] = 'Administrasi Camat';
        $data['home'] = 'Administrasi Camat';
        $data['pend'] = $this->model('PendudukModel')->getData();

        $this->view('templates/adminheader', $data);
        $this->view('admin/index', $data);
        $this->view('templates/adminfooter', $data);
    }

    public function info() {
        if (!isset($_SESSION["admin"])){
            header("Location: ".BASEURL."/home/login");
            exit;
        }
        $data['judul'] = 'Info Akun';
        $data['home'] = 'Administrasi Camat';
        $data['desa'] = $this->model('AdminModel')-> getByNik($_SESSION['admin']['id']);

        if( isset($_POST["submit"])) {
            if($this->model('AdminModel')->updateData($_SESSION['admin']['id'], $_POST) > 0) {
                $_SESSION['admin'] = [
                    'id' => $_POST['nik'],
                    'nama' => $_POST['nama']
                ];
                Flasher::setFlash('berhasil', 'diubah', 'success');
                header("Location: ".BASEURL."/admin/info");
                exit;
            } else {
                Flasher::setFlash('gagal', 'diubah', 'danger');
                header("Location: ".BASEURL."/admin/info");
                exit;
            }
        }

        $this->view('templates/adminheader', $data);
        $this->view('admin/info', $data);
        $this->view('templates/adminfooter', $data);
    }

    public function dataperangkat() {
        if (!isset($_SESSION["admin"])){
            header("Location: ".BASEURL."/home/login");
            exit;
        }
        $data['judul'] = 'Data Perangkat Desa';
        $data['home'] = 'Administrasi Camat';
        $data['desa'] = $this->model('PerangkatModel')->getData();

        $this->view('templates/adminheader', $data);
        $this->view('admin/dataperangkat', $data);
        $this->view('templates/adminfooter', $data);
    }

    public function datapenduduk() {
        if (!isset($_SESSION["admin"])){
            header("Location: ".BASEURL."/home/login");
            exit;
        }
        $data['judul'] = 'Data Penduduk';
        $data['home'] = 'Administrasi Camat';
        $data['pend'] = $this->model('PendudukModel')->getData();

        $this->view('templates/adminheader', $data);
        $this->view('admin/datapenduduk', $data);
        $this->view('templates/adminfooter', $data);
    }

    public function tambahdataperangkat() {
        if (!isset($_SESSION["admin"])){
            header("Location: ".BASEURL."/home/login");
            exit;
        }
        $data['judul'] = 'Data Perangkat Desa';
        $data['home'] = 'Administrasi Camat';
        // $data['desa'] = $this->model('PerangkatModel')->getData();
        if( isset($_POST["submit"])) {
            if($this->model('PerangkatModel')->insertData($_POST) > 0) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header("Location: ".BASEURL."/admin/dataperangkat");
                exit;
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header("Location: ".BASEURL."/admin/dataperangkat");
                exit;
            }
        }
        

        $this->view('templates/adminheader', $data);
        $this->view('admin/tambahdataperangkat', $data);
        $this->view('templates/adminfooter', $data);
    }

    public function hapus($id) {
        if (!isset($_SESSION["admin"])){
            header("Location: ".BASEURL."/home/login");
            exit;
        }
        
        if($this->model('PerangkatModel')->deleteData($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header("Location: ".BASEURL."/admin/dataperangkat");
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header("Location: ".BASEURL."/admin/dataperangkat");
            exit;
        }    
        
    }


    public function editdataperangkat($id) {
        if (!isset($_SESSION["admin"])){
            header("Location: ".BASEURL."/home/login");
            exit;
        }

        $data['judul'] = 'Data Perangkat Desa';
        $data['home'] = 'Administrasi Camat';
        $data['desa'] = $this->model('PerangkatModel')-> getByNik($id);

        if( isset($_POST["submit"])) {
            if($this->model('PerangkatModel')->updateData($id, $_POST) > 0) {
                Flasher::setFlash('berhasil', 'diubah', 'success');
                header("Location: ".BASEURL."/admin/dataperangkat");
                exit;
            } else {
                Flasher::setFlash('gagal', 'diubah', 'danger');
                header("Location: ".BASEURL."/admin/dataperangkat");
                exit;
            }
        }

        $this->view('templates/adminheader', $data);
        $this->view('admin/editdataperangkat', $data);
        $this->view('templates/adminfooter', $data);

    }

    public function logout(){
        if (!isset($_SESSION["admin"])){
            header("Location: ".BASEURL."/home/login");
            exit;
        }

        $_SESSION = [];
        session_unset();
        session_destroy();
        header("Location: ".BASEURL."/home/login");
        exit;


    }


}