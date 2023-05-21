var ctx = document.getElementById('lineChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['2014', '2015', '2016', '2017', '2018'],
        datasets: [{
            label: 'Laju Pertumbuhan',
            data: [2470802, 2481469, 2490622, 2497938, 2503708],
            backgroundColor: [
                'rgba(85,85,85, 1)'

            ],
            borderColor: 'rgb(30, 250, 30)',

            borderWidth: 1
        }]
    },
    options: {
        responsive: true
    }
});