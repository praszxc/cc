var ctx4 = document.getElementById('doughnut9').getContext('2d');
var myChart4 = new Chart(ctx4, {
    type: 'doughnut',
    data: {
        labels: ['Petani/Nelayan/Pengrajin', 
                 'Pekerja Dagang', 
                  'Pekerja Konstruksi', 
                  'Pekerja Industri', 
                  'Pekerja Kantor' 
                ],

        datasets: [{
            label: 'penghasilan',
            data: [2374080, 2894517, 3106647, 3787863, 5123962],
            backgroundColor: [
                '#1D267D',
                '#FF6969',
                '#00FFCA',
                '#F7D060',
                '#917FB3'
            ],
            borderColor: [
                '#1D267D',
                '#FF6969',
                '#00FFCA',
                '#F7D060',
                '#917FB3'
            ],
            borderWidth: 1
        }]

    },
    options: {
        responsive: true
    }
});