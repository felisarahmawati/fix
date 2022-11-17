<img src="{{ url('/storage/' . $detail->image) }}" style="width: 50%;" class="card-img-top mt-3" alt=""></a>
<div class="col-lg-11">
    <div class="nama-vendor">
        <p class="fw-bold">{{ $detail->nama_vendor }} | titipsini</p>
    </div>
    <div class="status text-muted">
        <p><i class="bi bi-star-fill text-warning"></i> 3.8 | {{ $detail->status }} | Layanan (24)</p>
    </div>
    <div class="harga">
        <p class="fw-bold">Rp{{ $detail->harga }}/ hari</p>
    </div>
    <hr>
    <hr>

    <div class="row">
        <div class="detail">
            <p class="text-success fw-bold">Detail Layanan</p>
        </div>

        <div class="list-detail row">
            <dd class="col-sm-11 text-muted" style="font-size: 13px">{{ $detail->kategori->kategori }}</dd>
            <br>
            {{-- <dd class="col-sm-9 text-success" style="font-size: 13px">Layanan Kendaraan Kecil</dd> --}}
            <dd class="col-sm-11 text-muted" style="font-size: 13px">{{ $detail->alamat }}</dd>
            {{-- <dd class="col-sm-9 text-success" style="font-size: 13px">Kab. Sleman, Daerah Istimewa Yogyakarta</dd> --}}
        </div>

        <div class="deskripsi">
            <p>Deskripsi {{ $detail->nama_vendor }} | titipsini {!! $detail->deskripsi !!}.
            </p>
            {{-- <ul class="list-unstyled">
                <li>Spesifikasi layanan:
                  <ul>
                    <li>Free cuci kendaraan</li>
                    <li>Kendaraan dibersihkan setiap pagi</li>
                    <li>Kontrol mesin</li>
                    <li>Keamanan terjaga</li>
                    <li>Konsultasi & support</li>
                  </ul>
                </li>
            </ul> --}}
        </div>
    </div>
</div>
