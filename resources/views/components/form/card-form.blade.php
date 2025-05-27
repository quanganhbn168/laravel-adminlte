@props(['action', 'method' => 'POST', 'header' => null, 'submitLabel' => 'Lưu', 'cancelUrl' => null])
<div class="card">
  @if($header)
    <div class="card-header">
      <h3 class="card-title">{{ $header }}</h3>
    </div>
  @endif

  <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(strtoupper($method) !== 'POST')
      @method($method)
    @endif

    <div class="card-body">
      {{ $slot }}
    </div>

    <div class="card-footer text-end">
      <button type="submit" class="btn btn-primary">
        <i class="bi bi-save"></i> {{ $submitLabel }}
      </button>
      @if($cancelUrl)
        <a href="{{ $cancelUrl }}" class="btn btn-secondary ms-2">
          <i class="bi bi-arrow-left"></i> Quay về
        </a>
      @endif
    </div>
  </form>
</div>