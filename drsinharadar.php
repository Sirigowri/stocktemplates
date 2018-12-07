<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style/style.css" />
<style type="text/css">
.three{
	color:
	font-style:"Times New Roman";
	background-color:#00BFFF;
	text-align:center;
	
}
</style>	
<title>charts</title></head> 
<body>
<h1 class="three"><marquee direction="right"> ...Dr SINHA's Lab... </marquee></h1>
<marquee><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="drsinhaline.php">LINE GRAPH</a></span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="drsinhabar.php">BAR GRAPH</a></span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="drsinharadar.php">RADAR GRAPH</a></span></marquee>
<script src="Chart.js"></script>
<canvas id="myChart" width="1400" height="520"></canvas>
<script id="one" >
var vhl = document.getElementById("myChart");
var datafirst={
            label: 'Volume',
            data:[3456,23457,23468,34879,35667,36355,37777,47211,48777,49888,50898,61234,61567,62345,76345,77456,78444,78888,79234,149200,18440],
            lineTension:0.3,
			pointBackgroundColor:'blue',
			borderColor:'blue',
			
			pointRadius:5,
			pointHoverRadius:10,
			pointHitRadius:30,
			pointBorderWidth:2,
			pointStyle:'rectRounded',
            borderWidth: 3
			
           };
var datasecond={
            label: 'high',
            data: [2117.07,2116.76,2116.89,2116.77,2117.21,2117.25,2117.47,2117.50,2117.60,2117.71,2117.78,2117.80,2117.91,2117.94,2117.96,2117.16,2117.05,2117.13,2117.04,2117.15,2116.64,2116.72],
            lineTension:0.3,
			borderColor:'green',
			pointBackgroundColor:'green',
			pointRadius:5,
			pointHoverRadius:10,
			pointHitRadius:30,
			pointBorderWidth:2,
			pointStyle:'rectRounded',
            borderWidth: 3
           };
var datathird={
            label: 'low',
            data: [2116.59,2116.2116,2116.35,2116.32,2116.43,2116.8,2117.11,2117.09,2117.16,2117.21,2117.08,2117.01,2116.94,2117.12,2117.01,2116.87,2116.7973,2116.45,2116.51,2116.41,2116.14,2116.21],
            lineTension:0.3,
			borderColor:'red',
			pointBackgroundColor:'red',
			backgroundColor:'pink',
			pointRadius:5,
			pointHoverRadius:10,
			pointHitRadius:30,
			pointBorderWidth:2,
			pointStyle:'rectRounded',
            borderWidth: 3
           };	
var vhldata={
            labels:["07-03-2018","08-03-2018","09-03-2018","12-03-2018","13-03-2018","14-03-2018","15-03-2018","16-03-2018","19-03-2018","20-03-2018","21-03-2018","22-03-2018","23-03-2018","26-03-2018","27-03-2018","28-03-2018","02-04-2018","03-04-2018","04-04-2018","05-04-2018","06-04-2018"],	   
            datasets:[datafirst,datasecond,datathird]
			};
var lineChart= new Chart(vhl,{
         type:'radar',
		 data:vhldata,
		 
		 
		}); 
		 
           
    
</script>
</body>
</html>