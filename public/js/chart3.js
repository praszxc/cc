var ctx3 = document.getElementById('doughnut2').getContext('2d');
var myChart3 = new Chart(ctx3, {
    type: 'doughnut',
    data: {
        labels: ['Belum Sekolah', 
                 'Tidak Tamat SD', 
                  'Tamat SD', 
                  'SMP', 
                  'SMA', 
                  'Diploma III',
                   'Strata 1',
                   'Strata 2'
                ],

        datasets: [{
            label: 'pendidikan',
            data: [2386, 1633, 2099, 2245, 5068, 598, 1519, 160],
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