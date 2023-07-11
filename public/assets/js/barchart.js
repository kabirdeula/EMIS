var ctx = document.getElementById('barChart');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Excellent', 'Best', 'Very Good', 'Good', 'Average', 'Fair'],
        datasets: [{
            label: "Prediction",
            backgroundColor: [
                '#00FF00',
                '#FFD700',
                '#00CCFF',
                '#9ACD32',
                '#D3D3D3',
                '#FFE4B5'
            ],
            hoverBackgroundColor: [
                '#00FFFF',
                '#FFFF00',
                '#00FFFF',
                '#FFFF00',
                '#CCCCCC',
                '#FFFF00'
            ],
            borderColor: '#000000',
            data: [_excellent, _best, _verygood, _good, _average, _fair],
        }]
    },
    options: {
        maintainAspectRatio: true, // Set to false to allow chart to adjust to container size
        layout: {
            padding: {
                left: 10,
                right: 25,
                top: 25,
                bottom: 0
            }
        },
        plugins: {
            legend: {
                display: false
            },
        }
    }
});
