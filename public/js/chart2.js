var ctx2 = document.getElementById('doughnut').getContext('2d');
var myChart2 = new Chart(ctx2, {
    type: 'doughnut',
    data: {
        labels: ['ASN', 'Wiraswasta', 'Pertanian & Peternakan', 'Pelajar & Mahasiswa', 'Pensiunan', 'Pekerjaan lainnya', 'Tidak bekerja'],

        datasets: [{
            label: 'pekerjaan',
            data: [497, 5390, 9, 3584, 238, 3595, 3234],
            backgroundColor: [
                '#1D267D',
                '#FF6969',
                '#00FFCA',
                '#F7D060',
                '#917FB3',
                '#D21312',
                '#FF6000'

            ],
            borderColor: [
                '#1D267D',
                '#FF6969',
                '#00FFCA',
                '#F7D060',
                '#917FB3',
                '#D21312',
                '#FF6000'

            ],
            borderWidth: 1
        }]

    },
    options: {
        responsive: true
    }
});