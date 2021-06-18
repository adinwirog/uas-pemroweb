            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Perangkat Desa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/admin">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Perangkat Desa</li>
                        </ol>
                        <?php Flasher::flash(); ?>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Perangkat Desa
                            </div>
                            <div class="card-body">
                                <a href="<?= BASEURL; ?>/admin/tambahdataperangkat"><button type="button" class="btn btn-primary float-left mb-4">Tambah Data</button></a>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                        <?php foreach($data['desa'] as $row) : ?>
                                            <td><?= $row["id"]; ?></td>
                                            <td><?= $row["nama"]; ?></td>
                                            <td><?= $row["jabatan"]; ?></td>
                                            <td><a href="<?= BASEURL; ?>/admin/editdataperangkat/<?= $row["id"]; ?>"><button type="button" class="btn btn-success btn-sm">Edit</button></a></td>
                                            <td><a href="<?= BASEURL; ?>/admin/hapus/<?= $row["id"]; ?>" onClick="return confirm('Anda yakin mau menghapus data?');"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
