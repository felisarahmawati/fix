<div class="shadow p-3 mb-5 bg-body rounded">
    <h5 class="card-title fw-bold">KetentuanLayanan</h5>
    <hr width="100%" color="#c0c0c0">
    <p class="text-center fw-bold">{{ $detail->judul }}</p>
    <p class="text-center fw-bold" style="font-size: 15px">{{ $detail->subdetail }}</p>
    <div class="p-4">
        <p class="text-middle">
            {!! $detail->isi !!}
        </p>
    </div>
</div>
