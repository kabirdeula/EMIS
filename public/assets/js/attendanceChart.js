var ctx = document.getElementById('attendanceChart');

new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Present', 'Absent'],
        datasets: [{
            data: [_present, _absent],
            backgroundColor: ['#0d6efd', '#dc3545'],
            hoverBackgroundColor: ['#0000FF', '#FF0066'],
        }]
    }
});
