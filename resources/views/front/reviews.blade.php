@if(isset($reviews) && $reviews->count() > 0)
  <section class="container">
    <h3 style="font-weight:bold">Ulasan Terbaru</h3>
    <div class="row">
      @foreach($reviews as $r)
        <div class="col-md-4 mb-2">
          <div class="card">
            <div class="card-body">
              <div style="font-weight:bold">
                {{ $r->is_anonymous ? 'Anonim' : getNameUser($r->user_id) }}
              </div>

              <small class="text-muted">
                {{ $r->kamar->nama_kamar ?? '-' }}
              </small>

              <hr class="my-1">

              <div>
                {{ \Illuminate\Support\Str::limit($r->ulasan, 120) }}
              </div>

              @if(!empty($r->kamar->slug))
                <a class="btn btn-sm btn-outline-primary mt-1" href="{{ url('/room/'.$r->kamar->slug) }}">
                  Lihat Kost
                </a>
              @endif
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>
@endif
