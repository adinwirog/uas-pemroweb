            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Info Akun</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/perangkatdesa">Dashboard</a></li>
                            <li class="breadcrumb-item active">Info Akun</li>
                        </ol>
                        <?php Flasher::flash(); ?>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Info Akun Anda
                            </div>
                            <div class="card-body">
                                <form id="contactForm" action="" method="post">
                                    <!-- Name input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="nik" type="text" placeholder="nik" data-sb-validations="required" name="nik" value="<?=  $data['desa']['id'] ?>" />
                                        <label for="nik">NIK</label>
                                    </div>
                                    <!-- Email address input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="nama" type="text" placeholder="nama" data-sb-validations="required,email" name="nama" value="<?=  $data['desa']['nama'] ?>" />
                                        <label for="nama">Nama</label>
                                    </div>
                                    <!-- Phone number input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="jabatan" type="text" placeholder="jabatan" data-sb-validations="required" name="jabatan" value="<?=  $data['desa']['jabatan'] ?>" />
                                        <label for="jabatan">Jabatan</label>
                                    </div>
                                    <!-- Message input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="username" type="text" placeholder="username" data-sb-validations="required" name="username" value="<?=  $data['desa']['username'] ?>" />
                                        <label for="username">Username</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="password" type="password" placeholder="password" data-sb-validations="required" name="password" value="<?=  $data['desa']['password'] ?>" />
                                        <label for="password">Password</label>
                                    </div>
                                    <!-- Submit Button-->
                                    <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit" name="submit" onClick="return confirm('Anda yakin mau ubah data?');">Ubah</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>