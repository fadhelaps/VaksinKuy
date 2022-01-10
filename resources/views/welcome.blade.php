@extends('layout.main')

@section('container')
    <div class="container-fluid pt-5" style="background-image: linear-gradient(to right bottom, #17c2ec, #00afe7, #009ce0, #0589d6, #3174c9);">
        <div class="container pt-5">
            <div class="row align-items-center">
                <div class="col-12 col-lg-5 text-white">
                    <h1 class=""><b>Mari kita cegah dan lawan COVID-19 dengan vaksinasi</b></h1>
                    <p class="my-4" style="font-size: 18px">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla</p>
                    <a href="/daftar" class="btn btn-lg btn-light" style="color: #3174C9">Daftar Vaksin</a>
                </div>
                <div class="col-12 col-lg-6 offset-lg-1 text-center">
                    <img src="/images/header-home.png" alt="" class="img-fluid" style="width: 80%">
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5 py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <p style="font-size: 18px">Tentang</p>
                <h2 style="color: #3174C9"><b>Vaksinasi COVID-19</b></h2>
                <p style="font-size: 18px; width: 80%" class="my-4">Such a riot of sea and wind strews the whole extent of beach with whatever has been lost or thrown overboard, or torn out of sunken ships. Many a man has made a good week’s work in a single day by what he has found while walking along the Beach when the surf was down.</p>
            </div>
            <div class="col-lg-6 col-12">
                <img src="/images/home-2.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <div class="container my-5 py-5">
        <div class="row mb-3">
            <div class="col-12">
                <h2 style="color: #3174C9"><b>Jenis Vaksin COVID-19<br>Yang dipakai di Indonesia</b></h2>
            </div>
        </div>
        <div class="row row-cols-lg-3 row-cols-1 align-items-center">
            <div class="col">
                <div class="card border-white" style="background-color: #F3FDFF; border-radius: 10px">
                    <img src="/images/jenis-vaksin.png" class="card-img-top img-fluid mx-auto" style="width: 40%" alt="">
                    <div class="card-body text-center">
                        <h4 class="card-title mb-3" style="color: #626262">AstraZaneca</h4>
                        <p class="text-muted w-75 mx-auto" style="font-size:12px">Vaksin Covid-19 Oxford–AstraZeneca, juga dikenal sebagai AZD1222, adalah sebuah vaksin COVID-19 yang dikembangkan oleh Universitas Oxford dan AstraZeneca yang diberikan lewat suntikan intraotot. Risetnya dilakukan oleh Jenner Institute dan Oxford Vaccine Group dari Universitas Oxford</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-white shadow py-4" style="border-radius: 10px">
                    <img src="/images/jenis-vaksin.png" class="card-img-top img-fluid mx-auto" style="width: 40%" alt="">
                    <div class="card-body text-center">
                        <h4 class="card-title mb-3" style="color: black">Sinovac</h4>
                        <p class="text-dark w-75 mx-auto" style="font-size:12px">Vaksin Sinovac adalah vaksin untuk mencegah infeksi virus SARS-CoV-2 atau COVID-19. Vaksin Sinovac yang dikenal juga dengan nama CoronaVac sudah mendapat izin penggunaan darurat dari Badan Pengawas Obat dan Makanan (BPOM) RI.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-white" style="background-color: #F3FDFF; border-radius: 10px">
                    <img src="/images/jenis-vaksin.png" class="card-img-top img-fluid mx-auto" style="width: 40%" alt="">
                    <div class="card-body text-center">
                        <h4 class="card-title mb-3" style="color: #626262">Moderna</h4>
                        <p class="text-muted w-75 mx-auto" style="font-size:12px">Vaksin Covid-19 Oxford–AstraZeneca, juga dikenal sebagai AZD1222, adalah sebuah vaksin COVID-19 yang dikembangkan oleh Universitas Oxford dan AstraZeneca yang diberikan lewat suntikan intraotot. Risetnya dilakukan oleh Jenner Institute dan Oxford Vaccine Group dari Universitas Oxford</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5 py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12 shadow py-5 px-4" style="border-radius: 10px">
                <h2 style="color: #2A88D2"><b>Cari Lokasi Penyedia <br>Vaksin COVID-19 Terdekat</b></h2>
                <div class="row mt-4">
                    <div class="col-9">
                        <input type="text" class="form-control form-control-lg" placeholder="Cari berdasarkan nama" style="background-color: #F0F0F0;">
                    </div>
                    <div class="col-3">
                        <a href="" class="btn btn-lg" style="color: white; background-image: linear-gradient(to right bottom, #17c2ec, #00afe7, #009ce0, #0589d6, #3174c9);"><b>Cari lokasi</b></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="row">
                    <div class="col-12">
                        <img src="/images/map.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5 py-5" style="background-image: linear-gradient(to right bottom, #17c2ec, #00afe7, #009ce0, #0589d6, #3174c9); border-radius: 10px">
        <div class="row w-75 mx-auto text-white">
            <div class="col-3">
                <h3>Vaksin</h3>
                <p style="font-size: 14px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
            </div>
            <div class="col-3">
                <h3>Tentang</h3>
                <p style="font-size: 14px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
            </div>
            <div class="col-3">
                <h3>Layanan</h3>
                <p style="font-size: 14px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
            </div>
            <div class="col-3">
                <h3>Sosial Media</h3>
                <p style="font-size: 14px" class="mb-1"><i class="fab fa-facebook-f"> </i> Vaksin</p>
                <p style="font-size: 14px" class="mb-1"><i class="fab fa-instagram"> </i> Vaksin</p>
                <p style="font-size: 14px" class="mb-1"><i class="fas fa-phone-alt"> </i> 081-XXX-XXX</p>
            </div>
        </div>
    </div>
@endsection