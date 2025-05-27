@props(['name', 'label', 'value' => '', 'required' => false])
<div class="mb-3">
  <label for="{{ $name }}" class="form-label">{{ $label }}</label>
  <input
    type="text"
    id="{{ $name }}"
    name="{{ $name }}"
    value="{{ old($name, $value) }}"
    @if($required) required @endif
    {{ $attributes->merge(['class' => 'form-control'.($errors->has($name) ? ' is-invalid' : '')]) }}
  >
  @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
  @else
    <div class="invalid-feedback">Vui lòng nhập {{ mb_strtolower($label) }}.</div>
  @enderror
</div>