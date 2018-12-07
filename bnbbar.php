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
<body >
<h1 class="three"><marquee direction="right">BNB</marquee></h1>
<marquee><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="bnbline.php">LINE GRAPH</a></span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="bnbbar.php">BAR GRAPH</a></span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="bnbradar.php">RADAR GRAPH</a></span></marquee>
<script src="Chart.js"></script>
<div class="chart-container" style="position:relative; height:30vh; width:80vw">
<canvas id="myChart" ></canvas></div>
<script id="one" >
var vhl = document.getElementById("myChart");
var datafirst={
            label: 'Volume',
            data: [2356755,3575757,4765724,5876562,5973665,6987736,7867565,8465452,8765636,9073765,10887866,8786735,7837765,6863543,4355646,3987867,2989787,1087376,908746,686365,467655],
            lineTension:0.3,
			pointBackgroundColor:'blue',
			borderColor:'blue',
			backgroundColor:'blue',
			pointRadius:5,
			pointHoverRadius:10,
			pointHitRadius:30,
			pointBorderWidth:2,
			pointStyle:'rectRounded',
            borderWidth: 3
			
           };
var datasecond={
            label: 'high',
            data: [96.900002,97.449997,97.650002,96.300003,102.650002,100.349998,101,102.25,100.449997,97.5,99.150002,98.150002,95.099998,96.449997,100,99.150002,96.849998,98.900002,97,98.099998,102.849998],
            lineTension:0.3,
			borderColor:'green',
			pointBackgroundColor:'green',
			pointRadius:5,
			pointHoverRadius:10,
			pointHitRadius:30,
			pointBorderWidth:2,
			backgroundColor:'green',
			pointStyle:'rectRounded',
            borderWidth: 3
           };
var datathird={
            label: 'low',
            data: [94.050003,94.300003,95,91.25,93.300003,93.300003,97.800003,97.599998,96.099998,95.25,97.150002,95.699997,92.75,93.050003,96.300003,94.550003,95.300003,94.650002,94.199997,95.150002,95.849998],
            lineTension:0.3,
			borderColor:'red',
			pointBackgroundColor:'red',
			backgroundColor:'red',
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
         type:'bar',
		 data:vhldata,
		 options:{
		     scales:{
			     xAxes:[{
				      gridLines:{
					     drawOnChartArea:false,
						 drawBorder:false,
					  }
					}],
                 yAxes:[{
                      gridLines:{
					       drawOnChartArea:false,
                           drawBorder:false,
                         }
                       }]
               }
            }			   
}); 

           
    
</script>
</body>
</html>