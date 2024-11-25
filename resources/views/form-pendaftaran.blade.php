<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
    <title>Form Registrasi</title>
</head>
<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <divclass="col-md-8 col-x1-6">
                <!-- <h1>Pendaftaran Mahasiswa</h1> -->
                <h1>{{ __('form.judul') }}</h1>
                <hr>
                <form action="{{url('/proses-form' )}}" method="GET">
                    <div class="form-group">
                        <!-- <label for="nim">NIM</label> -->
                        <label for="nim">{{ __('form.input.nim') }}</label>
                        <input type="text" class="form-control" id="nim" name="nim">
                    </div>
                    <div class="form-group">
                        <!-- <label for="nama">Nama Lengkap</label> -->
                        <label for="nama">{{ __('form.input.nama_lengkap') }}</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <!-- <label for="email">Email</label> -->
                        <label for="email">{{ __('form.input.email') }}</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <!-- <label>Jenis Kelamin</label> -->
                        <label>{{ __('form.input.jenis_kelamin') }}</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="L">
                                <!-- <label class="form-check-label" for="laki_laki">Laki-laki</label> -->
                                <label class="form-check-label" for="laki_laki">{{ __('form.input.pilihan_jenis_kelamin.laki_laki') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="p">
                                <!-- <label class="form-check-label" for="perempuan">Perempuan</label> -->
                                <label class="form-check-label" for="perempuan">{{ __('form.input.pilihan_jenis_kelamin.perempuan') }}</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <label for="jurusan">Jurusan</label> -->
                        <label for="jurusan">{{ __('form.input.jurusan') }}</label>
                        <select class="form-control" name="jurusan" id="jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Ilmu Komputer">Ilmu Komputer</option>
                            <option value="Teknik Komputer">Teknik Komputer</option>
                            <option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <!-- <label for="alamat">Alamat</label> -->
                        <label for="alamat">{{ __('form.input.alamat') }}</label>
                        <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">{{ __('form.input.tombol') }}</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
