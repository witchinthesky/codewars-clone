
<div class="container is-max-widescreen">
    <canvas id="myChart" width="max" height="max"></canvas>
    <br>
    <button class="button is-success">
        Download data
    </button>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.11/lodash.min.js"></script>
<script>

</script>
<script>
    let temp = null;

    fetch("./getstat")
    .then(function(response) {
        return response.json();
        })
        .then(function(data){
            temp = data;
            console.log(temp);
            drawStats(temp);
        });

function drawStats(json) {


    console.log(temp['name']);
    console.log([12, 12, 12]);
    const ctx = document.getElementById('myChart');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
                labels: json['name'],
                datasets: [{
                    label: 'Passed Tests',
                    data: json['successtest'],
                    backgroundColor: [
                        'rgba(35, 209, 96, 0.2)',
                    ],
                    borderColor: [
                        'rgba(35, 209, 96, 1)',
                    ],
                    borderWidth: 2
                },
                {
                    label: 'Created Tests',
                    data: json['created'],
                    backgroundColor: [
                        'rgba(54, 54, 54, 0.2)',
                    ],
                    borderColor: [
                        'rgba(54, 54, 54, 1)',
                    ],
                    borderWidth: 2
                },
                {
                    label: 'Submitted Test',
                    data: json['tests'],
                    backgroundColor: [
                        'rgba(50, 115, 220, 0.2)',
                    ],
                    borderColor: [
                        'rgba(50, 115, 220, 1)',
                    ],
                    borderWidth: 2
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
};
</script>
</body></html>