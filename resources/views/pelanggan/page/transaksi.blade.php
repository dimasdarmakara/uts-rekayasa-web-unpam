@extends('pelanggan.layout.index')

@section('content')
<div class="container my-5">
    <div class="card">
        <div class="card-header text-center">
            <h4 style="fw-bold">Detail Transaksi</h4>
        </div>
        <div class="card-body mt-3">
            <div class="row mb-3">
                <div class="col-md-4">
                    <img src="{{ asset($produk->gambar) }}" alt="{{ $produk->nama }}" class="img-fluid" style="border-radius: 10px;">
                </div>
                <div class="col-md-8">
                    <h3 class="fw-bold mb-3">{{ $produk->nama }}</h3>
                    <h6 class="fw-bold mb-3">{{ $produk->deskripsi }}</h6>
                    <p id="hargaProduk" style="display:none;">{{ $produk->harga }}</p> 
                    <p>Harga Satuan: Rp. {{ number_format($produk->harga, 0, ',', '.') }}</p>
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah" style="width: 15%;" value="0" min="0" oninput="hitungTotal()">
                    </div>

                    <div class="mb-3">
                        <label for="size" class="form-label">Pilih Ukuran Baju</label>
                        <select id="size" style="width: 70%;" class="form-select">
                            <option>Pilih Ukuran Baju</option>
                            <option>S</option>
                            <option>M</option>
                            <option>XL</option>
                            <option>XXL</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="pengiriman" class="form-label">Pilih Jasa Pengiriman</label>
                        <select id="pengiriman" style="width: 70%;" class="form-select" onchange="hitungTotal()">
                            <option value="0">Pilih Jasa Pengiriman</option>
                            <option value="10000">JNE - Rp. 10,000</option>
                            <option value="10000">TIKI - Rp. 10,000</option>
                            <option value="15000">SiCepat - Rp. 15,000</option>
                            <option value="25000">GoSend - Rp. 25,000</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Total Harga</label>
                        <p class="form-control-plaintext fw-bold" id="total-Harga">Rp. 0</p>
                    </div>
                    <button type="button" class="btn btn-primary w-100" onclick="showModal()">Konfirmasi Pembelian</button>
                </div>
            </div>
        </div>
    </div>
</div>
@include('pelanggan.modal.konfirmasitransaksi')
<script>
    function showModal() {
        const namaProduk = "{{ $produk->nama }}";
        const jumlah = document.getElementById("jumlah").value;
        const size = document.getElementById("size").value;
        const pengirimanText = document.getElementById("pengiriman").selectedOptions[0].text;
        const totalHarga = document.getElementById("total-Harga").textContent;
    
        document.getElementById("ringkasanNamaProduk").textContent = namaProduk;
        document.getElementById("ringkasanJumlah").textContent = jumlah;
        document.getElementById("ringkasanUkuran").textContent = size;
        document.getElementById("ringkasanPengiriman").textContent = pengirimanText;
        document.getElementById("ringkasanTotalHarga").textContent = totalHarga;
    
        
        new bootstrap.Modal(document.getElementById("modalKonfirmasi")).show();
    }
    
    function hitungTotal() {
        const harga = parseFloat(document.getElementById("hargaProduk").textContent);
        const jumlah = parseInt(document.getElementById("jumlah").value);
        const pengiriman = parseFloat(document.getElementById("pengiriman").value);
    
        const totalProduk = harga * jumlah;
        const total = totalProduk + (isNaN(pengiriman) ? 0 : pengiriman);
        document.getElementById("total-Harga").textContent = `Rp. ${total.toLocaleString("id-ID")}`;
    }
    
    function prosesPembelian() {
    Swal.fire({
        title: 'Pembelian Berhasil!',
        text: 'Pembelian Anda telah dikonfirmasi!',
        icon: 'success',
        confirmButtonText: 'OK'
    });
    }

    </script>
@endsection
