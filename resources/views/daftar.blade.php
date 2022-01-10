@extends('layout.main')

@section('container')
    <div class="container w-75  mx-auto">
        <div class="row align-items-center my-5">
            <div class="col-6 text-center">
                <img src="/images/daftar-img.png" class="img-fluid" alt="">
            </div>
            <div class="col-6">
                <h3 class="w-75 mx-auto mb-4">Form Pendaftaran</h3>
                <form action="/daftar" method="POST" class="w-75 mx-auto">
                    @csrf
                    <div class="mb-3">
                        <input type="number" name="nik" class="form-control" placeholder="NIK" style="background-color: #EFEDED">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" style="background-color: #EFEDED">
                    </div>
                    <div class="mb-3">
                        <select name="jeniskelamin" class="form-control" style="background-color: #EFEDED">
                            <option selected="selected" disabled>Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="tempatlahir" class="form-control" placeholder="Tempat Lahir" style="background-color: #EFEDED">
                    </div>
                    <div class="mb-3">
                        <input type="date" name="tanggallahir" class="form-control" placeholder="Tanggal Lahir" style="background-color: #EFEDED">
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Alamat" id="floatingTextarea" name="alamat" style="background-color: #EFEDED"></textarea>
                        <label for="floatingTextarea">Alamat</label>
                    </div>
                    <div class="mb-3">
                        <select name="lokasi" class="form-control" style="background-color: #EFEDED">
                            <option selected="selected" disabled>Lokasi Vaksin</option>
                            <option value="Puskesmas Ajibarang 1">Puskesmas Ajibarang 1</option>
                            <option value="Pukesmas Ajibarang">Pukesmas Ajibarang</option>
                            <option value="Puskesmas Wangon 2">Puskesmas Wangon 2</option>
                            <option value="Balai Desa Jingkang">Balai Desa Jingkang</option>
                            <option value="Puskesmas Pekuncen">Puskesmas Pekuncen</option>
                            <option value="Puskesmas Purwojati">Puskesmas Purwojati</option>
                            <option value="Puskesmas 1 Cilongok">Puskesmas 1 Cilongok</option>
                            <option value="Puskesmas Wangon 1">Puskesmas Wangon 1</option>
                            <option value="Puskesmas Lumbir">Puskesmas Lumbir</option>
                            <option value="Puskesmas Kedungbanteng">Puskesmas Kedungbanteng</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <select name="vaksin" class="form-control" style="background-color: #EFEDED">
                            <option selected="selected" disabled>Jenis Vaksin</option>
                            <option value="Astrazeneca">Astrazeneca</option>
                            <option value="Sinovac">Sinovac</option>
                            <option value="Moderna">Moderna</option>
                        </select>
                    </div>
                    <div class="mb-1">
                        <button class="btn btn-lg w-100 text-white" type="submit" style="background-image: linear-gradient(to right bottom, #17c2ec, #00afe7, #009ce0, #0589d6, #3174c9);">Daftar Vaksinasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


{{-- <form action="/daftar" method="POST">
    @csrf
    <input type="number" class="form-control" name="nik">
    <input type="text" name="nama" class="form-control">
    <select name="vaksin">
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="mercedes">Mercedes</option>
        <option value="audi">Audi</option>
    </select>
    <select name="jeniskelamin">
        <option value="laki">laki</option>
        <option value="perempuan">perempuan</option>
    </select>
    <input type="date" name="tanggallahir">
    
    <button type="submit">kirim</button>
</form> --}}