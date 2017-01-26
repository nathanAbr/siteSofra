<?php foreach($qsn as $qui){ ?>
    <div class="row">
        <div class="col-md-6">
            <h1 class="text-center text-black">Qui sommes nous ?</h1>
            <p class="text-justify text-black"><?php echo $qui->description_qsn; ?></p>
            <!--<p class="text-justify"><?php echo $qui->titre_img_qsn; ?></p>-->
        </div>
        <div class="col-md-3">
            <canvas id="monGraph1" width="200" height="200"></canvas>
            <canvas id="monGraph2" width="200" height="200"></canvas>
        </div>
    </div>
<?php } ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
<script>
var ctx = document.getElementById("monGraph1");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["2013", "2014", "2015"],
        datasets: [{
            label: 'Recouvrement de créances',
            data: [41000, 33000, 63000],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
var ctx = document.getElementById("monGraph2");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["2013", "2014", "2015"],
        datasets: [{
            label: 'Recherche d\'adresses',
            data: [110000, 112000, 145000],
            backgroundColor: [
                'rgba(255, 206, 86, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
                'rgba(255, 206, 86, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>