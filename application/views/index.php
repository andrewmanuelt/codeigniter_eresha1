        <div class="container mt-5">
            <div class="table-responsive mt-5">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Asal Sekolah</th>
                            <th>Program Studi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            // Bingung toh kenapa harus pakek foreach. Clue : tau ga datanya ada berapa kalau gak harus ngecek ? Kalo for harusnya gimana ?
                            // maksudnya dibawah adalah untuk setiap data pada $data sebagai $d, jadi $d itu isinya 1 baris
                            foreach($data as $d) {
                                $num = 1;
                        ?>
                            <tr>
                                <td><?php echo $num; ?></td>
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['gender'] == '0' ? 'Laki-Laki':'Perempuan'; ?></td>
                                <td><?php echo $d['alamat']; ?></td>
                                <td><?php echo $d['telepon']; ?></td>
                                <td><?php echo $d['asal_sekolah']; ?></td>
                                <td><?php echo $d['program_studi']; ?></td>
                                <td>
                                    <a href="<?php echo site_url('edit/'.$d['id_pendaftaran']); ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="<?php echo site_url('detail/'.$d['id_pendaftaran']); ?>" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                    <a href="<?php echo site_url('hapus/'.$d['id_pendaftaran']); ?>" class="btn btn-primary"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php 
                                $num++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>