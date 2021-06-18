<?php


class PerangkatDesa extends Controller {

    public function index() {
        if (!isset($_SESSION["perangkat"])){
            header("Location: ".BASEURL."/home/login");
            exit;
        }
        $data['judul'] = 'Administrasi Desa';
        $data['pend'] = $this->model('PendudukModel')->getData();

        $this->view('templates/perangkatdesaheader', $data);
        $this->view('perangkatdesa/index', $data);
        $this->view('templates/perangkatdesafooter', $data);


    }


    public function info() {
        if (!isset($_SESSION["perangkat"])){
            header("Location: ".BASEURL."/home/login");
            exit;
        }
        $data['judul'] = 'Info Akun';
        $data['home'] = 'Administrasi Desa';
        $data['desa'] = $this->model('PerangkatModel')-> getByNik($_SESSION['perangkat']['id']);

        if( isset($_POST["submit"])) {
            if($this->model('PerangkatModel')->updateData($_SESSION['perangkat']['id'], $_POST) > 0) {
                $_SESSION['perangkat'] = [
                    'id' => $_POST['nik'],
                    'nama' => $_POST['nama']
                ];
                Flasher::setFlash('berhasil', 'diubah', 'success');
                header("Location: ".BASEURL."/perangkatdesa/info");
                exit;
            } else {
                Flasher::setFlash('gagal', 'diubah', 'danger');
                header("Location: ".BASEURL."/perangkatdesa/info");
                exit;
            }
        }

        $this->view('templates/perangkatdesaheader', $data);
        $this->view('perangkatdesa/info', $data);
        $this->view('templates/perangkatdesafooter', $data);

    }



    public function datapenduduk() {
        if (!isset($_SESSION["perangkat"])){
            header("Location: ".BASEURL."/home/login");
            exit;
        }
        $data['judul'] = 'Data Penduduk';
        $data['pend'] = $this->model('PendudukModel')->getData();

        $this->view('templates/perangkatdesaheader', $data);
        $this->view('perangkatdesa/datapenduduk', $data);
        $this->view('templates/perangkatdesafooter', $data);

    }


    public function tambahdatapenduduk() {
        if (!isset($_SESSION["perangkat"])){
            header("Location: ".BASEURL."/home/login");
            exit;
        }

        $data['judul'] = 'Tambah Data Penduduk';
        $data['status'] = $this->model('StatusModel')->getData();

        if( isset($_POST["submit"])) {
            if ($_POST["penghasilan"] <= 1500000){
                if($this->model('PendudukModel')->insertData($_POST,1) > 0) {
                    Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                    header("Location: ".BASEURL."/perangkatdesa/datapenduduk");
                    exit;
                } else {
                    Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                    header("Location: ".BASEURL."/perangkatdesa/datapenduduk");
                    exit;
                }
            } else {
                if($this->model('PendudukModel')->insertData($_POST,2) > 0) {
                    Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                    header("Location: ".BASEURL."/perangkatdesa/datapenduduk");
                    exit;
                } else {
                    Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                    header("Location: ".BASEURL."/perangkatdesa/datapenduduk");
                    exit;
                }
            }
            
        }

        $this->view('templates/perangkatdesaheader', $data);
        $this->view('perangkatdesa/tambahdatapenduduk', $data);
        $this->view('templates/perangkatdesafooter', $data);

    }


    public function editdatapenduduk($id) {
        if (!isset($_SESSION["perangkat"])){
            header("Location: ".BASEURL."/home/login");
            exit;
        }

        $data['judul'] = 'Edit Data Penduduk';
        $data['status'] = $this->model('StatusModel')->getData();
        $data['desa'] = $this->model('PendudukModel')-> getByNik($id);

        if( isset($_POST["submit"])) {
            if ($_POST["penghasilan"] <= 1500000){
                if($this->model('PendudukModel')->updateData($id,$_POST,1) > 0) {
                    Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                    header("Location: ".BASEURL."/perangkatdesa/datapenduduk");
                    exit;
                } else {
                    Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                    header("Location: ".BASEURL."/perangkatdesa/datapenduduk");
                    exit;
                }
            } else {
                if($this->model('PendudukModel')->updateData($id,$_POST,2) > 0) {
                    Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                    header("Location: ".BASEURL."/perangkatdesa/datapenduduk");
                    exit;
                } else {
                    Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                    header("Location: ".BASEURL."/perangkatdesa/datapenduduk");
                    exit;
                }
            }
            
        }

        $this->view('templates/perangkatdesaheader', $data);
        $this->view('perangkatdesa/editdatapenduduk', $data);
        $this->view('templates/perangkatdesafooter', $data);

    }

    public function hapusdatapenduduk($id) {
        if (!isset($_SESSION["perangkat"])){
            header("Location: ".BASEURL."/home/login");
            exit;
        }
        
        if($this->model('PendudukModel')->deleteData($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header("Location: ".BASEURL."/perangkatdesa/datapenduduk");
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header("Location: ".BASEURL."/perangkatdesa/datapenduduk");
            exit;
        }    
        
    }


    public function logout(){
        if (!isset($_SESSION["perangkat"])){
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