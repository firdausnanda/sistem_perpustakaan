<div class="row mt-4 g-3">
    @foreach ($jurnal as $e)
        <div class="col-md-1">
            <img src="{{ asset('img/jurnal/pdf.png') }}" style="width: 50px; height: auto;" alt="">
        </div>
        <div class="col-md-11">
            <a class="fw-bold" href="{{ route('user.jurnal.detail', $e->id) }}">
                {{ $e->judul }}
            </a>
            <div>
                <span class="text-secondary" style="font-size: 13px"><i class="fa-solid fa-eye"></i> <span
                        class="text-dark fw-bold">{{ $e->counter ? $e->counter->lihat : 0 }}</span></span>
                <span class="text-secondary" style="font-size: 13px"><i class="fa-solid fa-download"></i>
                    <span
                        class="text-dark fw-bold">{{ $e->counter ? $e->counter->download : 0 }}</span></span>
            </div>

            <span class="text-secondary" style="font-size: 13px">Oleh : <span
                    class="text-dark fw-bold">{{ $e->penulis }}</span></span>
            @if ($e->tahun)
                <span class="text-secondary" style="font-size: 13px">Tahun : <span
                        class="text-dark fw-bold">{{ $e->tahun }}</span></span>
            @endif

            <p class="text-secondary" style="font-size: 14px">{{ Str::limit($e->abstrak, 320) }}</p>
        </div>
    @endforeach
</div>

<div class="row">
    <div class="col">

        @if ($jurnal && $jurnal->count() > 0)
            {{ $jurnal->onEachSide(1)->links('pagination::bootstrap-5') }}
        @endif
    </div>
</div>
