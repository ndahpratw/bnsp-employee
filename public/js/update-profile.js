document.getElementById('profileInput').addEventListener('change', function(event) {
    var reader = new FileReader();
    reader.onload = function() {
        var output = document.getElementById('profile');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
});
