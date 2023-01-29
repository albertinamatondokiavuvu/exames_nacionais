<script type="text/javascript">
    var labels = {{ $year }};
    var users = {{ $user }};

    const data = {
        labels: labels,
        datasets: [{
            label: 'Utentes por ano',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: users,
        }]
    };

    const config = {
        type: 'polarArea',
        data: data,
        options: {}
    };

    const myChart = new Chart(
        document.getElementById('myChart1'),
        config
    );
</script>

<script>
    var ctx1 = document.getElementById('myChart2').getContext('2d');
    var chart1 = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ['Equivalência', 'Homologação'],
            datasets: [{
                label: 'Utentes por Serviço',
                backgroundColor: ['red', 'blue'],
                borderColor: 'rgb(255, 99, 132)',
                data: [' <?php echo $servicoGeral2; ?> ',' <?php echo $servicoGeral1; ?>'],
            }],
        },
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    stacked: true
                }]
            },
            responsive: true,
            title: {
                display: true,
                text: 'Utentes por serviço'
            },
        }
    });
</script>
<script>
    var ctx1 = document.getElementById('myChart3').getContext('2d');
    var chart1 = new Chart(ctx1, {
        type: 'doughnut',
        data: {
            labels: ['Feminino', 'Masculino'],
            datasets: [{
                label: 'Utentes por gênero',
                backgroundColor: ['yellow', 'blue'],
                borderColor: 'white',
                data: ['<?php echo $feminino; ?>', ' <?php echo $masculino; ?>'],
            }],
        },
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    stacked: false
                }]
            },
            responsive: true,
            title: {
                display: true,
                text: 'Utentes por Gênero'
            },
        }
    });
</script>
