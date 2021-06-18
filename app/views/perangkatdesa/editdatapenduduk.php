            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah Data Penduduk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/perangkatdesa">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Penduduk</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tambah Data
                            </div>
                            <div class="card-body">
                                <form id="contactForm" action="" method="post">
                                    <!-- Name input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="nik" type="text" placeholder="NIK" data-sb-validations="required" name="nik" value="<?=  $data['desa']['id'] ?>" />
                                        <label for="nik">NIK</label>
                                    </div>
                                    <!-- Email address input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="nama" type="text" placeholder="nama" data-sb-validations="required" name="nama" value="<?=  $data['desa']['nama'] ?>" />
                                        <label for="nama">Nama</label>
                                    </div>
                                    <!-- Phone number input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="jabatan" type="text" placeholder="jabatan" data-sb-validations="required" name="alamat" value="<?=  $data['desa']['alamat'] ?>" />
                                        <label for="jabatan">Alamat</label>
                                    </div>
                                    <!-- Message input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="pekerjaan" type="text" placeholder="username" data-sb-validations="required" name="pekerjaan" value="<?=  $data['desa']['pekerjaan'] ?>" />
                                        <label for="pekerjaan">Pekerjaan</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="penghasilan" type="text" placeholder="username" data-sb-validations="required" name="penghasilan" value="<?=  $data['desa']['penghasilan'] ?>" />
                                        <label for="penghasilan">Penghasilan</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="penerimaan" aria-label="Floating label select example" name="penerimaan">
                                        <option value="<?=  $data['desa']['idpenerimaan'] ?>"><?php if($data['desa']['idpenerimaan'] == 1){ echo "Belum"; } else {echo "Sudah";} ?></option>
                                        <?php foreach( $data['status'] as $row ) : ?>  
                                          <option value="<?= $row['id'] ?>"><?= $row['id'] ?>. <?= $row['status'] ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                        <label for="penerimaan">Status Penerimaan</label>
                                    </div>
                                    <!-- Submit Button-->
                                    <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit" name="submit">Ubah</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>