@extends('pelanggan.layout.index')

@section('content')
<h2 class="text-center mt-md-5 mb-md-2 ">Profile</h2>
<div class="row mt-4 align-items-center">
    <div class="col-md-6">
        <div class="content-text">
            <h3 class="fw-bolder">octamorph.</h3>
            <p>Octamorph didirikan pada tahun 2019 oleh sekelompok penggemar fashion dan desain yang memiliki visi untuk menghadirkan pakaian kasual yang modern dan penuh karakter.</p>
            <p>Diprakarsai oleh Dimastrio Darma Putra dan beberapa temannya semasa ia duduk dibangku SMK, perusahaan ini awalnya memulai dengan koleksi kaos simpel yang terinspirasi dari gaya streetwear global. Dalam waktu singkat, produk Octamorph mendapatkan sambutan hangat dari konsumen, dan perusahaan pun memperluas lini produknya dengan menambahkan hoodie yang stylish dan nyaman.</p>
            <p>Dengan fokus pada kualitas bahan, kenyamanan, dan desain unik, Octamorph berhasil menarik minat pasar lokal dan merambah dunia online untuk menjangkau lebih banyak penggemar fashion. Filosofi perusahaan ini adalah untuk menggabungkan gaya kekinian dengan daya tahan produk, sehingga setiap pakaian tidak hanya terlihat trendy, tetapi juga dapat diandalkan dalam jangka panjang. Hingga kini, Octamorph terus berkembang dengan komitmen untuk selalu menghadirkan inovasi dan tren baru dalam setiap produknya, menjadikannya pilihan utama bagi mereka yang ingin tampil beda dengan percaya diri.</p>
        </div>
    </div>
    <div class="col-md-6 d-flex justify-content-center">
        <img src="{{ asset('assets/images/ourcompany.jpg') }}" class="img-fluid" style="border-radius:10px; opacity:95%;">
    </div>
</div>

<div class="d-flex justify-content-lg-between mt-5">
    <div>
        <i class="fa-solid fa-users fa-2x"></i> +2000 Pelanggan
    </div>
    <div>
        <i class="fa-solid fa-house fa-2x"></i> +200 Reseller
    </div>
    <div>
        <i class="fa-solid fa-shirt fa-2x"></i> +150 Produk
    </div>
</div>
 
<hr>
<h2 class="text-center mt-md-5 mb-md-2 ">Kontak Kami</h2>
<div class="row mb-md-5 d-flex align-items-stretch">
    <div class="col-md-5 mt-3">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11215.47000833888!2d106.97109314472459!3d-6.24922218833186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c4b1509f1e5%3A0x9d8d18c388ad7f78!2sLagoon%20Avenue%20Mall%20Bekasi!5e0!3m2!1sen!2sid!4v1730257158298!5m2!1sen!2sid" 
            width="100%" 
            style="height: 100%; border:0; border-radius:10px;" 
            allowfullscreen 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

    <div class="col-md-7 mt-3">
        <div class="card h-100">
            <div class="card-header text-center">
                <h4>Kirim Pesan Kepada Kami</h4>
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" aria-describedby="name" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" placeholder="Masukkan Email Anda!">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="pesan" rows="3"></textarea>
                    </div>
                    <div id="emailHelp" class="form-text fst-italic">Pesan anda akan dibaca dan diterima oleh admin kami, dan akan dibalas melalui alamat email anda.</div>
                </div>
                <button class="btn btn-primary mt-5 w-100">Kirim Pesan Anda</button>
            </div>
        </div>
    </div>
</div>

@endsection
