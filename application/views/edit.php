        <div class="container my-5">
            <!-- Jangan lupa formnya harus ada action dan methodnya -->
            <form method="POST" action="<?php echo site_url('update/'.$data['id_pendaftaran']); ?>">
                <div class="table-responsive mt-5">
                    <table class="table table-striped">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <!-- $data['nama'] ? maksudnya kita ambil sebuah row yang key nya nama di database -->
                            <td><input type="text" name="nama" class="form-control" id="nama" value="<?php echo $data['nama']; ?>" placeholder="Nama..."></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>:</td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="gender1" value="L" <?php echo $data['gender'] == '1' ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="gender1">Laki-Laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="gender2" value="P" <?php echo $data['gender'] == '0' ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="gender2">Perempuan</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Telepon</td>
                            <td>:</td>
                            <td><input type="text" name="telepon" class="form-control" id="telepon" value="<?php echo $data['telepon']; ?>" placeholder="Telepon..."></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><textarea name="alamat" class="form-control" id="alamat" rows="3"><?php echo $data['alamat']; ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Asal Sekolah</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="sekolah" class="form-control" id="sekolah" value="<?php echo $data['asal_sekolah']; ?>" placeholder="Sekolah...">
                            </td>
                        </tr>
                        <tr>
                            <td>Program Studi</td>
                            <td>:</td>
                            <td>
                                <select class="custom-select" name="prodi" id="prodi">
                                    <!-- Ingat variabel ternary ? kalau true maka selected -->
                                    <option value="S1-Sistem Komputer" <?php echo $data['program_studi'] == 'S1-Sistem Komputer' ? 'selected' : ''; ?>>S1-Sistem Komputer</option>
                                    <option value="S1-Manajemen Informatika" <?php echo $data['program_studi'] == 'S1-Manajemen Informatika' ? 'selected' : ''; ?>>S1-Manajemen Informatika</option>
                                    <option value="S1-Komputer Akutansi" <?php echo $data['program_studi'] == 'S1-Komputer Akutansi' ? 'selected' : ''; ?>>S1-Komputer Akutansi</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </main>