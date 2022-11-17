<a href="/user/subkategori/detailbaru"><img src="{{ url('/storage/' . $detail->image) }}" class="card-img-top mt-3" alt=""></a>
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <p style="font-size: 18px">{{ $detail->nama_vendor}}<br>
                    <strong style="font-size: 18px">{{ $detail->kategori->kategori }}</strong>
                </p>
            </div>
            <div class="col">
                <p class="text-success" style="font-size: 18px">
                    <b>Rp {{ $detail->harga }} / hari</b>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-1 text-warning" style="font-size: 18px">
                <i class="bi bi-star-fill"></i>
            </div>
            <div class="col-10">
                <p class="text-muted" style="font-size: 18px"> 3.5 | {{ $detail->status}}</p>
            </div>
        </div>
    </div>
