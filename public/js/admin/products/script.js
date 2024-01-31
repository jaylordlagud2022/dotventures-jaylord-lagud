$(document).ready(function() {
    $('#categories').select2({
        ajax: {
            url: '{{ route('admin.categories') }}', // replace with your actual route
            dataType: 'json',
            processResults: function(data) {
                return {
                    results: data
                };
            },
            cache: true
        }
    });
});
