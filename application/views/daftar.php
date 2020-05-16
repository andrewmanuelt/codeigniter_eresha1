        <div class="container my-5">
            <!-- Formnya harus ada method dan actionnya ya. Lihat urlnya di route -->
            <form method="POST" action="<?php echo site_url('daftar_form'); ?>">
                <div class="form-group">
                    <label for="nama">Nama Calon Mahasiswa</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama...">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender1" value="L" checked>
                        <label class="form-check-label" for="gender1">Laki-Laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender2" value="P">
                        <label class="form-check-label" for="gender2">Perempuan</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="sekolah">Telepon</label>
                    <input type="text" name="telepon" class="form-control" id="telepon" placeholder="Telepon...">
                </div>
                <div class="form-group">
                    <label for="sekolah">Asal Sekolah</label>
                    <input type="text" name="sekolah" class="form-control" id="sekolah" placeholder="Sekolah...">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" class="form-control" id="alamat" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="prodi">Program Studi</label>
                    <select class="custom-select" name="prodi" id="prodi">
                        <option value="S1-Sistem Komputer" selected>S1-Sistem Komputer</option>
                        <option value="Manajemen Informatika">S1-Manajemen Informatika</option>
                        <option value="S1-Komputer Akutansi">S1-Komputer Akutansi</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </main>
