$(document).ready(function() {
    $('#profileInput').on('change', function(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = $('#profile');
            output.attr('src', reader.result);
        };
        reader.readAsDataURL(event.target.files[0]);
    });
});

$(document).ready(function() {
    $('#addProfile').on('change', function(event) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#previewProfile').attr('src', e.target.result);
        };
        reader.readAsDataURL(event.target.files[0]);
    });
});
