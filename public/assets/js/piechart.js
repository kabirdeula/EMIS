var ctx = document.getElementById('pieChart');

new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Male', 'Female'],
        datasets: [{
            data: [_male, _female],
            backgroundColor: ['#000080', '#DF0030'],
            hoverBackgroundColor: ['#0000FF', '#FF0066'],
        }]
    },
});
