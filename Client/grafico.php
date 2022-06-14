<?php include("../Components/cabecalho.php");  ?>
<?php include("../Components/menu.php");  ?>
<?php include("../Components/conexao.php"); ?>
<?php include("../Auth/verificar-login.php"); ?>

<?php 
    $mb = 10;
    $b = 5;
    $r = 1;
    $i = 4;
?>   

<!-- https://github.com/d3/d3/wiki/Gallery -->
<!-- https://developers.google.com/chart/interactive/docs/quick_start -->

<!--Load the AJAX API-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

    // Load the Visualization API and the corechart package.
    google.charts.load('current', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChart() {

    // Create the data table.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Topping');
    data.addColumn('number', 'Slices');
    data.addRows([
        ['MB',<?php echo $mb; ?> ],          
        ['B',<?php echo $b; ?>],          
        ['R',<?php echo $r; ?>],          
        ['I',<?php echo $i; ?>],          
    ]);

    // Set chart options
    var options = {'title':'Menções de PW 3',
                    'width':800,
                    'height':500,
                    'backgroundColor': '#1c1c1c',
                    'legend': {textStyle: {color: 'white'}},
                    'titleTextStyle': {color: 'white'},
                    'tooltip.textStyle': {color: 'white'}};

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(data, options);
    }
</script>



<section>	
    <div id="chart_div"></div>
</section>