@props(['name', 'label', 'checked' => false])
<div class="form-check form-switch mb-3">
  <input
    type="checkbox"
    id="{{ $name }}"
    name="{{ $name }}"
    value="1"
    @if($checked) checked @endif
    {{ $attributes->merge(['class' => 'form-check-input']) }}
  />
  <label for="{{ $name }}" class="form-check-label">{{ $label }}</label>
</div>