<!DOCTYPE html>
<html>

<script src="./chart.min.js"></script>
<script src="./jquery/jquery-3.6.0.min.js"></script>
<script>
$.get("navbar.php", function(data){
  $("#navbar").replaceWith(data);
});
</script>
<link rel="stylesheet" href="pstyle.css">
<link rel="stylesheet" href="./foundation/css/foundation.min.css">

<body>
<canvas id="myChart" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = ["Dark Souls 3", "Bloodborne","Sekiro","Elden Ring", "Nioh 2"];
var yValues = [10, 2, 5, 12, 2.5];
var barColors = ["brown", "blue","orange","green","red"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Copies Sold in Millions "
    }
  }
});
</script>

</body>
</html>
