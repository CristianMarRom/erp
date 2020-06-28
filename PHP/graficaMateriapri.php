<section id="principal">
<script src="js/Chart.min.js"></script>
<canvas id="myChart"></canvas>
<script>
<?php 
    require_once("php/materiapr.php");
    $obj = new Materia();
    $nombres = $obj->nombres();
    $cantidades = $obj->cantidades();
 ?>
var ctx = document.getElementById('myChart').getContext('2d');

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ <?php echo $nombres; ?> ],
        datasets: [{
            label: 'Gráfica de Materias Primas',
            data: [ <?php echo $cantidades; ?> ],
            backgroundColor: "rgba(21,194,205,0.5)",
            borderColor: "#15C2CD",
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }}
});
</script>
</section>