{{-- resources/views/vendor/backpack/crud/fields/custom_select2_from_ajax.blade.php --}}

<!-- Example of Select2 field view -->
<div class="form-group">
    <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
    <select
        name="{{ $field['name'] }}"
        id="{{ $field['name'] }}"
        class="form-control select2"
        data-ajax--url="{{ $field['data_source'] }}"
    ></select>
</div>

@push('crud_fields_scripts')
    <script>
        // Include any necessary JavaScript code for your custom field here
        // Example: $('.select2').select2();
    </script>
@endpush
