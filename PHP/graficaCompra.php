<section id="principal">
<script src="js/Chart.min.js"></script>
<canvas id="myChart"></canvas>
<script>
<?php 
    require_once("php/compra.php");
    $obj = new Compra();
    $nombres = $obj->nombres();
    $cantidades = $obj->cantidades();
 ?>
var ctx = document.getElementById('myChart').getContext('2d');

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ <?php echo $nombres; ?> ],
        datasets: [{
            label: 'Gráfica de Compras',
            data: [ <?php echo $cantidades; ?> ],
            backgroundColor: "rgba(141,205,21,0.5)",
            borderColor: "#8DCD15",
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