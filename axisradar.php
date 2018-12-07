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
<body id="four">
<h1 class="three"><marquee direction="right">BAXIS BANK</marquee></h1>
<marquee><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="axisline.php">LINE GRAPH</a></span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="axisbar.php">BAR GRAPH</a></span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="axisradar.php">RADAR GRAPH</a></span></marquee>
<script src="Chart.js"></script>
<canvas id="myChart" width="1400" height="520"></canvas>
<script id="one" >
var vhl = document.getElementById("myChart");
var datafirst={
            label: 'Volume',
            data: [345462,389786,654564,787672,898722,916652,992673,1088782,2778667,18658821,19786862,29786861,47445342,89767752,98887762,999787622,235654566,6435263432,7867567526,8878266210,9083767561],
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
            data: [517.900024,523.950012,522.549988,521.950012,534.950012,538,539.200012,532.900024,526,525,532.5,525.900024,510.25,509.299988,522.549988,512.900024,510.5,506,504.5,504.649994,502.950012],
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
            data: [507.549988,507.450012,503,505.299988,514.650024,522.5,528.25,520.5,517.049988,509,522.5,516.75,496,495.200012,509.049988,501.600006,492.200012,493.700012,490.25,495.200012,495.200012],
			borderColor:'red',
			pointBackgroundColor:'red',
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