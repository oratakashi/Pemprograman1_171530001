<html>
    <head>
        <title>Latihan2 Praktikum 8</title>
        <link rel="stylesheet" href="latihan.css" type="text/css">
    </head>
    <body>
        <div style="background: url(bg-1.jpg)">
            <div class="app-input-box">
                <form action="proses.php" method="get">
                    <center><h3>Form Input Kartu Tanda Penduduk</h3></center>
                    <center><p>Silahkan isi form di bawah ini</p></center>
                    <div class="form-group">
                        <label for="nik">NIK : </label>
                        <input type="text" name="nik" id="" placeholder="NIK">
                    </div>
                    <div class="form-group"
                        ><label for="nama">Nama :</label>
                        <input type="text" name="nama" id="" placeholder="Nama"></div>
                    <div class="form-group">
                        <label for="temptlhr">Tempat Lahir</label>
                        <input type="text" name="temptlhr" id="" placeholder="Tempat Lahir">
                    </div>
                    <div class="form-group">
                        <label for="tgllhr">Tanggal Lahir</label>
                        <input type="date" name="tgllhr" id="">
                    </div>                  
                    <div class="form-group">
                        <label for="jenisk">Jenis Kelamin</label>
                        <select name="jenisk" id="jenisk">
                            <option value="">--Silahkan Pilih--</option>
                            <option value="Laki - Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="rt">RT :</label>
                        <input type="text" name="rt" id="" placeholder="RT">
                    </div>
                    <div class="form-group">
                        <label for="rw">RW :</label>
                        <input type="text" name="rw" id="" placeholder="RW">
                    </div>
                    <div class="form-group">
                        <label for="kel">Keluarahan :</label>
                        <input type="text" name="kel" id="" placeholder="Kelurahan">
                    </div>
                    <div class="form-group">
                        <label for="kec">Kecamatan :</label>
                        <input type="text" name="kec" id="" placeholder="Kecamatan">
                    </div>
                    <div class="form-group">
                        <label for="kota">Kota :</label>
                        <input type="text" name="kota" id="" placeholder="Kota">
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select name="agama" id="jenisk">
                            <option value="">--Silahkan Pilih--</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konggucu">Konggucu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="spernikahan">Status Perkawinan</label>
                        <select name="spernikahan" id="jenisk">
                            <option value="">--Silahkan Pilih--</option>
                            <option value="Kawin">Kawin</option>
                            <option value="Belum Kawin">Belum Kawin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kerja">Pekerjaan :</label>
                        <input type="text" name="kerja" id="" placeholder="Pekerjaan">
                    </div>
                    <div class="form-group">
                        <label for="tenggang">Masa Berlaku</label>
                        <select name="tenggang" id="jenisk">
                            <option value="">--Silahkan Pilih--</option>
                            <option value="5">5 Tahun</option>
                            <option value="0">Seumur Hidup</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Kirim" name="simpan">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>