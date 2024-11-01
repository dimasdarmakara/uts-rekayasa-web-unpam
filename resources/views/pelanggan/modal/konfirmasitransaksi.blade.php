<div class="modal fade" id="modalKonfirmasi" tabindex="-1" aria-labelledby="modalKonfirmasiLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <h5 class="modal-title" id="modalKonfirmasiLabel">Ringkasan Pembelian</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p><strong>Nama Produk:</strong> <span id="ringkasanNamaProduk"></span></p>
          <p><strong>Jumlah:</strong> <span id="ringkasanJumlah"></span></p>
          <p><strong>Ukuran:</strong> <span id="ringkasanUkuran"></span></p>
          <p><strong>Jasa Pengiriman:</strong> <span id="ringkasanPengiriman"></span></p>
          <p><strong>Total Harga:</strong> <span id="ringkasanTotalHarga"></span></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary" onclick="prosesPembelian()">Ya Benar</button>
        </div>
      </div>
    </div>
  </div>