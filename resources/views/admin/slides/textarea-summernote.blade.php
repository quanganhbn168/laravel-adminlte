{{-- resources/views/components/form/textarea-summernote.blade.php --}}
@props(['name', 'label', 'value' => '', 'required' => false])
<div class="mb-3">
  <label for="{{ $name }}" class="form-label">{{ $label }}</label>
  <textarea
    id="{{ $name }}"
    name="{{ $name }}"
    @if($required) required @endif
    {{ $attributes->merge(['class' => 'form-control summernote'.($errors->has($name) ? ' is-invalid' : '')]) }}
  >{{ old($name, $value) }}</textarea>
  @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
  @else
    <div class="invalid-feedback">Vui lòng nhập {{ mb_strtolower($label) }}.</div>
  @enderror
</div>