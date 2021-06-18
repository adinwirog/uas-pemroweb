            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Info Akun</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= BASEURL; ?>/perangkatdesa/info">Menuju Menu</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Data Penduduk</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= BASEURL; ?>/perangkatdesa/datapenduduk">Menuju Menu</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                        </div> -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Penduduk
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>NIK</th>
                                            <th>Nama Penduduk</th>
                                            <th>Alamat</th>
                                            <th>Pekerjaan</th>
                                            <th>Penghasilan</th>
                                            <th>Status Penerimaan</th>
                                            <th>Keberhakan</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>NIK</th>
                                            <th>Nama Penduduk</th>
                                            <th>Alamat</th>
                                            <th>Pekerjaan</th>
                                            <th>Penghasilan</th>
                                            <th>Status Penerimaan</th>
                                            <th>Keberhakan</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php foreach($data['pend'] as $row) : ?>
                                        <?php if($row["idpenerimaan"] == 1) : ?>
                                            <?php $row["idpenerimaan"] = 'Belum'; ?>
                                        <?php else : ?>
                                            <?php $row["idpenerimaan"] = 'Sudah'; ?>
                                        <?php endif; ?>
                                        <?php if($row["idkeberhakan"] == 1) : ?>
                                            <?php $row["idkeberhakan"] = 'Berhak'; ?>
                                        <?php else : ?>
                                            <?php $row["idkeberhakan"] = 'Tidak'; ?>
                                        <?php endif; ?>
                                        <tr>
                                            <td><?= $row["id"]; ?></td>
                                            <td><?= $row["nama"]; ?></td>
                                            <td><?= $row["alamat"]; ?></td>
                                            <td><?= $row["pekerjaan"]; ?></td>
                                            <td><?= $row["penghasilan"]; ?></td>
                                            <td><?= $row["idpenerimaan"]; ?></td>
                                            <td><?= $row["idkeberhakan"]; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>