@foreach ($movies as $item)
<div class="col-3 p-3">
    <div class="card bg-light" style="width: 18rem;">
        <div class="card-body text-center">

        <h3 class="card-title">{{$item->title}}</h3>
        <p class="card-tex text-uppercase small fw-bold text-muted">{{$item->original_title}}</p>
          <p class="card-tex text-uppercase small fw-bold text-muted">{{$item->nationality}}</p>
        </div>
      </div>
</div>

@endforeach