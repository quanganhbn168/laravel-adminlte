@props(['name', 'label', 'folder', 'initialSrc' => null, 'accept' => 'image/*'])
<div class="mb-3">
  <label class="form-label">{{ $label }}</label>
  <input
    type="file"
    name="{{ $name }}"
    class="filepond {{ $errors->has($name) ? 'is-invalid' : '' }}"
    data-folder="{{ $folder }}"
    @if($initialSrc) data-initial-src="{{ $initialSrc }}" @endif
    accept="{{ $accept }}"
    {{ $attributes }}
  />
  @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
  @else
    <div class="invalid-feedback">Vui lòng chọn ảnh hợp lệ.</div>
  @enderror
</div>