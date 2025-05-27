@extends('layouts.admin')

@section('title', 'Chỉnh sửa slide')
@section('content_header', 'Chỉnh sửa slide')
@section('content')
  <x-form.card-form
    :action="route('admin.slides.update', $slide->id)"
    method="PUT"
    header="Chỉnh sửa slide"
    submit-label="Cập nhật"
    :cancel-url="route('admin.slides.index')"
  >
    <x-form.input-text
      name="title"
      label="Tiêu đề"
      :value="$slide->title"
      required
    />

    <x-form.filepond
      name="image"
      label="Ảnh slide"
      folder="slides"
      :initial-src="asset('storage/'.$slide->image)"
    />

    <x-form.checkbox
      name="status"
      label="Hiển thị slide"
      :checked="$slide->status"
    />
  </x-form.card-form>
@endsection
