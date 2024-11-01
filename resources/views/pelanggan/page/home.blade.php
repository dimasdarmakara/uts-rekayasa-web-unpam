@extends('pelanggan.layout.index')

@section('content')


{{-- Carousel --}}
<div class="container-fluid mt-0"> 
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('assets/images/banner4.jpg') }}" style="border-radius: 15px; opacity: 90%;" class="d-block w-100" alt="..."> 
        <div class="carousel-caption d-none d-md-block mb-3 fw-bolder" style="color: rgb(117, 190, 123)">
          <h1 class="fst-italic">Selamat Datang!</h1>
          <p>Tentukan fashionmu dan temukan stylemu bersama octamorph sekarang</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('assets/images/banner5.jpg') }}" style="border-radius: 15px;" class="d-block w-100" alt="..."> 
        <div class="carousel-caption d-none d-md-block mb-4 fw-bolder" style="color: rgb(245, 248, 245)">
          <h1 class="fst-italic">New Design!</h1>
          <p>Ryomen sukuna cocok untuk kamu yang suka gaya elegan & stylish</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('assets/images/banner3.jpg') }}" style="border-radius: 15px;" class="d-block w-100" alt="..."> 
        <div class="carousel-caption d-none d-md-block mb-5 fw-bolder" style="color: rgb(0, 0, 0)">
          <h1 class="fst-italic">Octamorph Review</h1>
          <p>Beberapa produk kami sudah sering menjadi 
           wardrobe untuk film-film layar lebar</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
{{-- end carousel --}}

{{-- Best Seller --}}
<h3 class="text-center mt-md-5 mb-md-2 fw-bold">Best Seller</h3>
<div class="container mt-4">
  <div class="row flex-nowrap overflow-auto">

    <div class="col-md-3 mt-3 mb-4">
      <div class="card" style="width: 100%;">
        <img src="{{ asset('assets/images/6.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">T-Shirt Urban Artist</h5>
          <p>Rp. 170.000</p>
          <p class="card-text"><i class="fa-regular fa-star"></i> 5.9</p>
          <a href="{{ route('shop') }}" class="btn btn-success d-flex justify-content-center gap-2">
            <i class="fa-solid fa-eye mt-1"></i>
            <span>Cek Detail</span>
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-3 mt-3 mb-4">
      <div class="card" style="width: 100%;">
        <img src="{{ asset('assets/images/10.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">T-Shirt Unicloth Black</h5>
          <p>Rp. 180.000</p>
          <p class="card-text"><i class="fa-regular fa-star"></i> 5.9</p>
          <a href="{{ route('shop') }}" class="btn btn-success d-flex justify-content-center gap-2">
            <i class="fa-solid fa-eye mt-1"></i>
            <span>Cek Detail</span>
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-3 mt-3 mb-4">
      <div class="card" style="width: 100%;">
        <img src="{{ asset('assets/images/13.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">T-Shirt Icedblue</h5>
          <p>Rp. 170.000</p>
          <p class="card-text"><i class="fa-regular fa-star"></i> 5.9</p>
          <a href="{{ route('shop') }}" class="btn btn-success d-flex justify-content-center gap-2">
            <i class="fa-solid fa-eye mt-1"></i>
            <span>Cek Detail</span>
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-3 mt-3 mb-4">
      <div class="card" style="width: 100%;">
        <img src="{{ asset('assets/images/12.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Hoodie Enjoy The Day</h5>
          <p>Rp. 200.000</p>
          <p class="card-text"><i class="fa-regular fa-star"></i> 5.9</p>
          <a href="{{ route('shop') }}" class="btn btn-success d-flex justify-content-center gap-2">
            <i class="fa-solid fa-eye mt-1"></i>
            <span>Cek Detail</span>
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-3 mt-3 mb-4">
      <div class="card" style="width: 100%;">
        <img src="{{ asset('assets/images/5.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Hoodie Abstract </h5>
          <p>Rp. 150.000</p>
          <p class="card-text"><i class="fa-regular fa-star"></i> 5.9</p>
          <a href="{{ route('shop') }}" class="btn btn-success d-flex justify-content-center gap-2">
            <i class="fa-solid fa-eye mt-1"></i>
            <span>Cek Detail</span>
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-3 mt-3 mb-4">
      <div class="card" style="width: 100%;">
        <img src="{{ asset('assets/images/2.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">T-Shirt DarkGreen </h5>
          <p>Rp. 160.000</p>
          <p class="card-text"><i class="fa-regular fa-star"></i> 5.9</p>
          <a href="{{ route('shop') }}" class="btn btn-success d-flex justify-content-center gap-2">
            <i class="fa-solid fa-eye mt-1"></i>
            <span>Cek Detail</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End Best Seller --}}

<h3 class="text-center mt-md-5 mb-md-2 fw-bold">New Product!</h3>
<div class="container my-5">
  <!-- Banner Section 1 -->
  <div class="row bg-light p-4 align-items-center" style="border-radius: 10px;">
      <div class="col-md-5">
          <img src="{{ asset('assets/images/newproduk2.jpg') }}" alt="Banner Image" class="img-fluid rounded" style="width: 100%; height: auto; object-fit: cover;">
      </div>
      <div class="col-md-7">
        <h2 class="mb-3 fw-bolder fst-italic">Wieent Pole Hoodie</h2>
        <p>Untuk kamu yang suka gaya elegan namun tetap ingin terlihat trendy. Wieent Pole Hoodie cocok untuk jadi salah satu koleksimu</p>
        <p>Hidupkan semangat dan percaya dirimu bersama produk terbaru kami!</p>
        <button class="btn btn-primary mt-3" type="button" onclick="window.location.href='{{ route('shop') }}'">Cek Detail</button>
      </div>
  </div>
</div>

<div class="container my-5">
  <!-- Banner Section2 -->
  <div class="row bg-light p-4 align-items-center" style="border-radius: 10px;">
      <div class="col-md-7">
          <h2 class="mb-3 fw-bolder fst-italic">NeonFlow Urban</h2>
          <p>Gaya streetwear kekinian, cocok untuk kamu yang ingin tampil beda dan percaya diri. Waktunya upgrade outfit kamu dengan desain terbaru yang berani dan penuh karakter!</p>
          <p>Ekspresikan gaya urbanmu dengan koleksi terbaru kami!</p>
          <button class="btn btn-primary mt-3" type="button" onclick="window.location.href='{{ route('shop') }}'">Cek Detail</button>
      </div>
      <div class="col-md-5">
          <img src="{{ asset('assets/images/newproduk1.jpg') }}" alt="Banner Image" class="img-fluid rounded" style="width: 100%; height: auto; object-fit: cover;">
      </div>
  </div>
</div>



@endsection
