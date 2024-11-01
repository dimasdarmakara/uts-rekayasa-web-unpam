@extends('pelanggan.layout.index')

@section('content')
<div class="row mt-4">
    <div class="col-md-3 mt-2">
        <div class="card" style="width: 100%;">
            <div class="card-header">
              Kategori
            </div>
            <div class="card-body">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          T-shirt
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for T-shirt category.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          Hoodie
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for Hoodie category.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          T-Shirt Wanita
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for T-Shirt Wanita category.</div>
                      </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <div class="col-md-9 my-5 mt-2"> 
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-3"> 
            @foreach ($produks as $produk)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset($produk->gambar) }}" class="card-img-top" alt="{{ $produk->nama }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $produk->nama }}</h5>
                        <p>Rp. {{ number_format($produk->harga, 0, ',', '.') }}</p>
                        <p class="card-text"><i class="fa-regular fa-star"></i> 5.9</p>
                        <a href="{{ route('transaksi', $produk->id) }}" class="btn btn-success d-flex justify-content-center gap-2">
                            <i class="fa-solid fa-cart-plus"></i>
                            <span>Beli Sekarang</span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
