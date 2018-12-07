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
<h1 class="three"><marquee direction="right">RELEVANCE</marquee></h1>
<marquee><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="relline.php">LINE GRAPH</a></span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="relbar.php">BAR GRAPH</a></span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="relradar.php">RADAR GRAPH</a></span></marquee>
<script src="Chart.js"></script>
<div class="chart-container" style="position:relative; height:30vh; width:80vw">
<canvas id="myChart" ></canvas></div>
<script id="one" >
var vhl = document.getElementById("myChart");
var datafirst={
            label: 'Volume',
            data: [7247708,6072983,4863577,3801407,2763535,1998738,877637,685365,576533,497366,698746,887363,1099873,3807874,6087377,8748774,9089838,20898378,30898747,57876764,78867673],
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
            data: [909.25,914.5,919.349976,933.099976,936,932.049988,929.450012,909.700012,906.900024,904,902.349976,911.950012,900,904.299988,910.75,895.849976,900.950012,901.700012,911.799988,910,918.5],
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
            data: [888.049988,893.299988,911.049988,917.549988,921.349976,919.200012,910,886.049988,892,887.049988,893.299988,895.75,889.099976,892.5,897,880,882.700012,885.25,892.049988,903.5,905],
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