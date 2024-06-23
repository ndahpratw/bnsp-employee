document.addEventListener("DOMContentLoaded", () => {
    // Mengambil data dari elemen tersembunyi
    let pendidikan_terakhir = JSON.parse(document.getElementById('pendidikan-terakhir-data').textContent);
    let jumlah_data_pendidikan_terakhir = JSON.parse(document.getElementById('jumlah-pendidikan-terakhir-data').textContent);

    // Membuat chart bar menggunakan Chart.js
    new Chart(document.querySelector('#barChart-pendidikan-terakhir'), {
        type: 'bar',
        data: {
            labels: pendidikan_terakhir,
            datasets: [{
                data: jumlah_data_pendidikan_terakhir,
                label: 'Jumlah : ',
                backgroundColor: '#ff771d',
                borderColor: '#ff771d',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});

{/* <div id="pendidikan-terakhir-data" style="display:none;">
{!! json_encode($pendidikan_terakhir) !!}
</div>
<div id="jumlah-pendidikan-terakhir-data" style="display:none;">
{!! json_encode($jumlah_data_pendidikan_terakhir) !!}
</div> */}