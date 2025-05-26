@extends('layouts.admin')

@section('title', 'Danh sách slide')
@section('content_header', 'Danh sách slide')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Danh sách slide</h5>
      <div class="card-tools">

        <a href="{{ route('admin.slides.create') }}" class="btn btn-primary btn-sm">
          <i class="bi bi-plus-circle"></i> Thêm mới
        </a>
      </div>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped table-bordered m-0">
        <thead class="table-light">
          <tr>
            <th>ID</th>
            <th>Tiêu đề</th>
            <th>Ảnh</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
          </tr>
        </thead>
        <tbody>
          @foreach($slides as $slide)
          <tr>
            <td>{{ $slide->id }}</td>
            <td>{{ $slide->title }}</td>
            <td>
              <img src="{{ asset('storage/' . $slide->image) }}" alt="slide" width="100">
            </td>
            <td>
              <div class="form-check form-switch">
                <input class="form-check-input toggle-status" data-id={{$slide->id}} type="checkbox" {{$slide->status ? 'checked' : ''}} role="switch" id="slide{{$slide->id}}">
                <label class="form-check-label toggle-status" data-id={{$slide->id}} for="slide{{$slide->id}}">{{$slide->status ? 'Hiện' : 'Ẩn'}}</label>
              </div>
            </td>
            <td>
              <a href="{{ route('admin.slides.edit', $slide) }}" class="btn btn-sm btn-warning">
                <i class="bi bi-pencil"></i>
              </a>
              <form method="POST"
              action="{{ route('admin.slides.destroy', $slide) }}"
              class="d-inline-block"
              onsubmit="return confirm('Xoá slide này?')">
              @csrf
              @method('DELETE')
              <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection

@push('js')
<script>
  document.querySelectorAll('.toggle-status').forEach(el => {
    el.addEventListener('change', function () {
      const slideId = this.dataset.id;
      const status = this.checked ? 1 : 0;

      fetch(`/admin/slides/${slideId}/toggle-status`, {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': '{{ csrf_token() }}',
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ status })
      })
      .then(res => res.json())
      .then(data => {
        if (data.success) {
          Toastify({
            text: 'Cập nhật trạng thái thành công!',
            duration: 2000,
            gravity: 'top',
            position: 'right',
            backgroundColor: '#28a745'
          }).showToast();
        } else {
          alert('Có lỗi xảy ra.');
        }
      });
    });
  });
</script>
@endpush
