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
