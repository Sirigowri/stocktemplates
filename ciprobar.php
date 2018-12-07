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
<h1 class="three"><marquee direction="right">CIPRO</marquee></h1>
<marquee><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="ciproline.php">LINE GRAPH</a></span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="ciprobar.php">BAR GRAPH</a></span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="ciproradar.php">RADAR GRAPH</a></span></marquee>
<script src="Chart.js"></script>
<div class="chart-container" style="position:relative; height:30vh; width:80vw">
<canvas id="myChart" ></canvas></div>
<script id="one" >
var vhl = document.getElementById("myChart");
var datafirst={
            label: 'Volume',
            data: [27834,35678,56789,69209,78971,97684,108765,235656,564578,798790,2707786,2809077,6687555,7029093,8687863,8767656,8976532,9087234,10898687,12787422,24536576],
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
            data: [290.850006,287.75,287.899994,292,299.399994,296.600006,302,297.149994,296.5,295.200012,296.299988,295,287.600006,285.600006,280.799988,283.5,290.799988,287.350006,286.5,286.700012,286],
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
            data: [284.299988,283.149994,284.100006,286.100006,292.5,293,292,291.049988,286.600006,284.649994,291.200012,287.149994,283.049988,272.350006,273.25,273,278.799988,283.049988,280,283,283.299988],
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