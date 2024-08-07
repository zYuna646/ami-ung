@php
	$id = $multiple ? str_replace('[]', '', $name) : $name;
@endphp
@props([
    'class' => 'mb-3',
    'name',
    'label' => null,
    'value' => old($id),
    'options',
    'multiple' => false,
    'placeholder' => '',
    'itemSelectText' => 'Press to select',
    'search' => true
])
@pushOnce('styles')
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
@endPushOnce
@if ($itemSelectText == '')
	@push('styles')
		<style>
			.choices__list--dropdown .choices__item--selectable:after {
				display: none !important;
			}

			.choices__list--dropdown .choices__item--selectable {
				padding-right: 0 !important;
			}
		</style>
	@endpush
@endif
<div class="{{ $class }}">
	@if ($label)
		<label for="{{ $name }}" class="text-sm">{{ $label }}</label>
	@endif
	<select name="{{ $name }}" id="{{ $id }}" class="@error($id) outline-color-danger-500 @enderror rounded-md border border-neutral-200 bg-neutral-100 p-4 text-sm text-slate-600 focus:outline-none focus:outline-color-info-500" {{ $multiple ? 'multiple' : '' }}>
    @if ($placeholder != '' && !$multiple)
        <option value="">{{ $placeholder }}</option>
    @endif
  </select>
	@error($id)
		<div class="invalid-feedback">{{ $message }}</div>
	@enderror
</div>
@pushOnce('scripts')
	<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
@endPushOnce
@push('scripts2')
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			const id = @json($id);
			const options = @json($options);
			const placeholder = @json($placeholder);
			const value = @json($value);
			const element = document.querySelector(`#${id}`);
			const isMultiple = @json($multiple);
			const itemSelectText = @json($itemSelectText);
			const search = @json($search);

			const choices = options.map((option) => {
				let selected = false

				if (value) {
					if (isMultiple) {
						selected = value.includes(`${option.value}`)
					} else {
						selected = value == option.value ? true : false
					}
				}

				return {
					value: option.value,
					label: option.label,
					selected
				}
			})

			new Choices(element, {
				removeItemButton: isMultiple,
				choices,
				placeholder: true,
				placeholderValue: placeholder,
				itemSelectText,
        searchEnabled: search
			});

			const choicesInner = element.closest('.choices').querySelector('.choices__inner');
			const invalidFeedback = element.closest('.choices').nextElementSibling;

			if (element.classList.contains('is-invalid')) {
				choicesInner.style.border = '1px solid #ea868f';
				invalidFeedback.style.display = 'block';
			}
		})
	</script>
@endpush
