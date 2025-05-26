@extends('layouts.admin')

@section('title', 'Thêm slide mới')
@section('content_header', 'Thêm slide mới')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Thêm slide mới</h3>
  </div>

  <form action="{{ route('admin.slides.store') }}" method="POST" enctype="multipart/form-data" id="slideForm">
    @csrf
    <div class="card-body">
      <div class="mb-3">
        <label for="title" class="form-label">Tiêu đề</label>
        <input type="text" class="form-control" id="title" name="title" required>
        <div class="invalid-feedback">Vui lòng nhập tiêu đề slide.</div>
      </div>

      <div class="mb-3">
        <label for="image" class="form-label">Ảnh slide</label>
        <input type="file"
         name="image"
         id="image"
         accept="image/*">
        <div class="invalid-feedback">Vui lòng chọn ảnh.</div>
      </div>

      <div class="form-check form-switch mb-3">
        <input class="form-check-input" type="checkbox" id="status" name="status" checked value="1">
        <label class="form-check-label" for="status">Hiển thị slide</label>
      </div>
    </div>

    <div class="card-footer text-end">
      <button type="submit" class="btn btn-primary">
        <i class="bi bi-save"></i> Lưu
      </button>
    </div>
  </form>
</div>
@endsection

@push('js')
<script>
  console.log(document.querySelector('#image').files);

  document.getElementById('slideForm').addEventListener('submit', function (e) {
    let valid = true;
    const title = document.getElementById('title');
    const image = document.getElementById('image');

    if (title.value.trim() === '') {
      title.classList.add('is-invalid');
      valid = false;
    } else {
      title.classList.remove('is-invalid');
    }

    if (!image.files.length) {
      image.classList.add('is-invalid');
      valid = false;
    } else {
      image.classList.remove('is-invalid');
    }

    if (!valid) {
      e.preventDefault();
      Toastify({
        text: "Vui lòng điền đầy đủ thông tin!",
        duration: 2500,
        gravity: "top",
        position: "right",
        backgroundColor: "#dc3545"
      }).showToast();
    }
  });
</script>
@endpush
