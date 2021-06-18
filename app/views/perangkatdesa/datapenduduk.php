            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Penduduk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/perangkatdesa">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Penduduk</li>
                        </ol>
                        <?php Flasher::flash(); ?>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Penduduk
                            </div>
                            <div class="card-body">
                                <a href="<?= BASEURL; ?>/perangkatdesa/tambahdatapenduduk"><button type="button" class="btn btn-primary float-left mb-4">Tambah Data</button></a>
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
                                            <th></th>
                                            <th></th>
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
                                            <th></th>
                                            <th></th>
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
                                            <td><a href="<?= BASEURL; ?>/perangkatdesa/editdatapenduduk/<?= $row["id"]; ?>"><button type="button" class="btn btn-success btn-sm">Edit</button></a></td>
                                            <td><a href="<?= BASEURL; ?>/perangkatdesa/hapusdatapenduduk/<?= $row["id"]; ?>" onClick="return confirm('Anda yakin mau menghapus data?');" ><button type="button" class="btn btn-danger btn-sm">Hapus</button></a></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>