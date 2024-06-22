<div class="col-sm-4">

    <h4>Form Tambah Mahasiswa</h4>
    <form action="/create" method="POST">
        @csrf

        <!-- letakkan field di sini -->
        <fieldset>
            <legend>

            </legend>
            <table>
                <tr>
                    <td>Npm </td>
                    <td>:</td>
                    <td><input type="integer" name="npm" class="from-control" required /><br /></td>
                </tr>

                <tr>
                    <td>Nama Mahasiswa</td>
                    <td>:</td>
                    <td><input type="text" name = "nama_mahasiswa" id= "" class= "from-control" required /><br />
                    </td>
                </tr>

                <tr>
                    <td>Mata Kuliah</td>
                    <td>:</td>
                    <td><input type="text" name="mata_kuliah" class="from-control" required /><br /></td>
                </tr>

                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_hadir" required /><br /></td>

                </tr>

                <tr>
                    <td>Kehadiran</td>
                    <td>:</td>
                    <td><input type="radio" name="H" /> Hadir
                        <input type="radio" name="T" /> Tidak Hadir
                    </td>
                </tr>
            </table>
            <div class="col-sm-6">
                <button class="btn btn-info" style="width = 100%" type="submit">Tambah</button>
                <a href="/kehadiran" class="btn btn-info" style="width = 100%">Kembali</a>
            </div>
        </fieldset>

    </form>
