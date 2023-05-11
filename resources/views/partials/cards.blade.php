@foreach ($movies as $item)
<div class="col-3 p-3">
    <div class="card bg-light" style="width: 18rem;">
        <div class="card-body text-center">
        <h3 class="card-title mb-4">{{$item->title}}</h3>
        <h6 class="small">ORIGINAL TITLE</h6>
        <h5 class="card-tex text-uppercase small fw-bold text-muted">{{$item->original_title}}</h5>
          <p class="card-tex text-uppercase small fw-bold text-muted">{{$item->nationality}}</p>
        </div>
      </div>
</div>

@endforeach