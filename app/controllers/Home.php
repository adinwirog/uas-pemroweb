<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Pelayanan Bantuan Desa Pagiyanten';
        $data['status'] = null;


        if(isset($_POST["submit"]))
        {
            $pendNik = $_POST['nik'];
            $data['pend'] = $this->model('PendudukModel')->getByNik($pendNik);
            if($data['pend'] != false)
            {
                if($data['pend']['penghasilan'] <= 500000)
                {
                    $data['status'] = "BPNT";
                } elseif($data['pend']['penghasilan'] > 500000 && $data['pend']['penghasilan'] <= 1000000){
                    $data['status'] = "BLT";
                } elseif($data['pend']['penghasilan'] > 1000000 && $data['pend']['penghasilan'] <= 1500000){
                    $data['status'] = "PKH";
                } else {
                    $data['status'] = "No";
                }
            } else {
                $data['status'] = "Error";
            }
            
            
        }


        $this->view('home/index', $data);
    }


    public function login()
    {
        if (isset($_SESSION["admin"])){
            header("Location: ".BASEURL."/admin");
            exit;
        } elseif (isset($_SESSION["perangkat"])) {
            header("Location: ".BASEURL."/perangkatdesa");
            exit;
        }

        $data['judul'] = 'Login';

        if ( isset($_POST["login"]) ) {

            $loginadmin = $this->model('AdminModel')->getByUsername($_POST['username']);
            $loginperangkat = $this->model('PerangkatModel')->getByUsername($_POST['username']);
            // var_dump($loginperangkat);
            // var_dump($_POST['password'] == $loginperangkat['password']);
           
        
            if($loginadmin != false) {
                if(password_verify($_POST['password'], $loginadmin['password'])){
                    
                    $_SESSION['admin'] = [
                        'id' => $loginadmin['id'],
                        'nama' => $loginadmin['nama']
                    ];
                    header("Location: ".BASEURL."/admin");
                    exit;

                } 
                
            }
            elseif ($loginperangkat != false) {
                if (password_verify($_POST['password'], $loginperangkat['password'])) {
                    $_SESSION['perangkat'] = [
                        'id' => $loginperangkat['id'],
                        'nama' => $loginperangkat['nama']
                    ];
                    header("Location: ".BASEURL."/perangkatdesa");
                    exit;
                }
            }


            $data['error'] = true;
        
            // echo "<script>alert('Username dan Password Salah!');</script>";
        }

        $this->view('home/login', $data);
    }

}