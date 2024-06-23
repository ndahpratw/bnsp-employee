document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById("form");
    if (form) {
        form.addEventListener('submit', function(event) {
            if (!CheckForm()) {
                event.preventDefault();
            }
        });
    } else {
        console.error("Form not found!");
    }
});

function CheckForm() {
    let isValid = true;

    const nama = document.getElementById("nama_lengkap");
    const NIK = document.getElementById("NIK");
    const tempat_lahir = document.getElementById("tempat_lahir");
    const tanggal_lahir = document.getElementById("tanggal_lahir");
    const jenis_kelamin = document.getElementById("jenis_kelamin");
    const agama = document.getElementById("agama");
    const status_menikah = document.getElementById("status_menikah");
    const peran = document.getElementById("peran");
    const status_kepegawaian = document.getElementById("status_kepegawaian");
    const bergabung = document.getElementById("bergabung");
    const pendidikan_terakhir = document.getElementById("pendidikan_terakhir");
    const nama_instansi = document.getElementById("nama_instansi");
    const jurusan = document.getElementById("jurusan");
    const tahun_lulus = document.getElementById("tahun_lulus");
    const email = document.getElementById("email");
    const telepon = document.getElementById("no_telepon");
    const alamat = document.getElementById("alamat");

    //nama
    var namaValue = nama.value.trim();
    if(namaValue == '') {
        document.getElementById("nama_error").innerHTML='<em>Nama lengkap tidak boleh kosong</em>';
        isValid = false;
    } else if(!namaValue.match(/^[a-zA-Z]*$/)){
        document.getElementById("nama_error").innerHTML='<em>Nama lengkap tidak boleh mengandung angka </em>';
        isValid = false;
    } else {
        document.getElementById('nama_error').innerHTML='';
    }

    //NIK
    var NIK_value = NIK.value;
    if(NIK_value == '') {
        document.getElementById("NIK_error").innerHTML='<em>NIK tidak boleh kosong</em>';
        isValid = false;
    } else if(NIK_value.match(/^[a-zA-Z]*$/)){
        document.getElementById("NIK_error").innerHTML='<em>NIK berupa angka </em>';
        isValid = false;
    } else if (NIK_value.length !== 16) {
        document.getElementById("NIK_error").innerHTML = '<em>NIK harus terdiri dari 16 karakter</em>';
        isValid = false;
    } else {
        document.getElementById('NIK_error').innerHTML='';
    }

    //tempat lahir
    var tempat_lahir_value = tempat_lahir.value;
    if(tempat_lahir_value == '') {
        document.getElementById("tempat_lahir_error").innerHTML='<em>Tempat lahir tidak boleh kosong</em>';
        isValid = false;
    } else if(!tempat_lahir_value.match(/^[a-zA-Z]*$/)){
        document.getElementById("tempat_lahir_error").innerHTML='<em>Tempat lahir tidak boleh mengandung angka</em>';
        isValid = false;
    } else {
        document.getElementById('tempat_lahir_error').innerHTML='';
    }

    //tanggal lahir
    var tanggal_lahir_value = tanggal_lahir.value;
    if(tanggal_lahir_value == '') {
        document.getElementById("tanggal_lahir_error").innerHTML='<em>Tanggal lahir tidak boleh kosong</em>';
        isValid = false;
    } else {
        document.getElementById('tanggal_lahir_error').innerHTML='';
    }

    //jenis_kelamin
    var jenis_kelamin_value = jenis_kelamin.value;
    if(jenis_kelamin_value == 'none') {
        document.getElementById("jenis_kelamin_error").innerHTML='<em>Jenis kelamin tidak boleh kosong</em>';
        isValid = false;
    } else {
        document.getElementById('jenis_kelamin_error').innerHTML='';
    }

    //agama
    var agama_value = agama.value;
    if(agama_value == 'none') {
        document.getElementById("agama_error").innerHTML='<em>Agama tidak boleh kosong</em>';
        isValid = false;
    } else {
        document.getElementById('agama_error').innerHTML='';
    }

    //status menikah
    var status_menikah_value = status_menikah.value;
    if(status_menikah_value == 'none') {
        document.getElementById("status_menikah_error").innerHTML='<em>Status menikah tidak boleh kosong</em>';
        isValid = false;
    } else {
        document.getElementById('status_menikah_error').innerHTML='';
    }

    //status kepegawaian
    var status_kepegawaian_value = status_kepegawaian.value;
    if(status_kepegawaian_value == 'none') {
        document.getElementById("status_kepegawaian_error").innerHTML='<em>Status kepegawaian tidak boleh kosong</em>';
        isValid = false;
    } else {
        document.getElementById('status_kepegawaian_error').innerHTML='';
    }

    //peran
    var peran_value = peran.value;
    if(peran_value == 'none') {
        document.getElementById("peran_error").innerHTML='<em>Peran tidak boleh kosong</em>';
        isValid = false;
    } else {
        document.getElementById('peran_error').innerHTML='';
    }

    //bergabung
    var bergabung_value = bergabung.value;
    if(bergabung_value == '') {
        document.getElementById("bergabung_error").innerHTML='<em>Tanggal bergabung tidak boleh kosong</em>';
        isValid = false;
    } else {
        document.getElementById('bergabung_error').innerHTML='';
    }

    //pendidikan terakhir
    var pendidikan_terakhir_value = pendidikan_terakhir.value;
    if(pendidikan_terakhir_value == 'none') {
        document.getElementById("pendidikan_terakhir_error").innerHTML='<em>Pendidikan terakhir tidak boleh kosong</em>';
        isValid = false;
    } else {
        document.getElementById('pendidikan_terakhir_error').innerHTML='';
    }

    //nama instansi
    var nama_instansi_value = nama_instansi.value.trim();
    if(nama_instansi_value == '') {
        document.getElementById("nama_instansi_error").innerHTML='<em>Nama instansi tidak boleh kosong</em>';
        isValid = false;
    } else if(!nama_instansi_value.match(/^[a-zA-Z\s]*$/)){
        document.getElementById("nama_instansi_error").innerHTML='<em>Nama instansi tidak boleh mengandung angka </em>';
        isValid = false;
    } else {
        document.getElementById('nama_instansi_error').innerHTML='';
    }

    //jurusan
    var jurusan_value = jurusan.value.trim();
    if(jurusan_value == '') {
        document.getElementById("jurusan_error").innerHTML='<em>Jurusan tidak boleh kosong</em>';
        isValid = false;
    } else if(!jurusan_value.match(/^[a-zA-Z\s]*$/)){
        document.getElementById("jurusan_error").innerHTML='<em>Jurusan tidak boleh mengandung angka </em>';
        isValid = false;
    } else {
        document.getElementById('jurusan_error').innerHTML='';
    }

    //tahun lulus
    var tahun_lulus_value = tahun_lulus.value;
    if(tahun_lulus_value == '') {
        document.getElementById("tahun_lulus_error").innerHTML='<em>Tahun lulus tidak boleh kosong</em>';
        isValid = false;
    } else if(tahun_lulus_value.match(/^[a-zA-Z]*$/)){
        document.getElementById("tahun_lulus_error").innerHTML='<em>Tahun lulus berupa angka </em>';
        isValid = false;
    } else if (tahun_lulus_value.length !== 4) {
        document.getElementById("tahun_lulus_error").innerHTML = '<em>Tahun lulus terdiri dari 4 karakter</em>';
        isValid = false;
    } else {
        document.getElementById('tahun_lulus_error').innerHTML='';
    }

    //email
    var email_value = email.value.trim();
    if(email_value == '') {
        document.getElementById("email_error").innerHTML='<em>Email tidak boleh kosong</em>';
        isValid = false;
    } else if(!email_value.match(/^([a-z0-9_\.-]+)@([\da-z\.-]+)\./)){
        document.getElementById("email_error").innerHTML='<em>Email tidak valid </em>';
        isValid = false;
    } else {
        document.getElementById('email_error').innerHTML='';
    }   
    
    //telepon
    var telepon_value = telepon.value;
    if(telepon_value == '') {
        document.getElementById("telepon_error").innerHTML='<em>Telepon tidak boleh kosong</em>';
        isValid = false;
    } else if(telepon_value.match(/^[a-zA-Z]*$/)){
        document.getElementById("telepon_error").innerHTML='<em>Telepon berupa angka </em>';
        isValid = false;
    } else if (telepon_value.length !== 13) {
        document.getElementById("telepon_error").innerHTML = '<em>Telepon terdiri dari 13 karakter</em>';
        isValid = false;
    } else {
        document.getElementById('telepon_error').innerHTML='';
    }

    //alamat
    var alamat_value = alamat.value.trim();
    if(alamat_value == '') {
        document.getElementById("alamat_error").innerHTML='<em>Alamat tidak boleh kosong</em>';
        isValid = false;
    } else {
        document.getElementById('alamat_error').innerHTML='';
    }

    return isValid;
}
